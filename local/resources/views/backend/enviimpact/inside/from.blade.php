@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT TYPE OF INSIDE DETAILS</h4>

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
               
                    <form action="{{ url('backend/update-enviimpact_inside') }}" method="POST" autocomplete="off">
     {{ csrf_field() }}
    @method('put')

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Topic (EN) </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="{{$content -> topic_en}}" name="topic_en">
                          <input class="form-control" type="hidden" value="{{$content -> id}}" name="id">
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
                    <label class="col-md-2 col-form-label">Detail (EN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="detail_en" class="form-control">{{$content -> detail_en}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Detail (TH) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="detail_th" class="form-control">{{$content -> detail_th}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Detail (ID) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="detail_id" class="form-control">{{$content -> detail_id}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Detail (VN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="detail_vn" class="form-control">{{$content -> detail_vn}}</textarea>
                      </div>
                    </div>
                </div>

                       <hr>

                

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart (EN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart_en" class="form-control">{{$content -> topicchart_en}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart (TH) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart_th" class="form-control">{{$content -> topicchart_th}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart (ID) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart_id" class="form-control">{{$content -> topicchart_id}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart (VN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart_vn" class="form-control">{{$content -> topicchart_vn}}</textarea>
                      </div>
                    </div>
                </div>       <hr>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart 2 (EN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart2_en" class="form-control">{{$content -> topicchart2_en}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart 2 (TH) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart2_th" class="form-control">{{$content -> topicchart2_th}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart 2 (ID) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart2_id" class="form-control">{{$content -> topicchart2_id}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Topic chart 2 (VN) </label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea name="topicchart2_vn" class="form-control">{{$content -> topicchart2_vn}}</textarea>
                      </div>
                    </div>
                </div>
              

      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/type-of-inside-details-24') }}">
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
</script>
@endsection

