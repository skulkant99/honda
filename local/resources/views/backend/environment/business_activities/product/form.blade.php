@extends('backend.layouts.master')

@section('title') PRODUCTS & SERVICES @endsection

@section('content')

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">เพิ่ม/แก้ไข Product & Services</h4>

        @php
          $path = explode("/",Request::path());
          $path = $path[0]."/".$path[1]."/".$path[2]."/".$path[3];
        @endphp


        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Backend</a></li> -->
            <li class="breadcrumb-item">Backend</li>
            <li class="breadcrumb-item">Business Activities</li>
            <li class="breadcrumb-item"><a href="<?=@$path?>">Product & Services</a></li>
            <li class="breadcrumb-item active">เพิ่ม/แก้ไข Product & Services</li>
          </ol>
        </div>

      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          @if( empty($sRow) )
            <form action="{{ route('backend.product.store') }}" method="POST" autocomplete="off"
                  enctype="multipart/form-data">
              @else
                <form action="{{ route('backend.product.update', $sRow[0]->id ) }}" method="POST" autocomplete="off"
                      enctype="multipart/form-data">
                  <input name="_method" type="hidden" value="PUT">
                  @endif
                  {{ csrf_field() }}


                  {{--อัฟโหลดไฟล์--}}
                  <div class="form-group row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Image :</label>
                    <div class="col-md-5" style="margin-left: 12px ">
                      <input type="file" accept="image/*" id="image" name="image" class="custom-file-input"
                             onchange="readURL(this);" ;>
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                  </div>

                  {{--แสดงรูป--}}
                  <div class="form-group row">
                    <div class="col-md-7" align="center">
                      <div class="card" style="width: 13rem;">
                        @if( empty($sRow) )
                          <img class="card-img-top" src="..." id="blah" value="Please Wait" alt="No image upload.">
                        @else
                          <img class="card-img-top"
                               src="{{ URL::asset('local/public/images/Environment/BusinessActivities/Products/'.$sRow[0]->image??'')}} "
                               id="blah" value="{{$sRow[0]->image??''}}" alt="No image upload.">
                        @endif
                      </div>
                    </div>
                  </div>

                  <hr>
                  @php
                    @$langText = ['English','Thai','Vietnam','Indonesia'];
                    @$langVal = ['en','th','vn','in'];
                  @endphp
                  @for ($i = 0; $i < 4 ; $i++)

                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Header {{$langText[$i]}} :</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $sRow[$i]->header??''}}" name="header[]"
                             required>
                    </div>
                  </div>

                  <hr>

                    <div class="form-group row">


                      @if( !empty($sRow) )
                        <input class="form-control" type="hidden" value="{{ $sRow[$i]->id }}" name="id[]">
                      @endif


                      <label for="example-text-input" class="col-md-2 col-form-label">Language :</label>
                      <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ @$langText[$i] }}" readonly=""
                               style="border: 0px;font-weight: bold;">
                        <input class="form-control" type="hidden" value="{{ @$langVal[$i] }}" name="lang[]"
                               readonly="" style="border: 0px;font-weight: bold;">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">CONTENT {{$langText[$i]}} :</label>
                      <div class="col-md-10 mt-2">
                        <div class="custom-control custom-switch">
                          <textarea name="content[]" class="ckeditor">{{ $sRow[$i]->content??''}}</textarea>
                        </div>
                      </div>
                    </div>
                    <hr>
                  @endfor

                  <div class="form-group mb-0 row">
                    <div class="col-md-6">
                      <a class="btn btn-secondary btn-sm waves-effect" href="{{ route('backend.product.index') }}">
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
            </form>
        </div>
      </div>
    </div>
  </div> <!-- end col -->
  </div>
  <!-- end row -->

@endsection
@section('script')
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
  <script>
    $( document ).ready( function() {
      $( '.ckeditor' ).each( function() {
        CKEDITOR( this );
      } );
    } );
  </script>
@endsection
