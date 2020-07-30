@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">BANNER</h4>

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
                  {{-- <div class="col-8">
                    <input type="text" class="form-control float-left text-center w130 myLike" placeholder="Name" name="fname">
                  </div> --}}
                  <div class="col-12">
                    <a href="{{url('backend/header-banner-2')}}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
                    <a href="{{url('backend/form-banner')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> เพิ่มรูป</a>
                  </div>
                  <br><br>
                  <div class="col-12">
                    <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                      <thead>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Update Time</th>
                        <th>Action</th>
                      </thead>
                      <tbody>

                        @foreach($banner as $no=>$bn)
                        <tr>
                          <td>{{$no+1}}</td>
                          <td>
                            <img src="{{ asset('local/public/img_banner').'/'.$bn->banner_img }}" height="50">
                          </td>
                          <td>{{$bn->banner_update}}</td>
                          <td>
                            <a href="{{ url('backend/edit_img_banner',$bn->banner_id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('backend/delete_img_banner',$bn->banner_id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div> {{-- col-12 --}}
                  
                </div> {{-- row --}}

                

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@endsection

