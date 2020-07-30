@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Images Gallery</h4>
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
                    <a href="{{ url('backend/news-update-3') }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>

                    <a href="{{url('backend/add_img_gallery',$news_id)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> เพิ่มรูปภาพ</a>
                  </div>
                  <br><br>
                  <div class="col-12">
                    <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                    <thead>
                      <th>No.</th>
                      <th>Image</th>
                      <th>Update</th>
                      <th>Action</th>
                    </thead>
                    <tbody>

                      @foreach($gall as $key=>$c)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                          <img src="{{ asset('local/public/news_img').'/'.$c->gal_img }}" height="50">
                        </td>
                        <td></td>
                        <td>
                          <a href="{{ url('backend/edit_img_gal',$c->gal_id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                          <a href="{{ url('backend/delete_img_gal',$c->gal_id) }}" class="btn btn-sm btn-danger" onclick="if(confirm('ยืนยันการลบ / Confirm to delete ')) return true; else return false;"><i class="fa fa-trash"></i></a>
                          
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                </table>
                  </div>
                </div>

                

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')

@endsection

