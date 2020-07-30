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

class HomepageController extends FrontendController
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

           $sRowGoogleID = DB::table('db_google_id')->first();
           $sRow = DB::table('db_content_banner')->where('lang', $lang )->first();
           $sNews = DB::table('db_news')->where('lang', 'en' )->get();
           $sHist = DB::table('db_our_history')->where('lang', $lang )->first();
           $sSus = DB::table('db_sustain1')->where('lang', $lang )->first();

           // dd($sRow);
           return View('frontend.index')->with(array('sRow'=>$sRow,'sNews'=>$sNews,'sRowGoogleID'=>$sRowGoogleID,'sHist'=>$sHist, 'sSus'=>$sSus) );
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

    public function logout()
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
