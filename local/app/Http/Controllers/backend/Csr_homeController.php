<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class Csr_homeController extends Controller
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
      $path = str_replace('backend/csr_home/','',$request->path());
      if($path == 'backend/csr_home'){
        $path = 'index';
      }
      if(view()->exists('backend.csr_home.'.$path)){
          return view('backend.csr_home.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.csr_home.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRow = \App\Models\Backend\csr_home\csr_home::find($id);
       return View('backend.csr_home.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\csr_home\csr_home::find($id);
          }else{
            $sRow = new \App\Models\Backend\csr_home\csr_home;
          }
          $request = app('request');

          if ($request->hasFile('image')) {
            $this->validate($request, [
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            @unlink(public_path().'/csr_img/'.$request->old_file);
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('csr_img');
         
            $image->move($destinationPath, $name);
            $sRow->banner_img = $name;
          }

          // $sRow->banner_img    = $name;
          
          $sRow->created_at = date('Y-m-d H:i:s');
          $sRow->save();

             
     

     

  
         
          

          \DB::commit();

         return redirect()->action('Backend\Csr_homeController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Csr_homeController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }
      public function Deletehome($id)
    {
    try {
        $delete = DB::table('db_scr_banner')
            ->where('id', $id)
            ->delete();
        return redirect()->action('Backend\Csr_homeController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\Csr_homeController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    }
    public function destroy($id)
    {
      $sRow = \App\Models\Backend\Csr_home\Csr_home::find($id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Csr_home\Csr_home::search()->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
     
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }



}
