<?php

namespace App\Http\Controllers\Backend\Environment\BusinessActivities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.environment.business_activities.product.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.environment.business_activities.product.form');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
//    dd($request);
    return $this->form();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    try {
      $sRowGr = \App\Models\Backend\Environment\Product::find($id);
      $sRow = \App\Models\Backend\Environment\Product::where('group_id', $sRowGr->group_id)->orderBy('id', 'asc')->get();
      return View('backend.environment.business_activities.product.form')->with(array('sRow' => $sRow, 'id' => $id));
    } catch (\Exception $e) {
      return redirect()->action('Backend\Environment\BusinessActivities\ProductController@index')->with(['alert' => \App\Models\Alert::e($e)]);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    return $this->form($id);
  }

  public function form($id = NULL)
  {

    \DB::beginTransaction();
    try {

      $img_name = null;

      if ($id) {

        $request = app('request');
        if ($request->hasFile('image')) {
          $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image = $request->file('image');
//        dd($image);
          $name = time() . '.' . $image->getClientOriginalExtension();
          $destinationPath = public_path('images/Environment/BusinessActivities/Products/');
          $image->move($destinationPath, $name);
          $img_name = $name;
        }
          for ($i = 0; $i < count(request('id')); $i++) {

            if ($img_name != null) {
              \App\Models\Backend\Environment\Product::where('id', request('id')[$i])->update(
                [
                  'image' => $img_name,
                  'header' => request('header'),
                  'content' => request('content')[$i],
                  'updated_at' => date('Y-m-d H:i:s'),
                ]
              );
            }else{
              \App\Models\Backend\Environment\Product::where('id', request('id')[$i])->update(
                [
                  'header' => request('header')[$i],
                  'content' => request('content')[$i],
                  'updated_at' => date('Y-m-d H:i:s'),
                ]
              );
            }
        }
      } else {
        $sRow = new \App\Models\Backend\Environment\Product;
        $gr = $sRow::max('group_id');
        $gr = $gr + 1;

        $langCnt = count(request('lang'));
        $request = app('request');
        if ($request->hasFile('image')) {
          $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image = $request->file('image');
//        dd($image);
          $name = time() . '.' . $image->getClientOriginalExtension();
          $destinationPath = public_path('images/Environment/BusinessActivities/Products/');
          $image->move($destinationPath, $name);
          $img_name = $name;
        }

        for ($i = 0; $i < $langCnt; $i++) {
          if ($img_name != null) {
            \App\Models\Backend\Environment\Product::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'image' => $img_name,
                'header' => request('header'),
                'content' => request('content')[$i],
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }else{
            \App\Models\Backend\Environment\Product::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'header' => request('header')[$i],
                'content' => request('content')[$i],
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }
        }
      }
      \DB::commit();

      return redirect()->action('Backend\Environment\BusinessActivities\ProductController@index')->with(['alert' => \App\Models\Alert::Msg('success')]);
    } catch (\Exception $e) {
      echo $e->getMessage();
      \DB::rollback();
      return redirect()->action('Backend\Environment\BusinessActivities\ProductController@index')->with(['alert' => \App\Models\Alert::e($e)]);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $sRowGr = \App\Models\Backend\Environment\Product::find($id);
    $sRow = \App\Models\Backend\Environment\Product::where('group_id', $sRowGr->group_id);
    if ($sRowGr) {
      File::delete(public_path('images/Environment/BusinessActivities/Products/' . $sRowGr[0]->image . ''));
      $sRow->forceDelete();
    }
    return response()->json(\App\Models\Alert::Msg('success'));
  }

  public function Datatable()
  {
    $sTable = \App\Models\Backend\Environment\Product::search()->groupBy('group_id')->orderBy('id', 'asc');
    $sQuery = \DataTables::of($sTable);
    return $sQuery
      ->addColumn('name', function ($row) {
        // return $row->fname.' '.$row->surname;
      })
      ->addColumn('updated_at', function ($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
  }

}
