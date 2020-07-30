<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
// use Illuminate\Support\Facades\File;


// $rand = rand(1000,9999);

class SrcController extends Controller
{
    public function BannerTable()
    {
      $bn = DB::table('db_scr_banner')->get();
      return view('backend.src.index',
        [
          'bn' => $bn,
        ]);
    } 

    public function AddBanner()
    {
      return view('backend.src.form_banner');
    }

    public function SaveBanner(Request $request)
    {
      try {
       
          $files = $request->file('news_file');
          $upload = public_path('src_img');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);

        db::table('db_scr_banner')->insert(array(
          'banner_img' => $file_upload
         ));
        return redirect()->action('Backend\SrcController@BannerTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\SrcController@BannerTable')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    }

    public function DeleteSrcBanner(Request $request, $pathimg, $id)
    {

      try {
        db::table('db_scr_banner')->where('banner_id', $id)->delete();
        // $delete =  File::delete(public_path().'/src_img/'.$pathimg);
        @unlink(public_path().'/src_img/'.$pathimg);

        return redirect()->action('Backend\SrcController@BannerTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\SrcController@BannerTable')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    } 

    public function EditSrcBanner(Request $request, $id)
    {
      $bn = DB::table('db_src_banner')->where('banner_id', $id)->first();
      return view('backend.src.form_edit_banner',[
        'bn'=>$bn
      ]);
    } 
    

}
