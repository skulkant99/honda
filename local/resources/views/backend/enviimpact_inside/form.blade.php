@extends('backend.layouts.master')
@section('title') ENVI.IMPACT | EDIT TYPE OF INSIDE DETAILS @endsection

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
            <h4 class="mb-0 font-size-18">EDIT TYPE OF INSIDE DETAILS</h4>
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
              <form action="{{ route('backend.enviimpact_inside.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
              @else
              <form action="{{ route('backend.enviimpact_inside.update', $sRow[0]->id ) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}
    
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
                    <label for="example-text-input" class="col-md-2 col-form-label">Topic  :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->topic_en??'' }}" name="topic_en[]" >
                    </div>
                </div>

                


                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Detail :</label>
                    <div class="col-md-10 mt-2">
                      <div class="custom-control custom-switch">
                            <textarea  rows="4" name="detail_en[]" class="ckeditor">{{$sRow[$i]->detail_en??'' }}</textarea>
                      </div>
                    </div>
                </div>
      

                      <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Topicchart :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->topicchart_en??'' }}" name="topicchart_en[]" >
                    </div>
                </div>




                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Topicchart2 :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $sRow[$i]->topicchart2_en??'' }}" name="topicchart2_en[]" >
                    </div>
                </div>


            </div>


 @endfor
             

                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/enviimpact_inside') }}">
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




<script>
$( document ).ready( function() {
    $( '.ckeditor' ).each( function() {
        CKEDITOR( this );
    } );
} );


</script>
@endsection
