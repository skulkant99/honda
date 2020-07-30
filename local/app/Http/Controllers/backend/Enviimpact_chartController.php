<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
class Enviimpact_chartController extends Controller
{

    public function index(Request $request)
    {
      $cont = DB::table('db_enviimpact_inside')->get();
      return view('backend.Enviimpact.inside.index',[
        'cont' => $cont,
      ]);
    }
      public function from_chart($id)
    {
      $conn = DB::table('db_enviimpact_chart')->where('inside',$id)->where('topic',1)->get();
        $conn2 = DB::table('db_enviimpact_chart')->where('inside',$id)->where('topic',2)->get();
      $contt = DB::table('db_enviimpact_inside')->find($id);
      return view('backend.Enviimpact.inside.from_chart',[
        'conn' => $conn,
        'conn2' => $conn2,
        'contt' => $contt,
      ]);
    }
    public function from($id)
    {
      $content = DB::table('db_enviimpact_inside')->find($id);
      return view('backend.Enviimpact.inside.from',[
        'content' => $content,
      ]);
    }  
    public function fromaddchart($id)
    {
      return view('backend.Enviimpact.inside.from_addchart',[
        'inside' => $id,
      ]);
    }
        public function fromaddchart2($id)
    {
      return view('backend.Enviimpact.inside.from_addchart2',[
        'inside' => $id,
      ]);
    }
           public function update_updatechart(Request $request)
    {
      $insertdata = db::table('db_enviimpact_chart')->where('id',$request->id)->update(array(
     
      'year' => $request->year,
        'chart_value' => $request->chart_value,
          ));
       
       

          return redirect()->action('Backend\Enviimpact_chartController@from_chart',$request->inside)->with(['alert'=>\App\Models\Alert::Msg('success')]);
    }
       public function update_inside(Request $request)
    {
      $insertdata = db::table('db_enviimpact_inside')->where('id',$request->id)->update(array(
     
        'topic_en' => $request->topic_en,
        'topic_th' => $request->topic_th,
        'topic_id' => $request->topic_id,
        'topic_vn' => $request->topic_vn,
        'detail_en' => $request->detail_en,
        'detail_th' => $request->detail_th,
        'detail_id' => $request->detail_id,
        'detail_vn' => $request->detail_vn,
        'topicchart_en' => $request->topicchart_en,
        'topicchart_th' => $request->topicchart_th,
        'topicchart_id' => $request->topicchart_id,
        'topicchart_vn' => $request->topicchart_vn,
        'topicchart2_en' => $request->topicchart2_en,
        'topicchart2_th' => $request->topicchart2_th,
        'topicchart2_id' => $request->topicchart2_id,
        'topicchart2_vn' => $request->topicchart2_vn,
          ));
       
       

           return redirect()->action('Backend\Enviimpact_chartController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);
    }
     public function from_editchart(Request $request,$id)
    {
    
     
       $cot = DB::table('db_enviimpact_chart')->find($id);
      return view('backend.Enviimpact.inside.from_editchart',[
        'cot' => $cot,
      ]);
    }
      public function update_chart(Request $request,$id)
    {
      $insertdata = db::table('db_enviimpact_chart')->where('id',$id)->update(array(
     
       
        'year' => $request->year,
        'chart_value' => $request->chart_value,
     
          ));
       
       

           return redirect()->action('Backend\Enviimpact_chartController@from_chart',$request->inside)->with(['alert'=>\App\Models\Alert::Msg('success')]);
    }
  public function from_add(Request $request)
    {
      $insertdata = db::table('db_enviimpact_chart')->insert(array(
     
        'topic' =>  $request->topic,
        'inside' =>  $request->inside,
        'year' => $request->year,
        'chart_value' => $request->chart_value,
     
          ));
       
       

           return redirect()->action('Backend\Enviimpact_chartController@from_chart',$request->inside)->with(['alert'=>\App\Models\Alert::Msg('success')]);
    }
       public function delete($id)
    {
     $delete = DB::table('db_enviimpact_chart')
            ->where('id', $id)
            ->delete();
      return redirect()->back();
    }
     }

