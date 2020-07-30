@extends('backend.layouts.master')

@section('title') INSIDE INFORMATION @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">INSIDE INFORMATION</h4>
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
              <form action="{{ route('backend.insideinformationncap.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.insideinformationncap.update', $sRow->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}


                <div class="form-group row">
                    <label for="example-email-input" class="col-md-2 col-form-label">FILE UPLOAD :</label>
                    
                    <div class="col-md-6">
                        <input class="form-control" type="file" name="file_report"> 
                    </div>
                    <div class="col-md-3" style="font-size: 20px;color: red;">
                    	{{ $sRow->file_report??'' }}
                    </div>

                </div>
               
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">MODEL :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow->model??'' }}" name="model" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">YEAR :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow->year??'' }}" name="year" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">AOP<sup>1</sup> :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow->aop1??'' }}" name="aop1" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">COP<sup>1</sup> :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow->cop1??'' }}" name="cop1" required>
                    </div>
                </div>

                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url("backend/insideinformationncap") }}">
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
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
