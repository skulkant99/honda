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

class BasicApproachController extends Controller
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
        
        $image = DB::table('db_csr_basicapp')->where('lang','en')->where('group_id',1)->first();
        $detail = DB::table('db_csr_basicapp')->where('lang',$lang)->where('group_id',1)->first();
      // $sRowVideoBanner = \App\Models\Backend\Environment\BannerVideo::all();
      // $sRowHondaTest = \App\Models\Backend\Environment\HondaTest::all();
      // $sRowDirections = \App\Models\Backend\Environment\DirectionOfActivities::all();
      // $sRowSlogans = \App\Models\Backend\Environment\Slogan::all();
      // $sRowDetail = \App\Models\Backend\Environment\InsideDetail::all();


      return View('frontend.csr.csr-basic-approach')->with(array('image'=>$image ,'detail'=>$detail ) );
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
