<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use DB;
use Session;

class NetworkController extends FrontendController
{

    public function index(Request $request)
    {
      // return View('frontend.network');
    	   $lang = Session::get('locale');
            if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
            }

            /*
            1   australia
            2   india
            3   indonesia
            4   korea
            5   malaysia
            6   newzealand
            7   pakistan
            8   philippines
            9   taiwan
            10  thailand
            11  vietnam
            12  europe
            13  north america
            14  south america
            15  japan
            16  china
            */

            $sRowAustralia = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '1'] ])->get();
            $sRowIndia = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '2'] ])->get();
            $sRowIndonesia = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '3'] ])->get();
            $sRowKorea = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '4'] ])->get();
            $sRowMalaysia = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '5'] ])->get();
            $sRowNewzealand = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '6'] ])->get();
            $sRowPakistan = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '7'] ])->get();
            $sRowPhilippines = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '8'] ])->get();
            $sRowTaiwan = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '9'] ])->get();
            $sRowThailand = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '10'] ])->get();
            $sRowVietnam = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '11'] ])->get();
            // $sRowEurope = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '12'] ])->get();
            // $sRowNorthAmerica = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '13'] ])->get();
            // $sRowSouthAmerica = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '14'] ])->get();
            // $sRowJapan = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '15'] ])->get();
            // $sRowChina = DB::table('db_network')->where([ ['lang', '=', $lang],['country', '=', '16'] ])->get();

            return View('frontend.network')->with(array(
                'sRowAustralia'=>$sRowAustralia,
                'sRowIndia'=>$sRowIndia,
                'sRowIndonesia'=>$sRowIndonesia,
                'sRowKorea'=>$sRowKorea,
                'sRowMalaysia'=>$sRowMalaysia,
                'sRowNewzealand'=>$sRowNewzealand,
                'sRowPakistan'=>$sRowPakistan,
                'sRowPhilippines'=>$sRowPhilippines,
                'sRowTaiwan'=>$sRowTaiwan,
                'sRowThailand'=>$sRowThailand,
                'sRowVietnam'=>$sRowVietnam,
                // 'sRowEurope'=>$sRowEurope,
                // 'sRowNorthAmerica'=>$sRowNorthAmerica,
                // 'sRowSouthAmerica'=>$sRowSouthAmerica,
                // 'sRowJapan'=>$sRowJapan,
                // 'sRowChina'=>$sRowChina,
            ) );

    }
}
