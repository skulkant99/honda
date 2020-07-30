<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class Enviimpact_bannerController extends Controller
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
      $path = str_replace('backend/enviimpact_banner/','',$request->path());
      if($path == 'backend/enviimpact_banner'){
        $path = 'index';
      }
      if(view()->exists('backend.enviimpact_banner.'.$path)){
          return view('backend.enviimpact_banner.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.enviimpact_banner.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRowGr = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::find($id);
       $sRow = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::where('group_id', $sRowGr->group_id)->get();   

     
       return View('backend.enviimpact_banner.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::find($id);
          }else{
            $sRow = new \App\Models\Backend\Enviimpact_banner\Enviimpact_banner;
          }
             if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::where('id', request('id')[$i])->update(
                    [

            'header' => request('header')[$i],
            'header2' => request('header2')[$i],
            'detail' => request('detail')[$i],
           

                   ]
                );
             }
  if (request('image')) {

                $sName = '';
                $ext = request('image')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 14, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/environment_image/');            
                File::move( request('image')->getPathName() , $destinationPath_origi.$sName.'.'.$ext);
              
                $sRow->image = $sName .'.' . $ext;
                $sRow->save();
         
           }

   }else{

              $sRow = new \App\Models\Backend\Enviimpact_banner\Enviimpact_banner;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                       'image' => request('image'),
                      'header' => request('header')[$i],
            'header2' => request('header2')[$i],
            'detail' => request('detail')[$i],
           
                     


                    ]
                );          
              }


          }


             
         
          

          \DB::commit();

         return redirect()->action('Backend\Enviimpact_bannerController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Enviimpact_bannerController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
        $sRowGr = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::find($id);
       $sRow = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Enviimpact_banner\Enviimpact_banner::search()->groupBy('group_id')->orderBy('id', 'asc');
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
