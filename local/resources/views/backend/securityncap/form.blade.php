@extends('backend.layouts.master')

@section('title') SAFETY > ANCAP @endsection

@section('css')
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
            <h4 class="mb-0 font-size-18">SAFETY > ANCAP > EDIT INSIDE INFORMATION</h4>
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
              <form action="{{ route('backend.securityncap.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.securityncap.update', $sRow[0]->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}


<div class="myBorder">

                <div class="form-group row">
                    <label for="example-email-input" class="col-md-2 col-form-label">FILE UPLOAD :</label>
                    
                    <div class="col-md-6">
                        <input class="form-control" type="file" name="image"> 
                    </div>
                    <div class="col-md-3" style="font-size: 20px;color: red;">
                    	
                        <img src="{{ url("local/public/backend/securityncap") }}/{{ $sRow[0]->image??'' }}" width="200">
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
                        <label for="example-text-input" class="col-md-2 col-form-label">TOPIC :</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $sRow[$i]->topic??'' }}" name="topic[]" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">CONTENT  :</label>
                        <div class="col-md-10">
                            <textarea name="content[]" class="form-control" rows="4" cols="50" >{{ $sRow[$i]->content??'' }}</textarea>
                        </div>
                    </div>
            </div>

      
 @endfor

<div class="myBorder">

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">URL :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[0]->url??'' }}" name="url" >
                    </div>
                </div>

 </div>
                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url("backend/securityncap") }}">
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
