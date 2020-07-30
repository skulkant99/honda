<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sRowDatas = \App\Models\Frontend\Search::get();
      return View('frontend.search')->with(array('sRowDatas' => $sRowDatas));
    }


}
