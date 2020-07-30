@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Form Add BANNER</h4>

    <!--         <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Backend</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">E-Commerce</a></li>
                    <li class="breadcrumb-item active">Customer (ข้อมูลลูกค้า)</li>
                </ol>
            </div> -->

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    
                    <form action="{{url('backend/update_news')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')   
                      <?php $lang = ''; ?>
                      @foreach($news as $no=>$data)

                      <input type="hidden" name="news_id[]" value="{{$data->news_id}}">

                      @if($no==0)<?php $lang='EN'; ?>@endif
                      @if($no==1)<?php $lang='TH'; ?>@endif
                      @if($no==2)<?php $lang='ID'; ?>@endif
                      @if($no==3)<?php $lang='VN'; ?>@endif

                      @if($no==0)

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Country</label>
                        <div class="col-md-10">
                          <input type="hidden" name="old_ct" value="{{$data->news_country}}">
                          <select class="form-control" name="news_ct">
                            <option value="{{$now_ct->ct_id}}">{{$now_ct->ct_name_en}}</option>
                            <option value="" disabled>----------</option>
                            @foreach($country as $c)
                            <option value="{{$c->ct_id}}">{{$c->ct_name_en}}</option>
                            @endforeach()
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Page Menu</label>
                        <div class="col-md-10">
                          <input type="hidden" name="old_menu" value="{{$data->news_page}}">
                          <?php
                          $now_page=$data->news_page;
                          if ($now_page == 1){
                            $now_page='menu_index';
                          }elseif ($now_page == 2) {
                            $now_page='menu_safety';
                          }elseif ($now_page == 3) {
                            $now_page='menu_csr';
                          }else{
                            $now_page='Not selected';
                          }

                          ?>

                          <select class="form-control" name="news_menu">
                            <option value=""><?php echo $now_page; ?></option>
                            <option value="1">menu_index</option>
                            <option value="2">menu_safety</option>
                            <option value="3">menu_csr</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">UPLOAD IMAGE FILE (380X230) :</label>
                        <div class="col-md-10">
                          <input type="hidden" name="old_file" value="{{$data->news_img}}">
                          <input type="file" id="imgInp" name="news_file" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                          <img style="height: 200px" id="blah" src="{{ asset('local/public/news_img').'/'.$data->news_img }}" alt="your image" />
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Save Date</label>
                        <div class="col-md-10">
                            <input type="date" name="news_post" class="form-control" value="{{$data->news_post_time}}">
                        </div>
                      </div>

                      <hr>
                      @endif


                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Company ({{$lang}})</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_comp[]" value="{{$data->news_comp}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Topic ({{$lang}})</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_topic[]" value="{{$data->news_topic}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content ({{$lang}})</label>
                        <div class="col-md-10">
                            <textarea class="form-control editor" name="news_cont[]">{{$data->news_cont}}</textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Detail ({{$lang}})</label>
                        <div class="col-md-10">
                            <textarea class="form-control editor" name="news_detail[]">{{$data->news_detail}}</textarea>
                        </div>
                      </div>


                      <br>
                      <hr>


                      @endforeach

                      
                      
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Keyword</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="keyword">
                              {{$data->news_keyword}}
                            </textarea><br>
                            *หมายเหตุ : การใส่คีย์เวิร์ดควรมี เครื่องหมาย " , " คั่นระหว่างข้อความ

                        </div>
                      </div>




                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{ url('backend/news-update-3') }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
                          <button type="submit" class="btn btn-primary btn-sm waves-effect">
                          <i class="bx bx-save font-size-16 align-middle mr-1"></i> บันทึกข้อมูล
                        </button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>



            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
<script>
  // CKEDITOR.replace( '.editor', {allowedContent: true} );
   
   $( document ).ready( function() {
    $( '.editor' ).each( function() {
        CKEDITOR.replace( this );
    } );
} );
</script>
@endsection

