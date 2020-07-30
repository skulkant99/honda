<?php

namespace App\Http\Controllers\Backend\Safety\ASEANNCAP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SecurityTopicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.safety.asean_ncap.security_topics.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.safety.asean_ncap.security_topics.form');
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
      $sRowGr = \App\Models\Backend\Safety\SecurityTopics::find($id);
      $sRow = \App\Models\Backend\Safety\SecurityTopics::where('group_id', $sRowGr->group_id)->orderBy('id', 'asc')->get();
      return View('backend.safety.asean_ncap.security_topics.form')->with(array('sRow' => $sRow, 'id' => $id));
    } catch (\Exception $e) {
      return redirect()->action('Backend\Safety\ASEANNCAP\SecurityTopicController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
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
          $destinationPath = public_path('images/Safety/ASEANNCAP/SecurityTopics/Image/');
          $image->move($destinationPath, $name);
          $img_name = $name;
        }
        for ($i = 0; $i < count(request('id')); $i++) {

          if ($img_name != null) {
            \App\Models\Backend\Safety\SecurityTopics::where('id', request('id')[$i])->update(
              [
                'image' => $img_name,
                'header' => request('header')[$i],
                'topic' => request('topic')[$i],
                'header' => request('header')[$i],
                'content' => request('content')[$i],
                'footer' => request('footer')[$i],
                'url' => request('url'),
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }else{
            \App\Models\Backend\Safety\SecurityTopics::where('id', request('id')[$i])->update(
              [
                'header' => request('header')[$i],
                'topic' => request('topic')[$i],
                'header' => request('header')[$i],
                'content' => request('content')[$i],
                'footer' => request('footer')[$i],
                'url' => request('url'),
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }
        }
      } else {
        $sRow = new \App\Models\Backend\Safety\SecurityTopics;
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
          $destinationPath = public_path('images/Safety/ASEANNCAP/SecurityTopics/Image/');
          $image->move($destinationPath, $name);
          $img_name = $name;
        }

        for ($i = 0; $i < $langCnt; $i++) {
          if ($img_name != null) {
            \App\Models\Backend\Safety\SecurityTopics::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'image' => $img_name,
                'header' => request('header')[$i],
                'topic' => request('topic')[$i],
                'header' => request('header')[$i],
                'content' => request('content')[$i],
                'footer' => request('footer')[$i],
                'url' => request('url'),
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }else{
            \App\Models\Backend\Safety\SecurityTopics::insert(
              [
                'group_id' => $gr,
                'lang' => request('lang')[$i],
                'header' => request('header')[$i],
                'topic' => request('topic')[$i],
                'header' => request('header')[$i],
                'content' => request('content')[$i],
                'footer' => request('footer')[$i],
                'url' => request('url'),
                'updated_at' => date('Y-m-d H:i:s'),
              ]
            );
          }
        }
      }


      \DB::commit();

      return redirect()->action('Backend\Safety\ASEANNCAP\SecurityTopicController@index')->with(['alert' => \App\Models\Alert::Msg('success')]);
    } catch (\Exception $e) {
      echo $e->getMessage();
      \DB::rollback();
      return redirect()->action('Backend\Safety\ASEANNCAP\SecurityTopicController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
    $sRowGr = \App\Models\Backend\Safety\SecurityTopics::find($id);
    $sRow = \App\Models\Backend\Safety\SecurityTopics::where('group_id', $sRowGr->group_id);
    if( $sRow ){
      File::delete(public_path('images/Safety/ASEANNCAP/SecurityTopics/Image/'.$sRowGr[0]->image.''));
      $sRow->forceDelete();
    }
    return response()->json(\App\Models\Alert::Msg('success'));
  }

  public function Datatable(){
    $sTable = \App\Models\Backend\Safety\SecurityTopics::search()->groupBy('group_id')->orderBy('id', 'asc');
    $sQuery = \DataTables::of($sTable);
    return $sQuery
      ->make(true);
  }
}
