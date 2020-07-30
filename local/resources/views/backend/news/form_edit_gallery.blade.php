@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Form Add Gallery</h4>

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
                      <form action="{{ url('backend/update_gallery') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')
                      

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label">UPLOAD GALLERY FILE (380X230) :</label>
                        <div class="col-md-8">
                          <input type="file" id="imgInp" name="news_file" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <input type="hidden" name="gal_id" value="{{$gal->gal_id}}">
                        <input type="hidden" name="news_id" value="{{$gal->news_id}}">
                        <input type="hidden" name="old_file" value="{{$gal->gal_img}}">
                        <label for="example-email-input" class="col-md-4 col-form-label"></label>
                        <div class="col-md-8">
                          <img style="height: 200px" id="blah" src="{{ asset('local/public/news_img').'/'.$gal->gal_img }}" alt="your image" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{ url('backend/news_gallery', $gal->news_id) }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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

