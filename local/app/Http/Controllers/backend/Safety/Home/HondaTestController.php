<?php

namespace App\Http\Controllers\Backend\Safety\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HondaTestController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.safety.home.honda_test.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $sLocale = \App\Models\Locale::all();
    return view('backend.safety.home.honda_test.form', ['sLocale' => $sLocale]);
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
      $sRow = \App\Models\Backend\Safety\HondaTest::find($id);
      return View('backend.safety.home.honda_test.form')->with(array('sRow' => $sRow, 'sLocale' => $sLocale));
    } catch (\Exception $e) {
      return redirect()->action('Backend\Safety\Home\HondaTestController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
        $sRow = \App\Models\Backend\Safety\HondaTest::find($id);
      } else {
        $sRow = new \App\Models\Backend\Safety\HondaTest();
      }
      $sRow->url = request('url');
      $sRow->url = request('url');


      $sRow->save();
      \DB::commit();

      return redirect()->action('Backend\Safety\Home\HondaTestController@index')->with(['alert' => \App\Models\Alert::Msg('success')]);
    } catch (\Exception $e) {
      echo $e->getMessage();
      \DB::rollback();
      return redirect()->action('Backend\Safety\Home\HondaTestController@index')->with(['alert' => \App\Models\Alert::e($e)]);
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
    $sRow = \App\Models\Backend\Safety\HondaTest::find($id);
    if ($sRow) {
      $sRow->forceDelete();
    }
    return response()->json(\App\Models\Alert::Msg('success'));
  }

  public function Datatable()
  {
    $sTable = \App\Models\Backend\Safety\HondaTest::search()->orderBy('id', 'asc');
    $sQuery = \DataTables::of($sTable);
    return $sQuery
      ->make(true);
  }
}
