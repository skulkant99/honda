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
class HondaSustainabilityController extends FrontendController
{

    public function index(Request $request)
    {
    	$lang = Session::get('locale');
    	if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
        }

      $sSus = DB::table('db_sustain1')->where('lang', $lang )->first();
      $sSus2_1 = DB::table('db_sustain2')->where('sus2_group', 1)->where('lang', $lang )->first();
      $sSus2_2 = DB::table('db_sustain2')->where('sus2_group', 2)->where('lang', $lang )->first();
      $sSus2_3 = DB::table('db_sustain2')->where('sus2_group', 3)->where('lang', $lang )->first();

      return View('frontend.honda-sustainability')->with(array('sSus'=>$sSus,'sSus2_1'=>$sSus2_1,'sSus2_2'=>$sSus2_2,'sSus2_3'=>$sSus2_3));;
    }
}
