<?php

namespace App\Http\Controllers\Backend\Safety\BasicApproach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InsideDetailController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.safety.basic_approach.inside_details.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $sLocale = \App\Models\Locale::all();
    return view('backend.safety.basic_approach.inside_details.form');
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
      $sRowGr = \App\Models\Backend\Safety\InsideDetail::find($id);
      $sRow = \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->orderBy('id', 'asc')->get();
      return View('backend.safety.basic_approach.inside_details.form')->with(array('sRow' => $sRow, 'id' => $id));
    } catch (\Exception $e) {
      return redirect()->action('Backend\Safety\BasicApproach\InsideDetailController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
      $img_name2 = null;
      $img_name3 = null;
      $img_name4 = null;
      $img_name5 = null;
      $img_name6 = null;

      if ($id) {
        $sRowGr = \App\Models\Backend\Safety\InsideDetail::find($id);
//        dd($sRowGr);

        $request = app('request');

        if ($request->hasFile('image')) {
          $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image = $request->file('image');
//        dd($image);
          $name = time() . '.' . $image->getClientOriginalExtension();
          $destinationPath = public_path('images/Safety/BasicApproach/InsideDetails/Image');
          $image->move($destinationPath, $name);
          $img_name = $name;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image' => $img_name,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );

        }
        if ($request->hasFile('image2')) {
          $this->validate($request, [
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image2 = $request->file('image2');
//        dd($image2);
          $name2 = time() . '.' . $image2->getClientOriginalExtension();
          $destinationPath2 = public_path('images/Safety/BasicApproach/InsideDetails/Image2/');
          $image2->move($destinationPath2, $name2);
          $img_name2 = $name2;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image2' => $img_name2,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );
        }
        if ($request->hasFile('image3')) {
          $this->validate($request, [
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image3 = $request->file('image3');
//        dd($image);
          $name3 = time() . '.' . $image3->getClientOriginalExtension();
          $destinationPath3 = public_path('images/Safety/BasicApproach/InsideDetails/Image3/');
          $image3->move($destinationPath3, $name3);
          $img_name3 = $name3;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image3' => $img_name3,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );

        }
        if ($request->hasFile('image4')) {
          $this->validate($request, [
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image4 = $request->file('image4');
//        dd($image);
          $name4 = time() . '.' . $image4->getClientOriginalExtension();
          $destinationPath4 = public_path('images/Safety/BasicApproach/InsideDetails/Image4/');
          $image4->move($destinationPath4, $name4);
          $img_name4 = $name4;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image4' => $img_name4,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );
        }

        if ($request->hasFile('image5')) {
          $this->validate($request, [
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image5 = $request->file('image5');
//        dd($image);
          $name5 = time() . '.' . $image5->getClientOriginalExtension();
          $destinationPath5 = public_path('images/Safety/BasicApproach/InsideDetails/Image5/');
          $image5->move($destinationPath5, $name5);
          $img_name5 = $name5;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image5' => $img_name5,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );
        }

        if ($request->hasFile('image6')) {
          $this->validate($request, [
            'image6' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image6 = $request->file('image6');
//        dd($image);
          $name6 = time() . '.' . $image6->getClientOriginalExtension();
          $destinationPath6 = public_path('images/Safety/BasicApproach/InsideDetails/Image6/');
          $image6->move($destinationPath6, $name6);
          $img_name6 = $name6;
          \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id)->update(
            [
              'image6' => $img_name6,
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );
        }

        for ($i = 0; $i < count(request('id')); $i++) {
          \App\Models\Backend\Safety\InsideDetail::where('id', request('id')[$i])->update(
            [
              'topic' => request('topic')[$i],
              'topic2' => request('topic2')[$i],
              'content' => request('content')[$i],
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );
        }
      } else {
        $sRow = new \App\Models\Backend\Safety\InsideDetail;
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
          $destinationPath = public_path('images/Safety/BasicApproach/InsideDetails/Image');
          $image->move($destinationPath, $name);
          $img_name = $name;
        }
        if ($request->hasFile('image2')) {
          $this->validate($request, [
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image2 = $request->file('image2');
//        dd($image2);
          $name2 = time() . '.' . $image2->getClientOriginalExtension();
          $destinationPath2 = public_path('images/Safety/BasicApproach/InsideDetails/Image2/');
          $image2->move($destinationPath2, $name2);
          $img_name2 = $name2;
        }
        if ($request->hasFile('image3')) {
          $this->validate($request, [
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image3 = $request->file('image3');
//        dd($image);
          $name3 = time() . '.' . $image3->getClientOriginalExtension();
          $destinationPath3 = public_path('images/Safety/BasicApproach/InsideDetails/Image3/');
          $image3->move($destinationPath3, $name3);
          $img_name3 = $name3;
        }
        if ($request->hasFile('image4')) {
          $this->validate($request, [
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image4 = $request->file('image4');
//        dd($image);
          $name4 = time() . '.' . $image4->getClientOriginalExtension();
          $destinationPath4 = public_path('images/Safety/BasicApproach/InsideDetails/Image4/');
          $image4->move($destinationPath4, $name4);
          $img_name4 = $name4;
        }

        if ($request->hasFile('image5')) {
          $this->validate($request, [
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image5 = $request->file('image5');
//        dd($image);
          $name5 = time() . '.' . $image5->getClientOriginalExtension();
          $destinationPath5 = public_path('images/Safety/BasicApproach/InsideDetails/Image5/');
          $image5->move($destinationPath5, $name5);
          $img_name5 = $name5;
        }

        if ($request->hasFile('image6')) {
          $this->validate($request, [
            'image6' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $image6 = $request->file('image6');
//        dd($image);
          $name6 = time() . '.' . $image6->getClientOriginalExtension();
          $destinationPath6 = public_path('images/Safety/BasicApproach/InsideDetails/Image6/');
          $image6->move($destinationPath6, $name6);
          $img_name6 = $name6;
        }

        for ($i = 0; $i < $langCnt; $i++) {
          if ($img_name != null) {

            \App\Models\Backend\Safety\InsideDetail::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'image' => $img_name,
                'image2' => $img_name2,
                'image3' => $img_name3,
                'image4' => $img_name4,
                'image5' => $img_name5,
                'image6' => $img_name6,
                'topic' => request('topic')[$i],
                'topic2' => request('topic2')[$i],
                'content' => request('content')[$i],
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          } else {
            \App\Models\Backend\Safety\InsideDetail::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'topic' => request('topic')[$i],
                'topic2' => request('topic2')[$i],
                'content' => request('content')[$i],
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }
        }
      }

      \DB::commit();

      return redirect()->action('Backend\Safety\BasicApproach\InsideDetailController@index')->with(['alert' => \App\Models\Alert::Msg('success')]);
    } catch (\Exception $e) {
      echo $e->getMessage();
      \DB::rollback();
      return redirect()->action('Backend\Safety\BasicApproach\InsideDetailController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
    $sRowGr = \App\Models\Backend\Safety\InsideDetail::find($id);
    $sRow = \App\Models\Backend\Safety\InsideDetail::where('group_id', $sRowGr->group_id);
    if ($sRow) {
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image/' . $sRowGr[0]->image . ''));
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image2/' . $sRowGr[0]->image2 . ''));
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image3/' . $sRowGr[0]->image3 . ''));
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image4/' . $sRowGr[0]->image4 . ''));
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image5/' . $sRowGr[0]->image5 . ''));
      File::delete(public_path('images/Safety/BasicApproach/InsideDetails/Image6/' . $sRowGr[0]->image6 . ''));
      $sRow->forceDelete();
    }
    return response()->json(\App\Models\Alert::Msg('success'));
  }

  public function Datatable()
  {
    $sTable = \App\Models\Backend\Safety\InsideDetail::search()->groupBy('group_id')->orderBy('id', 'asc');
    $sQuery = \DataTables::of($sTable);
    return $sQuery
      ->make(true);
  }
}
