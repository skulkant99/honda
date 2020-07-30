@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT HEADER</h4>

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
               
                    <form action="{{ url('backend/update-business_header') }}" method="POST" autocomplete="off">
     {{ csrf_field() }}
     @method('put')
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
                        <label  class="col-md-2 col-form-label">Content (EN) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="content_en">{{$content -> content_en}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Content (TH) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="content_th">{{$content -> content_th}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Content (ID) </label>
                        <div class="col-md-10 ">
                          <textarea class="form-control" rows="3"  name="content_id">{{$content -> content_id}}</textarea> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Content (VN) </label>
                        <div class="col-md-10 mt-2">
                          <textarea class="form-control" rows="3"  name="content_vn">{{$content -> content_vn}}</textarea> 
                        </div>
                      </div>

                      <hr>

      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/header-27') }}">
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



