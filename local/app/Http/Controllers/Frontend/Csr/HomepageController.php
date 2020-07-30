<?php

namespace App\Http\Controllers\Frontend\Csr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
####### Include
use Auth;
use DB;
use Session;
use Cookie;
use General;
use Socialite;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Session::get('locale');

            if($lang==""){
                $lang = 'en';
                session()->put('locale', $lang);
            }
            $sRow = DB::table('db_scr_banner')->get();
            $sRow2 = DB::table('db_sc_activates')->where('lang', $lang)->first();
            $sRow3 = DB::table('db_csr_basicapp')->where('lang', $lang)->first();

            $csr_aus = DB::table('db_news')->where('news_country', 1)->where('lang', $lang)->limit(4)->get();
            $csr_id = DB::table('db_news')->where('news_country', 2)->where('lang', $lang)->limit(4)->get();
            $csr_in = DB::table('db_news')->where('news_country', 3)->where('lang', $lang)->limit(4)->get();
            $csr_kr = DB::table('db_news')->where('news_country', 4)->where('lang', $lang)->limit(4)->get();
            $csr_ms = DB::table('db_news')->where('news_country', 5)->where('lang', $lang)->limit(4)->get();
            $csr_ne = DB::table('db_news')->where('news_country', 6)->where('lang', $lang)->limit(4)->get();
            $csr_pk = DB::table('db_news')->where('news_country', 7)->where('lang', $lang)->limit(4)->get();
            $csr_ph = DB::table('db_news')->where('news_country', 8)->where('lang', $lang)->limit(4)->get();
            $csr_tw = DB::table('db_news')->where('news_country', 9)->where('lang', $lang)->limit(4)->get();
            $csr_th = DB::table('db_news')->where('news_country', 10)->where('lang', $lang)->limit(4)->get();


      // $sRowVideoBanner = \App\Models\Backend\Environment\BannerVideo::all();
      // $sRowHondaTest = \App\Models\Backend\Environment\HondaTest::all();
      // $sRowDirections = \App\Models\Backend\Environment\DirectionOfActivities::all();
      // $sRowSlogans = \App\Models\Backend\Environment\Slogan::all();
      // $sRowDetail = \App\Models\Backend\Environment\InsideDetail::all();


      return View('frontend.csr.csr')->with(array(
        'sRow'=>$sRow,
        'sRow2'=>$sRow2,
        'sRow3'=>$sRow3,
        'csr_aus'=>$csr_aus,
        'csr_id'=>$csr_id,
        'csr_in'=>$csr_in,
        'csr_kr'=>$csr_kr,
        'csr_ms'=>$csr_ms,
        'csr_ne'=>$csr_ne,
        'csr_pk'=>$csr_pk,
        'csr_ph'=>$csr_ph,
        'csr_tw'=>$csr_tw,
        'csr_th'=>$csr_th,
        ) );
           
      // ->with(array('sRowVideoBanner' => $sRowVideoBanner, 'sRowHondaTest' => $sRowHondaTest, 'sRowDirections' => $sRowDirections, 'sRowSlogans' => $sRowSlogans, 'sRowDetail' => $sRowDetail));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
