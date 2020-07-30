@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT BANNER</h4>

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
               
                    <form  action="{{ url('backend/update-enviimpact_banner',$content -> id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
     {{ csrf_field() }}
       @method('put')


                      <div class="form-group row" >
                             <label  class="col-md-2 col-form-label">Upload Banner File :</label>
                      <div class="col-md-10 " >
   <input type='hidden'  name="id" value="{{$content->id}}" />                    
  <input type='file' class="col-form-label" name="file_report" id="imgInp" />
</div>
                        <div class="col-md-12 " align="center">
                   <img width="20%" id="blah" alt="your image" src="{{asset('backend/images/enviimpact_banner').'/'.$content->image}}">
                        </div>
                  </div>

                  <hr>

                  <div class="form-group row">
                        <input class="form-control" type="hidden" value="{{$content -> id}}" name="id">
                        <label  class="col-md-2 col-form-label">Header (EN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header_en}}" name="header_en">

                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header (TH) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header_th}}" name="header_th">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header (ID) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header_id}}" name="header_id">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header (VN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header_vn}}" name="header_vn">
                        </div>
                      </div>

                       <hr>

                  <div class="form-group row">
                        <input class="form-control" type="hidden" value="{{$content -> id}}" name="id">
                        <label  class="col-md-2 col-form-label">Header2 (EN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header2_en}}" name="header2_en">

                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header2 (TH) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header2_th}}" name="header2_th">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header2 (ID) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header2_id}}" name="header2_id">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Header2 (VN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> header2_vn}}" name="header2_vn">
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Detail (EN) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="detail_en">{{$content -> detail_en}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Detail (TH) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="detail_th">{{$content -> detail_th}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Detail (ID) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="detail_id">{{$content -> detail_id}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Detail (VN) </label>
                        <div class="col-md-10 mt-2">
                          <textarea class="form-control" rows="3"  name="detail_vn">{{$content -> detail_vn}}</textarea> 
                        </div>
                      </div>

                      <hr>
      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/banner-23') }}">
                          <i class="bx bx-arrow-back font-size-16 align-middle mr-1"></i> ย้อนกลับ
                        </a>
                    </div>
                    <div class="col-md-6 text-right">
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

<script>
  CKEDITOR.replace( 'detail_en', {allowedContent: true} );
    CKEDITOR.replace( 'detail_th', {allowedContent: true} );
      CKEDITOR.replace( 'detail_id', {allowedContent: true} );
        CKEDITOR.replace( 'detail_vn', {allowedContent: true} );

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
