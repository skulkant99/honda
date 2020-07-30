<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class SecurityNcapController extends Controller
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
// dd($request->path());
      $path = str_replace('backend/securityncap/','',$request->path());
      if($path == 'backend/securityncap'){
        $path = 'index';
      }
      if(view()->exists('backend.securityncap.'.$path)){
          return view('backend.securityncap.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      // $sLocale  = \App\Models\Locale::all();
      return view('backend.securityncap.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {

       $sRowGr = \App\Models\Backend\Securityncap\Securityncap::find($id);
       $sRow = \App\Models\Backend\Securityncap\Securityncap::where('group_id', $sRowGr->group_id)->get();
       return View('backend.securityncap.form')->with(array('sRow'=>$sRow, 'id'=>$id) );

    }

    public function update(Request $request, $id)
    {
      // dd($request->all());
      return $this->form($id);
    }


    public function form( $id=NULL )
    {
      \DB::beginTransaction();
      try {


          if( $id ){
            $sRow = \App\Models\Backend\Securityncap\Securityncap::find($id);
          }else{
            $sRow = new \App\Models\Backend\Securityncap\Securityncap;
          }


          if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\Securityncap\Securityncap::where('id', request('id')[$i])->update(
                    [

                        'topic'         => request('topic')[$i],
                        'content'         => request('content')[$i],
                        'url'         => request('url'),

                        'updated_at'         => date('Y-m-d H:i:s'),

                    ]
                );
             }

            if (request('image')) {

                $sName = '';
                $ext = request('image')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 10, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/securityncap/');            
                File::move( request('image')->getPathName() , $destinationPath_origi.$sName.'.'.$ext);

                $sRow->image = $sName .'.' . $ext;
                $sRow->save();
         
           }

          }else{

              $sRow = new \App\Models\Backend\Securityncap\Securityncap;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\Securityncap\Securityncap::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                      
                        'topic'         => request('topic')[$i],
                        'content'         => request('content')[$i],

                        'url'         => request('url'),

                        'created_at'         => date('Y-m-d H:i:s'),

                    ]
                );          
              }

            if (request('image')) {

                $sName = '';
                $ext = request('image')->getClientOriginalExtension();
                $sName = str_pad($sRow->id, 10, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/securityncap/');            
                File::move( request('image')->getPathName() , $destinationPath_origi.$sName.'.'.$ext);

                $sRow->image = $sName .'.' . $ext;
                $sRow->save();
         
           }


          }


           \DB::commit();

         return redirect()->action('Backend\SecurityNcapController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\SecurityNcapController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
       
       $sRowGr = \App\Models\Backend\Securityncap\Securityncap::find($id);
       $sRow = \App\Models\Backend\Securityncap\Securityncap::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Securityncap\Securityncap::search()->groupBy('group_id')->orderBy('id', 'asc');
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
