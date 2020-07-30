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

class NewsController extends FrontendController
{

    public function index(Request $request)
    {
    	$lang = Session::get('locale');

            if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
            }
      $sNews = DB::table('db_news')->where('lang', $lang )->paginate(6);
      $sNews2 = DB::table('db_news')->where('lang', $lang )->orderBy('news_id', 'desc')->limit(3)->get();

      return View('frontend.news')->with(array('sNews'=>$sNews,'sNews2'=>$sNews2));
    }
}
