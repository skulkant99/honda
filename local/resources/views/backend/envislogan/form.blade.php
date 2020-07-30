@extends('backend.layouts.master')

@section('title') SLOGAN  | EDIT  @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('backend/libs/select2/select2.min.css')}}">

<style type="text/css" media="screen">
  .myBorder {
    border: 2px solid #00ace6;border-radius: 5px;border-width: thin;padding: 10px;margin-bottom: 1%;
  }
</style>
@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT SLOGAN</h4>
<!-- 
             <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">EDIT INSIDE INFORMATION</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">E-Commerce</a></li>
                    <li class="breadcrumb-item active">Customer (ข้อมูลลูกค้า)</li>
                </ol>
            </div>  -->

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
              @if( empty($sRow) )
              <form action="{{ route('backend.envislogan.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.envislogan.update', $sRow[0]->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}
<div class="myBorder"> 
                  <div class="form-group row" >
                             <label  class="col-md-2 col-form-label">Upload Banner File :</label>
                      <div class="col-md-10 " >
                             <input type='hidden'  name="image_old" value="{{ $sRow[0]->image??'' }}" />                    
                              <input type='file' class="col-form-label" name="image" id="imgInp" />
                      </div>
                        <div class="col-md-12 " align="center"> 
                   <img width="20%" id="blah" alt="your image" src="{{asset('local/public/backend/environment_image').'/'.$sRow[0]->image??''}}">
                        </div>
                  </div>

                       <div class="form-group row" >
                             <label  class="col-md-2 col-form-label">Upload Background File :</label>
                      <div class="col-md-10 " >
                             <input type='hidden'  name="image_bgold" value="{{ $sRow[0]->image_bg??'' }}" />                    
                              <input type='file' class="col-form-label" name="image_bg" id="imgInp_bg" />
                      </div>
                        <div class="col-md-12 " align="center"> 
                   <img width="20%" id="blah_bg" alt="your image" src="{{asset('local/public/backend/environment_image').'/'.$sRow[0]->image_bg??''}}">
                        </div>
                  </div>
</div>              
  @php
     @$langText = ['English','Thai','Vietnam','Indonesia'];
     @$langVal = ['en','th','vn','in'];
     @endphp
     @for ($i = 0; $i < 4 ; $i++)
<div class="myBorder"> 

                   <div class="form-group row">
            @if( !empty($sRow) )
            <input class="form-control" type="hidden" value="{{ $sRow[$i]->id }}" name="id[]"  >
            @endif
                   

           <label for="example-text-input" class="col-md-2 col-form-label">Language :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ @$langText[$i] }}"  readonly="" style="border: 0px;font-weight: bold;">
                        <input class="form-control" type="hidden" value="{{ @$langVal[$i] }}" name="lang[]"  readonly="" style="border: 0px;font-weight: bold;">
                    </div>
                </div>


                 <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Topic :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->topic??'' }}" name="topic[]" >
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Content  :</label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea  rows="4" name="content[]" class="ckeditor">{{$sRow[$i]->content??'' }}</textarea>
                      </div>
                    </div>
                </div>
  </div>


 @endfor               

                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/envislogan') }}">
                          <i class="bx bx-arrow-back font-size-16 align-middle mr-1"></i> back
                        </a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">
                          <i class="bx bx-save font-size-16 align-middle mr-1"></i> save
                        </button>
                    </div>
                </div>

              </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('backend/libs/select2/select2.min.js')}}"></script>
<script>$('.select2-templating').select2();</script>  <script>


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

function readURLbg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah_bg').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp_bg").change(function() {
  readURLbg(this);
});
</script>
<script>
$( document ).ready( function() {
    $( '.ckeditor' ).each( function() {
        CKEDITOR( this );
    } );
} );
</script>
@endsection
