<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SloganController extends Controller
{

    public function index(Request $request)
    {
      $cont = DB::table('db_slogan')->get();
      return view('backend.slogan.index',[
        'cont' => $cont,
      ]);
    }

    public function from($id)
    {
      $content = DB::table('db_slogan')->find($id);
      return view('backend.slogan.from',[
        'content' => $content,
      ]);
    }
       public function update(Request $request)
    {
     
      $insertdata = db::table('db_slogan')->where('id',$request->id)->update(array(
        'topic_en' => $request->topic_en,
        'topic_th' => $request->topic_th,
        'topic_id' => $request->topic_id,
        'topic_vn' => $request->topic_vn,
         'content_en' => $request->content_en,
        'content_th' => $request->content_th,
        'content_id' => $request->content_id,
        'content_vn' => $request->content_vn,
       ));
           return redirect()->action('Backend\SloganController@index')->with(['alert'=>\App\Models\Alert::Msg('success')]);

 
    }
}
