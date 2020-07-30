<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// use File;

// $rand = rand(1000,9999);

class NewsController extends Controller
{
    

    public function NewsTable()
    {
      $news = DB::table('db_news')->distinct('news_group')->where('lang', 'en')->get();
      return view('backend.news.index',[
        'news' => $news,
      ]);
    } 

    public function AddNews()
    {
      $country = DB::table('db_country')->get();
      return view('backend.news.form',[
        'country' => $country,
      ]);
    } 

    public function SaveNews(Request $request)
    {
    	dd($request->news_ct);

      try {

        $last_group = DB::table('db_news')->orderBy('news_group', 'desc')->first();
        $group= $last_group->news_group+1;

        $files = $request->file('news_file');
        $upload = public_path('news_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

        foreach ($request->top as $key => $top) {

        db::table('db_news')->insert(array(
        'news_group' => $group,
        'news_country' => $request->news_ct,
        'news_page' => $request->news_menu,
        'news_img' => $file_upload,
        'news_post_time' => $request->news_post,
        'news_comp' => $request->comp[$key],
        'news_topic' => $request->top[$key],
        'news_cont' => $request->cont[$key],
        'news_detail' => $request->detail[$key],
        'news_keyword' => $request->keyword,
        'lang' => $request->lang[$key]
        ));

        }
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      } 
    } 

    public function DeleteNews(Request $request, $id)
    {
    try {
        $delete = DB::table('db_news')
            ->where('news_group', $id)
            ->delete();
        return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    }

    public function NewsGallery(Request $request, $id)
    {
      $gall = DB::table('db_news_gallery')->where('news_id', $id)->get();
      return view('backend.news.gallery',[
        'gall' => $gall,
        'news_id'=>$id,
      ]);
    }

    public function AddGallery(Request $request, $id)
    {
      return view('backend.news.form_add_gallery',[
        'news_id' => $id,
      ]);
    }

    public function SaveGallery(Request $request)
    {
      try {
        $files = $request->file('news_file');
        $upload = public_path('news_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

        db::table('db_news_gallery')->insert(array(
        'news_id' => $request->news_id,
        'gal_img' => $file_upload
       ));
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        // return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\NewsController@NewsGallery',$request->news_id)->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NewsController@NewsGallery',$request->news_id)->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function DeleteGallery(Request $request, $id)
    {
    try {
        $delete = DB::table('db_news_gallery')
            ->where('gal_id', $id)
            ->delete();
        return redirect()->action('Backend\NewsController@NewsTable',$id)->with(['alert'=>\App\Models\Alert::Msg('success')]);
        } catch (\Exception $e) {
          echo $e->getMessage();
          \DB::rollback();
          return redirect()->action('Backend\NewsController@NewsTable',$id)->with(['alert'=>\App\Models\Alert::e($e)]);
        }
    }
    public function EditImgGal(Request $request, $id)
    {
      $gall = DB::table('db_news_gallery')->where('gal_id', $id)->first();
      return view('backend.news.form_edit_gallery',[
        'gal' => $gall,
      ]);
    }

    public function UpdateImgGal(Request $request)
    {

     try {

        $files = $request->file('news_file');
        $upload = public_path('news_img');
        $ext = $files->getClientOriginalExtension();
        $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
        $files->move($upload,$file_upload);

        $insertdata = db::table('db_news_gallery')->where('gal_id', $request->gal_id)->update(array(
        'gal_img' => $file_upload
        
       ));
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        // return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\NewsController@NewsGallery',$request->news_id)->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NewsController@NewsGallery',$request->news_id)->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function EditNews(Request $request, $group)
    {
      $country = DB::table('db_country')->get();
      
      $news = DB::table('db_news')->where('news_group', $group)->get();
      // dd($news->all());

      $now_ct = DB::table('db_country')->where('ct_id', $news[0]->news_country)->first();


      return view('backend.news.form_edit_news',[
        'news' => $news,
        'country' => $country,
        'now_ct' => $now_ct,
      ]);
    }

    public function UpdateNews(Request $request)
    {

      // dd($request);

      try {
        // dd($request->all());
        $files = $request->file('news_file');
        if ($files != '') {
          $upload = public_path('news_img');
          $ext = $files->getClientOriginalExtension();
          $file_upload = date('Y-m-d-H-i-s').rand(1000,9999).'.'.$ext;
          $files->move($upload,$file_upload);
        }else{
          $file_upload = $request->old_file;
        }

        $news_country = $request->news_ct;
        if ($news_country == '') {
          $news_country = $request->old_ct;
        }

        $news_page = $request->news_menu;
        if ($news_page == '') {
          $news_page = $request->old_menu;
        }
        foreach ($request->news_id as $key => $value) {
          db::table('db_news')->where('news_id', $value)->update(array(
          'news_country' => $news_country,
          'news_page' => $news_page,
          'news_img' => $file_upload,
          'news_post_time' => $request->news_post,
          'news_comp' => $request->news_comp[$key],
          'news_topic' => $request->news_topic[$key],
          'news_cont' => $request->news_cont[$key],
          'news_detail' => $request->news_detail[$key],
          'news_keyword' => $request->keyword
         ));
        }
        //No error 
        //return $this->cont()->with(['alert'=>\App\Models\Alert::Msg('success')]);
        return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::Msg('success')]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NewsController@NewsTable')->with(['alert'=>\App\Models\Alert::e($e)]);
      } 
    } 

}
