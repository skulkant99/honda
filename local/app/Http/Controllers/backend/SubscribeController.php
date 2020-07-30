<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class SubscribeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {

      $path = str_replace('backend/subscribe/','',$request->path());
      if($path == 'backend/subscribe'){
        $path = 'index';
      }
      if(view()->exists('backend.subscribe.'.$path)){
          return view('backend.subscribe.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      return view('backend.subscribe.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRow = \App\Models\Backend\Subscribe\Subscribe::find($id);
       return View('backend.subscribe.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
    }

    public function update(Request $request, $id)
    {
      // dd($request->all());
      return $this->form($id);
    }


    public function form($id=NULL)
    {
      \DB::beginTransaction();
      try {
          if( $id ){
            $sRow = \App\Models\Backend\Subscribe\Subscribe::find($id);
          }else{
            $sRow = new \App\Models\Backend\Subscribe\Subscribe;
          }
          $sRow->save_date    = request('save_date');
          $sRow->save_time    = request('save_time');
          $sRow->email    = request('email');
          
          $sRow->created_at = date('Y-m-d H:i:s');
          $sRow->save();

          \DB::commit();

         return redirect()->action('Backend\SubscribeController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\SubscribeController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
      $sRow = \App\Models\Backend\Subscribe\Subscribe::find($id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Subscribe\Subscribe::search()->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
      ->addColumn('name', function($row) {
        // return $row->fname.' '.$row->surname;
      })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
