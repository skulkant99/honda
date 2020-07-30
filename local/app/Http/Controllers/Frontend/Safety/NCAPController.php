<?php

namespace App\Http\Controllers\Frontend\Safety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
####### Include
use Auth;
use DB;
use Session;
use Cookie;
use General;
use Socialite;

class NCAPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $lang = Session::get('locale');
      // dd($lang);
      $sRowSecurityncap = DB::table('db_safety_ancap_safetytopic')->where('lang', $lang )->get();
      $sRowAseanncap = DB::table('db_safety_aseanncap_datatable')->get();
      $sRowAncap = DB::table('db_safety_ancap_datatable')->get();

      // $sRowSecurityncap = \App\Models\Backend\Securityncap\Securityncap::all();

      $sRowDetail = \App\Models\Backend\Safety\SecurityTopics::where('lang', $lang )->get();

      return View('frontend.safety.safety-ncap')->with(
        array('sRowDetail' => $sRowDetail,'sRowSecurityncap' => $sRowSecurityncap,'sRowAseanncap' => $sRowAseanncap,'sRowAncap' => $sRowAncap)
      );

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
