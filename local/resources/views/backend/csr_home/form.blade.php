@extends('backend.layouts.master')

@section('title') Banner @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT Banner</h4>
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
              <form action="{{ route('backend.csr_home.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.csr_home.update', $sRow->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}
                <input class="form-control" type="hidden" value="{{ $sRow->banner_img??'' }}" name="old_file" >

                 <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                    <div class="col-md-10">
                        <input class="form-control" id="imgInp" type="file" value="{{ $sRow->banner_img??'' }}" name="image" >
                    </div>
                </div>
                <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label"></label>
                        <div class="col-md-8">
                          <?php 
                          if (empty ($sRow->banner_img)){
                          ?>
                            <img style="height: 200px" id="blah" src="local/public/img_banner/nopic.jpg" alt="your image" />
                          <?php
                          }else{
                          ?>
                            <img style="height: 200px" id="blah" src="{{ asset('local/public/csr_img').'/'.$sRow->banner_img??''}}" alt="your image" />
                          <?php
                          }
                          ?>
                          
                        </div>
                </div>

                {{-- <div class="form-group row">
                    <label for="example-email-input" class="col-md-2 col-form-label">FILE UPLOAD :</label>
                    
                    <div class="col-md-6">
                        <input class="form-control" type="file" name="file_report"> 
                    </div>
                    <div class="col-md-3" style="font-size: 20px;color: red;">
                      {{ $sRow->file_report??'' }}
                    </div>

                </div> --}}


                <hr>
                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/csr_home') }}">
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

{{-- <script>
  CKEDITOR.replace( 'detail_en', {allowedContent: true} );
    CKEDITOR.replace( 'detail_th', {allowedContent: true} );
      CKEDITOR.replace( 'detail_id', {allowedContent: true} );
        CKEDITOR.replace( 'detail_vn', {allowedContent: true} );
         CKEDITOR.replace( 'detail2_en', {allowedContent: true} );
    CKEDITOR.replace( 'detail2_th', {allowedContent: true} );
      CKEDITOR.replace( 'detail2_id', {allowedContent: true} );
        CKEDITOR.replace( 'detail2_vn', {allowedContent: true} );
</script> --}}
@endsection