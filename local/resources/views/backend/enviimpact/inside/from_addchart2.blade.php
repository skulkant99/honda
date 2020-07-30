@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">ADD CHART</h4>

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
               
                    <form action="{{ url('backend/add-enviimpact_chart') }}" method="POST" autocomplete="off">
     {{ csrf_field() }}
    @method('put')

                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Year </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="" name="year">
                              <input class="form-control" type="hidden" value="{{$inside}}" name="inside">
                           <input class="form-control" type="hidden" value="2" name="topic">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-md-2 col-form-label">Value </label>
                        <div class="col-md-10 ">
                          <input class="form-control" value="" name="chart_value">
                        </div>
                      </div>
                    
      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{url('backend/edit-enviimpact_chart',$inside)  }}">
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


@endsection



