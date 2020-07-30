<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Statement_insideController extends Controller
{

    public function inside(Request $request)
    {
      $cont = DB::table('db_statement_inside')->get();
      return view('backend.statement and vision.index',[
        'cont' => $cont,
      ]);
    }

    public function from(Request $request)
    {
      $content = DB::table('db_statement_inside')->first();
      return view('backend.statement and vision.from',[
        'content' => $content,
      ]);
    }
       public function update_inside(Request $request)
    {
     
      $insertdata = db::table('db_statement_inside')->where('id',$request->id)->update(array(
        'header_en' => $request->header_en,
        'header_th' => $request->header_th,
        'header_id' => $request->header_id,
        'header_vn' => $request->header_vn,
        'topic_en' => $request->topic_en,
        'topic_th' => $request->topic_th,
        'topic_id' => $request->topic_id,
        'topic_vn' => $request->topic_vn,
        'detail_en' => $request->detail_en,
        'detail_th' => $request->detail_th,
        'detail_id' => $request->detail_id,
        'detail_vn' => $request->detail_vn
       ));
           return redirect()->action('Backend\Statement_insideController@inside')->with(['alert'=>\App\Models\Alert::Msg('success')]);

 
    }
}
