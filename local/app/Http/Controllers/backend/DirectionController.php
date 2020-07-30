<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

// $rand = rand(1000,9999);

class DirectionController extends Controller
{

    public function DirecTable()
    {
      $direc = DB::table('db_direction')->where('lang', 'en')->first();
      return view('backend.direction.index',[
        'direc' => $direc,
      ]);
    }

    public function EditDirec()
    {
      $direc = DB::table('db_direction')->get();
      return view('backend.direction.form',[
        'direc' => $direc,
      ]);
    }

    public function UpdateDirec(Request $request)
    {
      try {

         $files = $request->file('news_file');
         if ($files != '') {
          $upload = public_path('direc_img');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);
          @unlink(public_path().'/direc_img/'.$request->old_img);

         }else{
          $file_upload = $request->old_img;
         }
        foreach ($request->direc_id as $key => $value) { 
                $insertdata = db::table('db_direction')->where('direc_id', $value)->update(array(
                'direc_img' => $file_upload,
                'direc_topic' => $request->direc_topic[$key],
                'direc_detail' => $request->direc_detail[$key]
               ));
        }
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\DirectionController@DirecTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\DirectionController@DirecTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    } 
    

}
