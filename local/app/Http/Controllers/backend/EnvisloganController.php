<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class EnvisloganController extends Controller
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
      $path = str_replace('backend/envislogan/','',$request->path());
      if($path == 'backend/envislogan'){
        $path = 'index';
      }
      if(view()->exists('backend.envislogan.'.$path)){
          return view('backend.envislogan.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.envislogan.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
     $sRowGr = \App\Models\Backend\Envislogan\Envislogan::find($id);
       $sRow = \App\Models\Backend\Envislogan\Envislogan::where('group_id', $sRowGr->group_id)->get(); 
       return View('backend.envislogan.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\Envislogan\Envislogan::find($id);
          }else{
            $sRow = new \App\Models\Backend\Envislogan\Envislogan;
          }

 if( $id ){
        if (request('image')) {

                $sName = '';
                $ext = request('image')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 5, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/environment_image/');            
                File::move( request('image')->getPathName() , $destinationPath_origi.time().$sName.'.'.$ext);
                
                $sRow->image =  time().$sName .'.' . $ext;
                $sRow->save();
         
           }

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Envislogan\Envislogan::where('id', request('id')[$i])->update(
                    [

            'topic' => request('topic')[$i],
            'content' => request('content')[$i],
           

                   ]
                );
             }
                      if (request('image_bg')) {

                $sName = '';
                $ext = request('image_bg')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 15, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/environment_image/');            
                File::move( request('image_bg')->getPathName() , $destinationPath_origi.time().$sName.'.'.$ext);
                
                $sRow->image_bg = time().$sName .'.' . $ext;
                $sRow->save();
         
           }



             


 
     }else{

              $sRow = new \App\Models\Backend\Envislogan\Envislogan;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Envislogan\Envislogan::insert(
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

         return redirect()->action('Backend\EnvisloganController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\EnvisloganController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
              $sRowGr = \App\Models\Backend\Envislogan\Envislogan::find($id);
       $sRow = \App\Models\Backend\Envislogan\Envislogan::where('group_id', $sRowGr->group_id);
  
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Envislogan\Envislogan::search()->groupBy('group_id')->orderBy('id', 'asc');
     $sQuery = \DataTables::of($sTable);
      return $sQuery
      ->addColumn('image', function($row) {

        return $row->image;
         })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
