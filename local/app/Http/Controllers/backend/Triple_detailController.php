<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class Triple_detailController extends Controller
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
      $path = str_replace('backend/triple_detail/','',$request->path());
      if($path == 'backend/triple_detail'){
        $path = 'index';
      }
      if(view()->exists('backend.triple_detail.'.$path)){
          return view('backend.triple_detail.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.triple_detail.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRowGr = \App\Models\Backend\Triple_detail\Triple_detail::find($id);
       $sRow = \App\Models\Backend\Triple_detail\Triple_detail::where('group_id', $sRowGr->group_id)->get();     
       return View('backend.triple_detail.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\Triple_detail\Triple_detail::find($id);
          }else{
            $sRow = new \App\Models\Backend\Triple_detail\Triple_detail;
          }
             if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Triple_detail\Triple_detail::where('id', request('id')[$i])->update(
                    [

            'topic' => request('topic')[$i],
            'content' => request('content')[$i],
           

                   ]
                );
             }
            if (request('image')) {

                $sName = '';
                $ext = request('image')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 12, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/triple_zero/');            
                File::move( request('image')->getPathName() , $destinationPath_origi.$sName.'.'.$ext);
              
                $sRow->image = $sName .'.' . $ext;
                $sRow->save();
         
           }


          }else{

              $sRow = new \App\Models\Backend\Triple_detail\Triple_detail;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Triple_detail\Triple_detail::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                       'image' => request('image'),
                      'topic' => request('topic')[$i],
                       'content' => request('content')[$i],
                     


                    ]
                );          
              }


          }



     

    
             
     

     

  
         
          

          \DB::commit();

         return redirect()->action('Backend\Triple_detailController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Triple_detailController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
        $sRowGr = \App\Models\Backend\Triple_detail\Triple_detail::find($id);
       $sRow = \App\Models\Backend\Triple_detail\Triple_detail::where('group_id', $sRowGr->group_id);
    
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Triple_detail\Triple_detail::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
     
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
