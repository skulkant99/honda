<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class triple_headerController extends Controller
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
      $path = str_replace('backend/triple_header/','',$request->path());
      if($path == 'backend/triple_header'){
        $path = 'index';
      }
      if(view()->exists('backend.triple_header.'.$path)){
          return view('backend.triple_header.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.triple_header.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
        $sRowGr = \App\Models\Backend\Triple_header\Triple_header::find($id); 
       $sRow = \App\Models\Backend\Triple_header\Triple_header::where('group_id', $sRowGr->group_id)->get();
       return View('backend.triple_header.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Triple_header\Triple_header::where('id', request('id')[$i])->update(
                    [
            'header'=> request('header')[$i],
            'content' => request('content')[$i],
           

                   ]
                );
             }
          }else{

              $sRow = new \App\Models\Backend\Triple_header\Triple_header;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Triple_header\Triple_header(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                      'header'=> request('header')[$i],
                      'content' => request('content')[$i],
                    

                    ]
                );          
              }


          }
            \DB::commit();
         return redirect()->action('Backend\Triple_headerController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Triple_headerController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
     $sRowGr = \App\Models\Backend\Triple_header\Triple_header::find($id); 
       $sRow = \App\Models\Backend\Triple_header\Triple_header::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Triple_header\Triple_header::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
     
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
