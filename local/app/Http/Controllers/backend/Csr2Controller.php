<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// use File;
use Illuminate\Support\Facades\File;

// $rand = rand(1000,9999);

class Csr2Controller extends Controller
{
    //Banner Content Start ==============================================================================================================

    public function CsTable()
    {
      $sc = DB::table('db_sc_activates')->where('lang','en')->first();
      return view('backend.csr2.index',[
        'sc' => $sc,
      ]);
    }

    public function EditCsr()
    {
      $sc = DB::table('db_sc_activates')->get();
      return view('backend.csr2.form',[
        'sc' => $sc,
      ]);
    }

    public function UpdateSc(Request $request)
    {

      try {
        $files = $request->file('news_file');

        if ($files != '') {
        $upload = public_path('csr_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

            @unlink(public_path().'/csr_img/'.$request->old_file);

        }else{
          $file_upload = $request->old_file;
        }

        foreach ($request->sc_id as $key => $value) {

          $updatedata = db::table('db_sc_activates')->where('sc_id', $value)->update(array(
          'sc_img' => $file_upload,
          'sc_topic' => $request->sc_topic[$key],
          'sc_detail' => $request->sc_detail[$key],
          
         ));
        }

        return redirect()->action('Backend\Csr2Controller@CsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\Csr2Controller@CsTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      } 
      } 
    


}
