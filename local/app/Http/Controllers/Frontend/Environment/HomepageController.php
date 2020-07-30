<?php

namespace App\Http\Controllers\Frontend\Environment;

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
      // $sRowVideoBanner = \App\Models\Backend\Environment\BannerVideo::all();
      // $sRowHondaTest = \App\Models\Backend\Environment\HondaTest::all();
      // $sRowDirections = \App\Models\Backend\Environment\DirectionOfActivities::all();
      // $sRowSlogans = \App\Models\Backend\Environment\Slogan::all();
      // $sRowDetail = \App\Models\Backend\Environment\InsideDetail::all();

        $vdo = DB::table('db_banner_vdo')->where('vdo_id', 1)->first();
        $news1 = DB::table('db_news_menu')->where('menu_group', 1)->where('lang', $lang)->first();
        $news2 = DB::table('db_news_menu')->where('menu_group', 2)->where('lang', $lang)->first();
        $direc = DB::table('db_direction')->where('lang', $lang)->first();


         $detail_img = DB::table('db_triple_detail')->where('lang','en')->where('group_id',1)->first();
        $detail = DB::table('db_triple_detail')->where('lang', $lang)->where('group_id',1)->first();
         $detail2_img = DB::table('db_triple_detail')->where('lang','en')->where('group_id',2)->first();
        $detail2 = DB::table('db_triple_detail')->where('lang', $lang)->where('group_id',2)->first();
         $detail3_img = DB::table('db_triple_detail')->where('lang','en')->where('group_id',3)->first();
        $detail3 = DB::table('db_triple_detail')->where('lang', $lang)->where('group_id',3)->first();
                 $detail01 = DB::table('db_statement_inside')->where('lang', $lang)->where('group_id',1)->first();
         $detail02 = DB::table('db_statement_inside')->where('lang', $lang)->where('group_id',2)->first();

      return View('frontend.environment.environment-home')->with(array(
        'vdo'=>$vdo, 
        'news1'=>$news1, 
        'news2'=>$news2,
        'direc'=>$direc,
        'detail'=>$detail,
        'detail_img'=>$detail_img,
        'detail2'=>$detail2,
        'detail2_img'=>$detail2_img,
        'detail3'=>$detail3,
        'detail3_img'=>$detail3_img,
             'detail01'=>$detail01,
                  'detail02'=>$detail02,
      ) 
      );
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
