@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Form EDIT SUSTAINABILITY</h4>

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
                    
                    <form action="{{ url('backend/update_sus2') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')
                      
                      
                      
                        @foreach($sus2 as $no=>$data)

                        <input type="hidden" name="sus2_id[]" value="{{$data->sus2_id}}">

                        @if($no==0)<?php $lang='EN'; ?>@endif
                        @if($no==1)<?php $lang='TH'; ?>@endif
                        @if($no==2)<?php $lang='ID'; ?>@endif
                        @if($no==3)<?php $lang='VN'; ?>@endif
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label">TOPIC ({{$lang}}) :</label>
                            <div class="col-md-8">
                              <input type="text" name="sus2_topic[]" class="form-control" value="{{$data->sus2_topic}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label">text1 ({{$lang}}) :</label>
                            <div class="col-md-8">
                              <input type="text" name="sus2_text1[]" class="form-control" value="{{$data->sus2_text1}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-md-4 col-form-label">text2 ({{$lang}}) :</label>
                            <div class="col-md-8">
                              <textarea name="sus2_text2[]" class="form-control editor">{{$data->sus2_text2}}</textarea>
                            </div>
                          </div>
                      @endforeach
                      

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{ url('backend/sustainability-part-1-7') }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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
{{-- <script type="text/javascript">
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
</script> --}}
<script type="text/javascript">
  $( document ).ready( function() {
    $( '.editor' ).each( function() {
        CKEDITOR.replace( this );
    } );
} );
  // CKEDITOR.replace( 'sus2_text2_en', {allowedContent: true} );
  // CKEDITOR.replace( 'sus2_text2_th', {allowedContent: true} );
  // CKEDITOR.replace( 'sus2_text2_id', {allowedContent: true} );
  // CKEDITOR.replace( 'sus2_text2_vn', {allowedContent: true} );
</script>
@endsection

