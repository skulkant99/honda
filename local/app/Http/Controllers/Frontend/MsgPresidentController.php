<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

####### Include
use Auth;
use DB;
use Session;
use Cookie;
use General;
use Socialite;

class MsgPresidentController extends FrontendController
{

    public function index(Request $request)
    {
    	$lang = Session::get('locale');

            if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
            }
        $sHist = DB::table('db_our_history')->where('lang', $lang )->first();

      return View('frontend.message-from-president')->with(array('sHist'=>$sHist));
    }
}
