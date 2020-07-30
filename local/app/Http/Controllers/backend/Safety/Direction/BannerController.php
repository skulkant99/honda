<?php

namespace App\Http\Controllers\Backend\Safety\Direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.safety.direction.banner.index');

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $sLocale = \App\Models\Locale::all();
    return view('backend.safety.direction.banner.form', ['sLocale' => $sLocale]);
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
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
      $sLocale = \App\Models\Locale::all();
      $sRow = \App\Models\Backend\Safety\BannerDirection::find($id);
      return View('backend.safety.direction.banner.form')->with(array('sRow' => $sRow, 'sLocale' => $sLocale));
    } catch (\Exception $e) {
      return redirect()->action('Backend\Safety\Direction\BannerController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
      if ($id) {
        $sRow = \App\Models\Backend\Safety\BannerDirection::find($id);
      } else {
        $sRow = new \App\Models\Backend\Safety\BannerDirection();
      }

      //request
      $request = app('request');

      if ($request->hasFile('image')) {
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
//        dd($image);
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('images/Safety/Directions/Banner/');
        File::delete(public_path('images/Safety/Directions/Banner/'.$sRow->image.''));
        $image->move($destinationPath, $name);
        $sRow->image = $name;
      }


      $sRow->save();
      \DB::commit();

      return redirect()->action('Backend\Safety\Direction\BannerController@index')->with(['alert' => \App\Models\Alert::Msg('success')]);
    } catch (\Exception $e) {
      echo $e->getMessage();
      \DB::rollback();
      return redirect()->action('Backend\Safety\Direction\BannerController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
    $sRow = \App\Models\Backend\Safety\BannerDirection::find($id);
    if ($sRow) {
      $sRow->forceDelete();
    }
    return response()->json(\App\Models\Alert::Msg('success'));
  }

  public function Datatable()
  {
    $sTable = \App\Models\Backend\Safety\BannerDirection::search()->orderBy('id', 'asc');
    $sQuery = \DataTables::of($sTable);
    return $sQuery
      ->make(true);
  }
}
