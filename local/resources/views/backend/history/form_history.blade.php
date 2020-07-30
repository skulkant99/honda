@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Form Edit Our History</h4>

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
                    
                    <form action="{{ url('backend/update_history') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')

                       @foreach($his as $no=>$data)

                        <input type="hidden" name="his_id[]" value="{{$data->his_id}}">

                        @if($no==0)<?php $lang='EN'; ?>@endif
                        @if($no==1)<?php $lang='TH'; ?>@endif
                        @if($no==2)<?php $lang='ID'; ?>@endif
                        @if($no==3)<?php $lang='VN'; ?>@endif

                        @if($no==0)
                      
                          {{-- <input type="hidden" name="id" value="{{$data->his_id}}"> --}}
                          <div class="form-group row">
                            <label  class="col-md-4 col-form-label">UPLOAD BANNER FILE :</label>
                            <div class="col-md-8">
                              <input type="hidden" name="old_file" value="{{$data->his_img_bag}}">
                              <input type="file" id="imgInp" name="news_file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                              <img style="height: 200px" id="blah" src="{{ asset('local/public/history_img').'/'.$data->his_img_bag }}" alt="your image" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label">UPLOAD PROFILE 1 :</label>
                            <div class="col-md-8">
                              <input type="hidden" name="old_file2" value="{{$data->his_img_pro1}}">
                              <input type="file" id="imgInp2" name="news_file2" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                              <img style="height: 200px" id="blah2" src="{{ asset('local/public/history_img').'/'.$data->his_img_pro1 }}" alt="your image" />
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-4 col-form-label">UPLOAD PROFILE 2 :</label>
                            <div class="col-md-8">
                              <input type="hidden" name="old_file3" value="{{$data->his_img_pro2}}">
                              <input type="file" id="imgInp3" name="news_file3" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                              <img style="height: 200px" id="blah3" src="{{ asset('local/public/history_img').'/'.$data->his_img_pro2 }}" alt="your image" />
                            </div>
                          </div>

                          <hr>

                          <div class="form-group row">
                            <label class="col-md-4 col-form-label">NAME :</label>
                            <div class="col-md-8">
                              <input type="text" name="his_name" class="form-control" value="{{$data->his_name}}">
                            </div>
                          </div>
                        @endif

                      <hr>



                      <div class="form-group row">
                        <label class="col-md-4 col-form-label">Position ({{$lang}}) :</label>
                        <div class="col-md-8">
                          <input type="text" name="his_pos[]" class="form-control" value="{{$data->his_pos}}">
                        </div>
                      </div>
                      

                      <hr>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label">Position Detail ({{$lang}}) :</label>
                        <div class="col-md-8">
                          <textarea name="his_posde[]" class="form-control">{{$data->his_posde}}</textarea>
                        </div>
                      </div>
                      <hr>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label">Description ({{$lang}}) :</label>
                        <div class="col-md-8">
                          <textarea name="his_desc[]" class="form-control editor">{{$data->his_desc}}</textarea>
                        </div>
                      </div>

                      @endforeach
                      






                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{ url('backend/our-history-5') }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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
  // function readURL(input) {
  // if (input.files && input.files[0]) {
  //   var reader = new FileReader();
    
  //   reader.onload = function(e) {
  //     $('#blah').attr('src', e.target.result);
  //   }
    
  //   reader.readAsDataURL(input.files[0]); // convert to base64 string
  //   }
  // }

  // $("#imgInp").change(function() {
  //   readURL(this);
  // });

  // function readURL2(input2) {
  // if (input2.files && input2.files[0]) {
  //   var reader = new FileReader();
    
  //   reader.onload = function(e) {
  //     $('#blah2').attr('src', e.target.result);
  //   }
    
  //   reader.readAsDataURL2(input2.files[0]); // convert to base64 string
  //   }
  // }

  // $("#imgInp2").change(function() {
  //   readURL(this);
  // });

  // function readURL(input) {
  // if (input.files && input.files[0]) {
  //   var reader = new FileReader();
    
  //   reader.onload = function(e) {
  //     $('#blah3').attr('src', e.target.result);
  //   }
    
  //   reader.readAsDataURL(input.files[0]); // convert to base64 string
  //   }
  // }

  // $("#imgInp3").change(function() {
  //   readURL(this);
  // });


</script>

{{-- <script>
  CKEDITOR.replace( 'his_desc_en', {allowedContent: true} );
  CKEDITOR.replace( 'his_desc_th', {allowedContent: true} );
  CKEDITOR.replace( 'his_desc_id', {allowedContent: true} );
  CKEDITOR.replace( 'his_desc_vn', {allowedContent: true} );
</script> --}}
<script>
  // CKEDITOR.replace( '.editor', {allowedContent: true} );
   
   $( document ).ready( function() {
    $( '.editor' ).each( function() {
        CKEDITOR.replace( this );
    } );
} );
</script>
@endsection

