@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT NEWS MENU</h4>

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
                    
                    <form action="{{url('backend/update_news_menu')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')

                      @foreach($menu as $no=>$data)


                        <input type="hidden" name="menu_id[]" value="{{$data->menu_id}}">

                        @if($no==0)<?php $lang='EN'; ?>@endif
                        @if($no==1)<?php $lang='TH'; ?>@endif
                        @if($no==2)<?php $lang='ID'; ?>@endif
                        @if($no==3)<?php $lang='VN'; ?>@endif

                        @if($no==1)
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label">UPLOAD IMAGE FILE :</label>
                        <div class="col-md-8">
                          <input type="file" id="imgInp" name="news_file" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label"></label>
                        <div class="col-md-8">
                          <input type="hidden" name="old_img" value="{{$data->menu_img}}">
                          <img style="height: 100px" id="blah" src="{{ asset('local/public/env_img').'/'.$data->menu_img }}" alt="your image" />
                        </div>
                      </div>
                      <hr>
                      @endif

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label">Topic ({{$lang}}) :</label>
                        <div class="col-md-8">
                          <input type="text" name="menu_topic[]" class="form-control" value="{{$data->menu_topic}}">
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <input type="hidden" name="vdo_id" value="1">
                        <label for="example-email-input" class="col-md-4 col-form-label">Content ({{$lang}}) :</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="menu_cont[]">{{$data->menu_cont}}</textarea>
                        </div>
                      </div>
                      @endforeach
                      
                      

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{url('backend/news-menu-12')}}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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
@endsection

