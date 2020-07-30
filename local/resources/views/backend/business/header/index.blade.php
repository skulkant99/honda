@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">HEADER</h4>

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
                  <div class="col-8">
                    {{-- <input type="text" class="form-control float-left text-center w130 myLike" placeholder="Name" name="fname"> --}}
                  </div>
                </div>

                <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                  <thead align="center">
                    <th>No.</th>
                    <th>Header (EN)</th>
                    <th>Tools</th>
                  
                  </thead>
                  <tbody align="center">

                    @foreach($cont as $key=>$c)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$c->header_en}}</td>
                      <td>
                        <a href="{{url('backend/edit-business_header')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection



