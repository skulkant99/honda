<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $path = str_replace('backend/Roles/','',$request->path());
      if($path == 'backend/Roles'){
        $path = 'index';
      }
      if(view()->exists('backend.Roles.'.$path)){
          return view('backend.Roles.'.$path);
          // return view('backend.Roles.index');
      }
      return view('backend.template.pages-404');
    }

    public function Datatable(){
      // $sTable = \App\Models\Backend\ECommerce\Customer::with(['locale:locale'])->search()->orderBy('id', 'asc');
      $sTable = \App\Models\Backend\Roles\Roles::search()->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
      ->addColumn('name', function($row) {
        return $row->fname.' '.$row->surname;
      })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }

}
