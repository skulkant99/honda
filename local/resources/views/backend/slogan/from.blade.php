@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT SLOGAN</h4>

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
               
                    <form action="{{ url('backend/update-slogan') }}" method="POST" autocomplete="off">
     {{ csrf_field() }}
     @method('put')

                      <div class="form-group row" >
                             <label  class="col-md-2 col-form-label">Upload Image File :</label>
                      <div class="col-md-10 " >
                            <input type='hidden'  name="id" value="{{$content->id}}" />                    
                            <input type='file' class="col-form-label" name="img" id="imgInp" />
                      </div>
                      <div class="col-md-12 " align="center">
                       <img width="20%" id="blah" alt="your image" src="{{asset('local/public/triple_banner').'/'.$content->img}}">
                        </div>
                      </div>
                      <div class="form-group row" >
                             <label  class="col-md-2 col-form-label">Upload Image Background File :</label>
                      <div class="col-md-10 " >               
                            <input type='file' class="col-form-label" name="img_bg" id="imgInpbg" />
                      </div>
                      <div class="col-md-12 " align="center">
                       <img width="20%" id="blahbg" alt="your image" src="{{asset('local/public/triple_banner').'/'.$content->img}}">
                        </div>
                      </div>

                      <hr>


                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Topic (EN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> topic_en}}" name="topic_en">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Topic (TH) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> topic_th}}" name="topic_th">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Topic (ID) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> topic_id}}" name="topic_id">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Topic (VN) </label>
                        <div class="col-md-10 mt-2">
                          <input class="form-control" value="{{$content -> topic_vn}}" name="topic_vn">
                        </div>
                      </div>

                       <hr>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Content (EN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="content_en" class="form-control">{{$content -> content_en}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Content (TH) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="content_th" class="form-control">{{$content -> content_th}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Content (ID) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="content_id" class="form-control">{{$content -> content_id}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Content (VN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="content_vn" class="form-control">{{$content -> content_vn}}</textarea>
                      </div>
                    </div>
                </div>
              

      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/slogan-21') }}">
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
  CKEDITOR.replace( 'content_en', {allowedContent: true} );
    CKEDITOR.replace( 'content_th', {allowedContent: true} );
      CKEDITOR.replace( 'content_id', {allowedContent: true} );
        CKEDITOR.replace( 'content_vn', {allowedContent: true} );


function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blahbg').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInpbg").change(function() {
  readURL(this);
});

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


