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

class ImpacteController extends Controller
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
        
        $image = DB::table('db_enviimpact_banner')->where('lang','en')->where('group_id',1)->first();
        $detail_banner = DB::table('db_enviimpact_banner')->where('lang', $lang)->where('group_id',1)->first();

        $detail = DB::table('db_enviimpact_inside')->where('lang', $lang)->where('group_id',1)->first();
        $detail2 = DB::table('db_enviimpact_inside')->where('lang', $lang)->where('group_id',2)->first();
        $detail3 = DB::table('db_enviimpact_inside')->where('lang', $lang)->where('group_id',3)->first();
        $detail4 = DB::table('db_enviimpact_inside')->where('lang', $lang)->where('group_id',4)->first();
        $chart1 = DB::table('db_enviimpact_chart')->where('inside', 1)->where('topic',1)->get();
        $chart2 = DB::table('db_enviimpact_chart')->where('inside', 1)->where('topic',2)->get();
          $chart3 = DB::table('db_enviimpact_chart')->where('inside', 5)->where('topic',1)->get();
        $chart4 = DB::table('db_enviimpact_chart')->where('inside', 5)->where('topic',2)->get();
          $chart5 = DB::table('db_enviimpact_chart')->where('inside', 9)->where('topic',1)->get();
        $chart6 = DB::table('db_enviimpact_chart')->where('inside', 9)->where('topic',2)->get();
          $chart7 = DB::table('db_enviimpact_chart')->where('inside', 13)->where('topic',1)->get();
        $chart8 = DB::table('db_enviimpact_chart')->where('inside', 13)->where('topic',2)->get();

      // $sRowVideoBanner = \App\Models\Backend\Environment\BannerVideo::all();
      // $sRowHondaTest = \App\Models\Backend\Environment\HondaTest::all();
      // $sRowDirections = \App\Models\Backend\Environment\DirectionOfActivities::all();
      // $sRowSlogans = \App\Models\Backend\Environment\Slogan::all();
      // $sRowDetail = \App\Models\Backend\Environment\InsideDetail::all();


      return View('frontend.environment.environment-impact')->with(array('image'=>$image ,'detail_banner'=>$detail_banner ,'detail'=>$detail,'detail2'=>$detail2,'detail3'=>$detail3,'detail4'=>$detail4,'chart1'=>$chart1,'chart2'=>$chart2,'chart3'=>$chart3,'chart4'=>$chart4,'chart5'=>$chart5,'chart6'=>$chart6,'chart7'=>$chart7,'chart8'=>$chart8) );
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
