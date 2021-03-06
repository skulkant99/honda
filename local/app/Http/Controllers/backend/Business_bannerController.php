<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class Business_bannerController extends Controller
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
      $path = str_replace('backend/business_banner/','',$request->path());
      if($path == 'backend/business_banner'){
        $path = 'index';
      }
      if(view()->exists('backend.business_banner.'.$path)){
          return view('backend.business_banner.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.business_banner.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRow = \App\Models\Backend\Business_banner\Business_banner::find($id);
       return View('backend.business_banner.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\Business_banner\Business_banner::find($id);
          }else{
            $sRow = new \App\Models\Backend\Business_banner\Business_banner;
          }
      

              $request = app('request');

      if ($request->hasFile('image')) {
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        @unlink(public_path().'/backend/environment_image/'.$request->image_old);
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('backend/environment_image');
     
        $image->move($destinationPath, $name);
        $sRow->image = $name;
      }

     

      $sRow->save();
         
          

          \DB::commit();

         return redirect()->action('Backend\Business_bannerController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Business_bannerController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
      $sRow = \App\Models\Backend\Business_banner\Business_banner::find($id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Business_banner\Business_banner::search();
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
