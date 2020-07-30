@extends('backend.layouts.master')

@section('title') EDIT NETWORK

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
            <h4 class="mb-0 font-size-18">EDIT NETWORK</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
	

              @if( empty($sRow) )
              <form action="{{ route('backend.network.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.network.update', $sRow[0]->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}

<div class="myBorder">
            
                <div class="form-group row">

                	

                    <label for="example-text-input" class="col-md-2 col-form-label">COUNTRY :</label>
                    <div class="col-md-10">
                      <select name="country" class="form-control select2-templating " >
			             <option value="%">Select</option>
			                @if($dsCountry)
			                @foreach($dsCountry AS $r)
			                <option value="{{$r->id}}" {{ (isset($sRow[0]) && $sRow[0]->country==$r->id)?'selected':'' }}>{{$r->country}}</option>
			                @endforeach
			                @endif
			            </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">CATEGORY :</label>
                    <div class="col-md-10">
                        <input type='checkbox' name='automobile' value='1' {{ (isset($sRow[0]) && $sRow[0]->automobile==1)?'checked':'' }} > automobile
                        <input type='checkbox' name='motocycle' value='2' {{ (isset($sRow[0]) && $sRow[0]->motocycle==2)?'checked':'' }} > motocycle
                        <input type='checkbox' name='powerproducts' value='3' {{ (isset($sRow[0]) && $sRow[0]->powerproducts==3)?'checked':'' }} > powerproducts
                        <input type='checkbox' name='other' value='4' {{ (isset($sRow[0]) && $sRow[0]->other==4)?'checked':'' }} > other
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
                    <label for="example-text-input" class="col-md-2 col-form-label">COMPANY :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->txt_company??'' }}" name="txt_company[]" >
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">ACTIVITIES :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->txt_activities??'' }}" name="txt_activities[]" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">ESTABLISHED :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->txt_established??'' }}" name="txt_established[]" >
                    </div>
                </div>
    
    </div>

 @endfor

<div class="myBorder">

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">WEBSITE :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[0]->txt_website??'' }}" name="txt_website" >
                    </div>
                </div>

 </div>
                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url("backend/network") }}">
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

@section('script')

<script>

</script>
    <script src="{{ URL::asset('backend/libs/select2/select2.min.js')}}"></script>
    <script>
      $('.select2-templating').select2();
</script>  

@endsection
