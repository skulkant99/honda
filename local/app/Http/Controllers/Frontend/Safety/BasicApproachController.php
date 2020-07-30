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
      $sRowBanner = \App\Models\Backend\Safety\BannerBasicApproach::all();
      $sRowDetail = \App\Models\Backend\Safety\InsideDetail::Where('lang', $lang)->get();

      return View('frontend.safety.safety-basic-approach')->with(array('sRowBanner' => $sRowBanner, 'sRowDetail' => $sRowDetail));
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
