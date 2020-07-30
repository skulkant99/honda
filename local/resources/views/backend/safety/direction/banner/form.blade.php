@extends('backend.layouts.master')

@section('title') Banner @endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">เพิ่ม/แก้ไข Banner</h4>

            @php
            $path = explode("/",Request::path());
            $path = $path[0]."/".$path[1]."/".$path[2];
            @endphp

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Backend</a></li> -->
                  <li class="breadcrumb-item">Backend</li>
                  <li class="breadcrumb-item">Safety</li>
                  <li class="breadcrumb-item">Directions</li>
                    <li class="breadcrumb-item"><a href="<?=@$path?>">Banner</a></li>
                    <li class="breadcrumb-item active">เพิ่ม/แก้ไข Banner</li>
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
              <form action="{{ route('backend.banner-direction.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
              @else
              <form action="{{ route('backend.banner-direction.update', $sRow->id ) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}

                {{--อัฟโหลดไฟล์--}}
                <div class="form-group row">
                  <label for="example-email-input" class="col-md-2 col-form-label">Banner :</label>
                  <div class="col-md-5" style="margin-left: 12px ">
                    <input type="file" accept="image/*" id="image" name="image" class="custom-file-input"
                           onchange="readURL(this);" ;>
                    @if( empty($sRow) )
                      <label class="custom-file-label" for="image">Choose file</label>
                    @else
                      <label class="custom-file-label" for="image">{{$sRow->image}}</label>
                    @endif
                  </div>
                </div>

                {{--แสดงรูป--}}
                <div class="form-group row">
                  <div class="col-md-7" align="center">
                    <div class="card" style="width: 13rem;">
                      @if( empty($sRow) )
                        <img class="card-img-top" src="..." id="blah" value="Please Wait" alt="No image upload.">
                      @else
                        <img class="card-img-top" src="{{ URL::asset('local/public/images/Safety/Directions/Banner/'.$sRow->image??'')}} " id="blah" value="{{$sRow->image??''}}" alt="No image upload.">
                      @endif
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ route('backend.banner-direction.index') }}">
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
    $(".custom-file-input").on("change", function() {
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
@endsection
