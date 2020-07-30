<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

use Auth;
use DB;
use Session;
use Cookie;
use General;
use Socialite;


class NewsDetailController extends FrontendController
{

    public function index(Request $request, $id)
    {
    	$lang = Session::get('locale');

            if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
            }
            $sRow = DB::table('db_news')->where('news_group', $id)->where('lang', $lang )->first();
            $sImg = DB::table('db_news_gallery')->where('news_id', $id)->get();
      return View('frontend.news-detail')->with(array('sRow'=>$sRow,'sImg'=>$sImg) );
    }
}
