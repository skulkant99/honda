<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class DetailbasicprinController extends Controller
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
  $path = str_replace('backend/detailbasicprin/','',$request->path());
      if($path == 'backend/detailbasicprin'){
        $path = 'index';
      }

      if(view()->exists('backend.detailbasicprin.'.$path)){
          return view('backend.detailbasicprin.'.$path);
      }
      return view('backend.detailbasicprin.index');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.detailbasicprin.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {

        $sRowGr = \App\Models\Backend\Detailbasicprin\Detailbasicprin::find($id);
       $sRow = \App\Models\Backend\Detailbasicprin\Detailbasicprin::where('group_id', $sRowGr->group_id)->get(); 
    
       return View('backend.detailbasicprin.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
    }

    public function update(Request $request, $id)
    {
      
      return $this->form($id);
    }


    public function form($id=NULL)
    {
      \DB::beginTransaction();
      try {

                  
             if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Detailbasicprin\Detailbasicprin::where('id', request('id')[$i])->update(
                    [

            'topic' => request('topic')[$i],
            'detail' => request('detail')[$i],
           

                   ]
                );
             }
  


          }else{

              $sRow = new \App\Models\Backend\Detailbasicprin\Detailbasicprin;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Detailbasicprin\Detailbasicprin::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                    
                      'topic' => request('topic')[$i],
                       'detail' => request('detail')[$i],
                     


                    ]
                );          
              }


          }//end

         

          \DB::commit();

         return redirect()->action('Backend\DetailbasicprinController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\DetailbasicprinController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {

       $sRowGr = \App\Models\Backend\Detailbasicprin\Detailbasicprin::find($id);
       $sRow = \App\Models\Backend\Detailbasicprin\Detailbasicprin::where('group_id', $sRowGr->group_id);
   
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){

      $sTable = \App\Models\Backend\Detailbasicprin\Detailbasicprin::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      
      $sQuery = \DataTables::of($sTable);
      
      return $sQuery
      ->addColumn('topic_en', function($row) {
       // dd($row->topic_en);
       return $row->topic_en;
      })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }


    
}
