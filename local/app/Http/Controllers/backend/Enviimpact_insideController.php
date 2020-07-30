<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class Enviimpact_insideController extends Controller
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
      $path = str_replace('backend/enviimpact_inside/','',$request->path());
      if($path == 'backend/enviimpact_inside'){
        $path = 'index';
      }
      if(view()->exists('backend.enviimpact_inside.'.$path)){
          return view('backend.enviimpact_inside.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.enviimpact_inside.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
         $sRowGr = \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::find($id);
       $sRow = \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::where('group_id', $sRowGr->group_id)->get(); 
     
       return View('backend.enviimpact_inside.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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

              \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::where('id', request('id')[$i])->update(
                    [

            'topic_en' => request('topic_en')[$i],
            'topicchart_en' => request('topicchart_en')[$i],
            'topicchart2_en' => request('topicchart2_en')[$i],
            'detail_en' => request('detail_en')[$i],
           

                   ]
                );
             }



          }else{

              $sRow = new \App\Models\Backend\Enviimpact_inside\Enviimpact_inside;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                       'image' => request('image'),
                     'topic_en' => request('topic_en')[$i],
            'topicchart_en' => request('topicchart_en')[$i],
            'topicchart2_en' => request('topicchart2_en')[$i],
            'detail_en' => request('detail_en')[$i],
                     


                    ]
                );          
              }


          }//end

       

          \DB::commit();

         return redirect()->action('Backend\Enviimpact_insideController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Enviimpact_insideController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {

       $sRowGr = \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::find($id);
       $sRow = \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::where('group_id', $sRowGr->group_id);
     
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Enviimpact_inside\Enviimpact_inside::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
     $sQuery = \DataTables::of($sTable);
      return $sQuery
    
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
