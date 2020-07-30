<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// use File;
use Illuminate\Support\Facades\File;

// $rand = rand(1000,9999);

class BannerController extends Controller
{
    //Banner Content Start ==============================================================================================================

    public function banner()
    {
      $cont = DB::table('db_content_banner')->where('lang','en')->first();
      return view('backend.banner.index',[
        'cont' => $cont,
      ]);
    }

    public function cont()
    {
      $content = DB::table('db_content_banner')->get();
      return view('backend.banner.form_content',[
        'content' => $content,
      ]);
    }

    public function UpdateContent(Request $request)
    {
      // dd($request->all());
      try {
      foreach ($request->id as $key => $value) {
        $insertdata = db::table('db_content_banner')->where('cont_id', $value)->update(array(
        'cont_head' => $request->cont_head[$key],
        'cont_title' => $request->cont_title[$key]

        ));
      }
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\BannerController@banner')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\BannerController@banner')->with(['alert'=>\App\Models\Alert::e($e)]);
      }     
      //return view('backend.banner.form_content');
    }
    //Banner Content End  ==============================================================================================================

    // Banner Image Start =================================================================================================================

    public function BannerImage()
    {
      $banner = DB::table('db_banner_image')->get();
      return view('backend.banner.banner_image',[
        'banner' => $banner,
      ]);
    }

    public function FormBanner()
    {
      return view('backend.banner.form_banner');
    }

    public function AddBanner(Request $request)
    {
      try {
        // $_file = $request->file('news_file');
        // $ext = $_file->getClientOriginalExtension();
        // $file_upload = '';
        // $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        // $destinationPath_origi = public_path('img_banner');           
        // File::move( $_FILES['news_file']['tmp_name'], $destinationPath_origi.$file_upload);

          $files = $request->file('news_file');
          $upload = public_path('img_banner');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);

        db::table('db_banner_image')->insert(array(
          'banner_img' => $file_upload
         ));
        return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
      
    }

    public function DeleteImgBanner(Request $request, $id)
    {
      try {
        $delete = DB::table('db_banner_image')
            ->where('banner_id', $id)
            ->delete();
        return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    }

    public function EditImgBanner(Request $request, $id)
    {

      $banner = DB::table('db_banner_image')->where('banner_id',$id)->first();
      return view('backend.banner.form_edit_banner',[
        'banner' => $banner,
      ]);
    }

    public function UpdateImgBanner(Request $request){
      try {
        $files = $request->file('news_file');
        $upload = public_path('img_banner');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

        $insertdata = db::table('db_banner_image')->where('banner_id', $request->banner_id)->update(array(
        'banner_img' => $file_upload
        
       ));
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\BannerController@BannerImage')->with(['alert'=>\App\Models\Alert::e($e)]);
      }  
    }


}
