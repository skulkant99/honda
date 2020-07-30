<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

// $rand = rand(1000,9999);

class EnvironmentController extends Controller
{
    public function VDOTable()
    {
      $vdo = DB::table('db_banner_vdo')->get();
      return view('backend.environment.index',[
        'vdo' => $vdo,
      ]);
    } 

    public function EditVDO()
    {
      $vdo = DB::table('db_banner_vdo')->first();
      return view('backend.environment.form_vdo',[
        'vdo' => $vdo,
      ]);
    } 

     public function UpdateVDO(Request $request)
    {
      try {
        $insertdata = db::table('db_banner_vdo')->where('vdo_id', $request->vdo_id)->update(array(
        'vdo_link' => $request->vdo_link
       ));
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\EnvironmentController@VDOTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\EnvironmentController@VDOTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    } 

    public function NewsMenuTable()
    {
      $menu = DB::table('db_news_menu')->where('lang', 'en')->get();
      return view('backend.environment.news_menu',[
        'menu' => $menu,
      ]);
    }

    public function EditNewsMenu(Request $request, $id)
    {
      $menu = DB::table('db_news_menu')->where('menu_group', $id)->get();
      return view('backend.environment.form_news_menu',[
        'menu' => $menu,
      ]);
    } 

    public function UpdateNewsMenu(Request $request)
    {
      // dd($request->all());
      try {

         $files = $request->file('news_file');
         if ($files != '') {
          $upload = public_path('env_img');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);
            @unlink(public_path().'/env_img/'.$request->old_img);
         }else{
          $file_upload = $request->old_img;
         }
        
         foreach ($request->menu_id as $key => $value) { 
            $insertdata = db::table('db_news_menu')->where('menu_id', $value)->update(array(
            'menu_img' => $file_upload,
            'menu_topic' => $request->menu_topic[$key],
            'menu_cont' => $request->menu_cont[$key]
           ));
          }
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\EnvironmentController@NewsMenuTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\EnvironmentController@NewsMenuTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    } 



}
