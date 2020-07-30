<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

// $rand = rand(1000,9999);

class SustainController extends Controller
{
    public function SustainTable()
    {
      $sus = DB::table('db_sustain1')->where('lang', 'en')->first();
      return view('backend.sustainability.index',[
        'sus' => $sus,
      ]);
    } 

    public function EditSustain()
    {
      $sus = DB::table('db_sustain1')->get();
      return view('backend.sustainability.form',[
        'sus' => $sus,
      ]);
    } 

    public function UpdateSustain1(Request $request)
    {
      try {
        $files = $request->file('news_file');
        $files2 = $request->file('news_file2');

        if ($files != '') {
        $upload = public_path('sus_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);
            @unlink(public_path().'/sus_img/'.$request->old_file);

        }else{
          $file_upload = $request->old_file;
        }

        if ($files2 != '') {
        // $files2 = $request->file('news_file2');
          $upload = public_path('sus_img');
          $ext = $files2->getClientOriginalExtension();
          $file_upload2 = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files2->move($upload,$file_upload2);
            @unlink(public_path().'/sus_img/'.$request->old_file2);

        }else{
          $file_upload2 = $request->old_file2;
        }
        foreach ($request->sus_id as $key => $value) { 
          $updatedata = db::table('db_sustain1')->where('sus_id', $value)->update(array(
          'sus_img_bag' => $file_upload,
          'sus_img' => $file_upload2,
          'sus_topic' => $request->sus_topic[$key],
          'sus_detail' => $request->sus_detail[$key],
          'sus_text1' => $request->sus_text1[$key],
          'sus_text2' => $request->sus_text2[$key],
          'sus_text3' => $request->sus_text3[$key],
         ));
      }
        return redirect()->action('Backend\SustainController@SustainTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\SustainController@SustainTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      }  
    }

    public function SustainTable2()
    {
      $sus2 = DB::table('db_sustain2')->where('lang', 'en')->distinct('sus2_group')->get();
      return view('backend.sustainability.index_sus2',[
        'sus2' => $sus2,
      ]);
    } 

    public function EditSustain2(Request $request, $id)
    {
      $sus2 = DB::table('db_sustain2')->where('sus2_group', $id)->get();
      return view('backend.sustainability.form2',[
        'sus2' => $sus2,
      ]);
    }

    public function UpdateSustain2(Request $request)
    {

      try {

      foreach ($request->sus2_id as $key => $value) { 
        $updatedata = db::table('db_sustain2')->where('sus2_id', $value)->update(array(
        'sus2_topic' => $request->sus2_topic[$key],
        'sus2_text1' => $request->sus2_text1[$key],
        'sus2_text2' => $request->sus2_text2[$key]
       ));
      }

        return redirect()->action('Backend\SustainController@SustainTable2')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\SustainController@SustainTable2')->with(['alert'=>\App\Models\Alert::e($e)]);
      }  
    } 

}
