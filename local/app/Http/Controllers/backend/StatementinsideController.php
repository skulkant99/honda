<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class StatementinsideController extends Controller
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
      $path = str_replace('backend/statementinside/','',$request->path());
      if($path == 'backend/statementinside'){
        $path = 'index';
      }
      if(view()->exists('backend.statementinside.'.$path)){
          return view('backend.statementinside.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.statementinside.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
      $sRowGr = \App\Models\Backend\Statementinside\Statementinside::find($id);
       $sRow = \App\Models\Backend\Statementinside\Statementinside::where('group_id', $sRowGr->group_id)->get();
       return View('backend.statementinside.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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

              \App\Models\Backend\Statementinside\Statementinside::where('id', request('id')[$i])->update(
                    [
            'header'=> request('header')[$i],
            'topic' => request('topic')[$i],
            'topic2'=> request('topic2')[$i],
            'detail' => request('detail')[$i],
            'detail2'=> request('detail2')[$i],

                   ]
                );
             }
          }else{

              $sRow = new \App\Models\Backend\Statementinside\Statementinside;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Statementinside\Statementinside::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                      'header'=> request('header')[$i],
                      'topic' => request('topic')[$i],
                      'topic2'=> request('topic2')[$i],
                      'detail' => request('detail')[$i],
                      'detail2'=> request('detail2')[$i],


                    ]
                );          
              }


          }

     

  
         
          

          \DB::commit();

         return redirect()->action('Backend\StatementinsideController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\StatementinsideController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
      $sRowGr = \App\Models\Backend\Statementinside\Statementinside::find($id);
       $sRow = \App\Models\Backend\Statementinside\Statementinside::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Statementinside\Statementinside::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
     
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
