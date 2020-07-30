@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{$contt->topicchart_en}}</h4>

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
                  <div class="col-7">
                    {{-- <input type="text" class="form-control float-left text-center w130 myLike" placeholder="Name" name="fname"> --}}
                  </div>
            
                  <div class="col-4 text-right">
                    <a class="btn btn-info btn-sm mt-1" href="{{url('backend/add-enviimpact_chart1',$contt->id)}}">
                      <i class="bx bx-plus font-size-20 align-middle mr-1"></i>ADD
                    </a>
                  </div>
                      </div>
                      <br>
                <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                  <thead align="center">
                    <th>No.</th>
                    <th>Year</th>
                    <th>Value</th>
                    <th>Tools</th>
                  
                  </thead>
                  <tbody align="center">

                @foreach($conn as $key=>$c)
                    <tr>
                      <td>{{$key+1}}</td>
                  
                      <td>{{$c->year}}</td>
                      <td>{{$c->chart_value}}</td>
                      <td>
                        <a href="{{url('backend/edit-enviimpact_editchart',$c->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                    
                        <a href="{{url('backend/delete-enviimpact_chart',$c->id)}}" class="btn btn-sm btn-danger"onclick="if(confirm('ยืนยันการลบ / Confirm to delete ')) return true; else return false;"><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>
                @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- end page title -->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{$contt->topicchart2_en}}</h4>

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
                         <div class="col-7">
                    {{-- <input type="text" class="form-control float-left text-center w130 myLike" placeholder="Name" name="fname"> --}}
                  </div>
            
                  <div class="col-4 text-right">
                       <a class="btn btn-info btn-sm mt-1" href="{{url('backend/add-enviimpact_chart2',$contt->id)}}">
                      <i class="bx bx-plus font-size-20 align-middle mr-1"></i>ADD
                    </a>
                  </div>
                </div>
<br>
                <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                  <thead align="center">
                    <th>No.</th>
                    <th>Year</th>
                    <th>Value</th>
                    <th>Tools</th>
                  
                  </thead>
                  <tbody align="center">

                @foreach($conn2 as $key=>$c2)
                    <tr>
                      <td>{{$key+1}}</td>
                  
                      <td>{{$c2->year}}</td>
                      <td>{{$c2->chart_value}}</td>
                      <td>
                        <a href="{{url('backend/edit-enviimpact_editchart',$c2->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                     
                        <a href="{{url('backend/delete-enviimpact_chart',$c2->id)}}" onclick="if(confirm('ยืนยันการลบ / Confirm to delete ')) return true; else return false;"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>
                @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
      <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ url('backend/enviimpact_inside') }}">
                          <i class="bx bx-arrow-back font-size-16 align-middle mr-1"></i> ย้อนกลับ
                        </a>
                    </div>
                    
                </div>
@endsection



