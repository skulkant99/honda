<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

// $rand = rand(1000,9999);

class StateController extends Controller
{
    public function StateTable()
    {
      $sta = DB::table('db_state_banner')->get();
      return view('backend.statement.index',[
        'sta' => $sta,
      ]);
    } 
    public function EditState()
    {
      $sta = DB::table('db_state_banner')->first();
      return view('backend.statement.form',[
        'sta' => $sta,
      ]);
    } 

    public function UpdateBanner(Request $request)
    {
      try {

         $files = $request->file('news_file');
          $upload = public_path('state_img');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);

        $insertdata = db::table('db_state_banner')->where('banner_id', $request->banner_id)->update(array(
        'banner_img' => $file_upload
        
       ));
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\StateController@StateTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\StateController@StateTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    } 

}
