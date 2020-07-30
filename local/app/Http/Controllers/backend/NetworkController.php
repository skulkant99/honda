<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class NetworkController extends Controller
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

      $dsCountry  = \App\Models\Dataset\Country::orderBy('id', 'asc')->get();
      $path = str_replace('backend/network/','',$request->path());
      if($path == 'backend/network'){
        $path = 'index';
      }
      if(view()->exists('backend.network.'.$path)){
          return view('backend.network.'.$path)->with(['dsCountry'=>$dsCountry]);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      $dsCountry  = \App\Models\Dataset\Country::orderBy('id', 'asc')->get();
      return view('backend.network.form')->with(['dsCountry'=>$dsCountry]);
    }

    public function store(Request $request)
    {
      $dsCountry  = \App\Models\Dataset\Country::orderBy('id', 'asc')->get();
      return $this->form();
    }

    public function edit($id)
    {

       $dsCountry  = \App\Models\Dataset\Country::orderBy('id', 'asc')->get();
       $sRowGr = \App\Models\Backend\network\network::find($id);
       $sRow = \App\Models\Backend\network\network::where('group_id', $sRowGr->group_id)->get();
       return View('backend.network.form')->with(array('sRow'=>$sRow, 'id'=>$id, 'dsCountry'=>$dsCountry) );
    }

    public function update(Request $request, $id)
    {
      // dd($request->all());
      return $this->form($id);
    }


    public function form( $id=NULL )
    {
      \DB::beginTransaction();
      try {


          if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\network\network::where('id', request('id')[$i])->update(
                    [

                        'country'         => request('country'),
                        'automobile'         => request('automobile'),
                        'motocycle'         => request('motocycle'),
                        'powerproducts'         => request('powerproducts'),
                        'other'         => request('other'),

                        'txt_company'         => request('txt_company')[$i],
                        'txt_activities'         => request('txt_activities')[$i],
                        'txt_established'         => request('txt_established')[$i],

                        'txt_website'         => request('txt_website'),

                    ]
                );
             }

          }else{

              $sRow = new \App\Models\Backend\network\network;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\network\network::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,
                      'txt_company' => request('txt_company')[$i] ,
                      'txt_activities' => request('txt_activities')[$i] ,
                      'txt_established' => request('txt_established')[$i] ,

                        'country'         => request('country'),
                        'automobile'         => request('automobile'),
                        'motocycle'         => request('motocycle'),
                        'powerproducts'         => request('powerproducts'),
                        'other'         => request('other'),

                        'txt_website'         => request('txt_website'),

                    ]
                );          
              }


          }


           \DB::commit();

         return redirect()->action('Backend\NetworkController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NetworkController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
      // $sRow = \App\Models\Backend\network\network::find($id);
       $sRowGr = \App\Models\Backend\network\network::find($id);
       $sRow = \App\Models\Backend\network\network::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }

    public function Datatable(){

      $sTable = \App\Models\Backend\network\network::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
      ->addColumn('country_name', function($row) {
        $dsCountry  = \App\Models\Dataset\Country::find($row->country?$row->country:0);
        return @$dsCountry->country;
      })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }


}
