<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class NetworkTableController extends Controller
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
      $path = str_replace('backend/network_table/','',$request->path());
      if($path == 'backend/network_table'){
        $path = 'index';
      }
      if(view()->exists('backend.network_table.'.$path)){
          return view('backend.network_table.'.$path);
      }
      return view('backend.template.pages-404');
    }

    public function create()
    {
      // return view('backend.network_table.form');
      $dsCompany  = \App\Models\Dataset\Company::orderBy('id', 'asc')->groupBy('group_id')->get();
      return view('backend.network_table.form')->with(['dsCompany'=>$dsCompany]);
    }

    public function show(Request $request)
    {
      // dd($_REQUEST['id']);
      return view('backend.network_table.index');
    }

    public function store(Request $request)
    {
      return $this->form();
    }

    public function edit($id)
    {
       $dsCompany  = \App\Models\Dataset\Company::orderBy('id', 'asc')->groupBy('group_id')->get();
       $sRowGr = \App\Models\Backend\NetworkTable\NetworkTable::find($id);
       $sRow = \App\Models\Backend\NetworkTable\NetworkTable::where('group_id', $sRowGr->group_id)->get();
       // dd($sRow);
       return View('backend.network_table.form')->with(array('sRow'=>$sRow, 'id'=>$id, 'dsCompany'=>$dsCompany) );

    }

    public function update(Request $request, $id)
    {
      // dd($request->all());
      return $this->form($id);
    }


    public function form($id=NULL)
    {
      \DB::beginTransaction();

  try {

          if( $id ){

            for ($i=0; $i < count(request('id')); $i++) { 

              \App\Models\Backend\NetworkTable\NetworkTable::where('id', request('id')[$i])->update(
                    [

                        'company'         => request('company'),

                        'txt_production'         => request('txt_production')[$i],
                        'txt_capacity'         => request('txt_capacity')[$i],
                        'txt_major'         => request('txt_major')[$i],

                        'updated_at'         => date('Y-m-d H:i:s'),

                    ]
                );
             }

          }else{

              $sRow = new \App\Models\Backend\NetworkTable\NetworkTable;
              $gr      = $sRow::max('group_id');
              $gr      = $gr+1;    

              $langCnt = count(request('lang'));

              for ($i=0; $i < $langCnt ; $i++) { 

                \App\Models\Backend\NetworkTable\NetworkTable::insert(
                    [
                      'group_id' => $gr ,
                      'lang' => request('lang')[$i] ,

                        'company'         => request('company'),

                        'txt_production'         => request('txt_production')[$i],
                        'txt_capacity'         => request('txt_capacity')[$i],
                        'txt_major'         => request('txt_major')[$i],
                        
                        'created_at'         => date('Y-m-d H:i:s'),

                    ]
                );          
              }


          }


           \DB::commit();

     

         return redirect()->action('Backend\NetworkTableController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

      } catch (\Exception $e) {
        echo $e->getMessage();
        \DB::rollback();
        return redirect()->action('Backend\NetworkTableController@index')->with(['alert'=>\App\Models\Alert::e($e)]);
      }
    }

    public function destroy($id)
    {
       $sRowGr = \App\Models\Backend\NetworkTable\NetworkTable::find($id);
       $sRow = \App\Models\Backend\NetworkTable\NetworkTable::where('group_id', $sRowGr->group_id);
      if( $sRow ){
        $sRow->forceDelete();
      }
      return response()->json(\App\Models\Alert::Msg('success'));
    }


    public function Datatable(){
      $sTable = \App\Models\Backend\NetworkTable\NetworkTable::search()->groupBy('group_id')->orderBy('id', 'asc');
      $sQuery = \DataTables::of($sTable);
      return $sQuery
      ->addColumn('name', function($row) {
        // return $row->fname.' '.$row->surname;
      })
      ->addColumn('updated_at', function($row) {
        return is_null($row->updated_at) ? '-' : $row->updated_at;
      })
      ->make(true);
    }


}
