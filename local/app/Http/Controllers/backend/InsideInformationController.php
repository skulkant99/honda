<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class InsideInformationController extends Controller
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

      $path = str_replace('backend/insideinformation/','',$request->path());
      if($path == 'backend/insideinformation'){
        $path = 'index';
      }
      if(view()->exists('backend.insideinformation.'.$path)){
          return view('backend.insideinformation.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $sLocale  = \App\Models\Locale::all();
      return view('backend.insideinformation.form');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $sRow = \App\Models\Backend\Insideinformation\Insideinformation::find($id);
       return View('backend.insideinformation.form')->with(array('sRow'=>$sRow, 'id'=>$id) );
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
            $sRow = \App\Models\Backend\Insideinformation\Insideinformation::find($id);
          }else{
            $sRow = new \App\Models\Backend\Insideinformation\Insideinformation;
          }
          $sRow->model    = request('model');
          $sRow->year    = request('year');
          $sRow->evaluation_result    = request('evaluation_result');
          $sRow->created_at = date('Y-m-d H:i:s');
          $sRow->save();

          if (request('file_report')) {

                $sName = '';
                $ext = request('file_report')->getClientOriginalExtension();
                // $sName = date('Y-m-d-H-i-s').rand().'.'.$ext;
                $sName = str_pad($sRow->id, 10, '0', STR_PAD_LEFT);
                $destinationPath_origi = public_path('/backend/file-ancap/');            
                File::move( request('file_report')->getPathName() , $destinationPath_origi.$sName.'.'.$ext);

          	    // $file = request('file_report')->getClientOriginalExtension();
                // $path = public_path('/backend/file-ancap/'); 
          	    // $sName = str_pad($sRow->id, 10, '0', STR_PAD_LEFT);
          	    // $ext = '.' . strtolower(request('file_report')->getClientOriginalExtension());
        				// $image = \Image::make(request('file_report')->getPathName());
        				// $image->save($path . $sName . $ext);
        				// $image->destroy();

        				$sRow->file_report = $sName .'.' . $ext;
        				$sRow->save();
         
           }

          \DB::commit();

         return redirect()->action('Backend\InsideInformationController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\InsideInformationController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
      $sRow = \App\Models\Backend\Insideinformation\Insideinformation::find($id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){
      $sTable = \App\Models\Backend\Insideinformation\Insideinformation::search()->orderBy('id', 'asc');
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
