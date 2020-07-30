<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

// $rand = rand(1000,9999);

class HistoryController extends Controller
{

    public function OurHistory()
    {
      $his = DB::table('db_our_history')->where('lang', 'en')->first();
      return view('backend.history.index',[
        'his' => $his,
      ]);
    }

    public function FormHistory()
    {
      $his = DB::table('db_our_history')->get();
      return view('backend.history.form_history',[
        'his' => $his,
      ]);
    }

    public function UpdateHistory(Request $request)
    {
      try {
        $files = $request->file('news_file');
        $files2 = $request->file('news_file2');
        $files3 = $request->file('news_file3');

        if ($files != '') {
        $upload = public_path('history_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

            @unlink(public_path().'/history_img/'.$request->old_file);

        }else{
          $file_upload = $request->old_file;
        }

        if ($files2 != '') {
        // $files2 = $request->file('news_file2');
          $upload = public_path('history_img');
          $ext = $files2->getClientOriginalExtension();
          $file_upload2 = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files2->move($upload,$file_upload2);
            @unlink(public_path().'/history_img/'.$request->old_file2);

        }else{
          $file_upload2 = $request->old_file2;
        }

        if ($files3 != '') {
        // $files3 = $request->file('news_file2');
          $upload = public_path('history_img');
          $ext = $files3->getClientOriginalExtension();
          $file_upload3 = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files3->move($upload,$file_upload3);
            @unlink(public_path().'/history_img/'.$request->old_file3);

        }else{
          $file_upload3 = $request->old_file3;
        }

        foreach ($request->his_id as $key => $value) {

          $updatedata = db::table('db_our_history')->where('his_id', $value)->update(array(
          'his_img_bag' => $file_upload,
          'his_img_pro1' => $file_upload2,
          'his_img_pro2' => $file_upload3,
          'his_name' => $request->his_name,
          'his_pos' => $request->his_pos[$key],
          'his_posde' => $request->his_posde[$key],
          'his_desc' => $request->his_desc[$key],
          
         ));
        }

        return redirect()->action('Backend\HistoryController@OurHistory')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\HistoryController@OurHistory')->with(['alert'=>\App\Models\Alert::e($e)]);
      }  
    }



}
