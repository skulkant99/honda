@extends('backend.layouts.master')

@section('title') Honda Test Rresult Topics @endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">เพิ่ม/แก้ไข Honda Test Rresult Topics</h4>

            @php
            $path = explode("/",Request::path());
            $path = $path[0]."/".$path[1]."/".$path[2]."/".$path[3];
            @endphp


            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Backend</a></li> -->
                  <li class="breadcrumb-item">Backend</li>
                  <li class="breadcrumb-item">Safety</li>
                    <li class="breadcrumb-item"><a href="<?=@$path?>">Honda Test Rresult Topics</a></li>
                    <li class="breadcrumb-item active">เพิ่ม/แก้ไข Honda Test Rresult Topics</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
              @if( empty($sRow) )
              <form action="{{ route('backend.honda-test-result-topic.store') }}" method="POST" autocomplete="off">
              @else
              <form action="{{ route('backend.honda-test-result-topic.update', $sRow->id ) }}" method="POST" autocomplete="off">
                <input name="_method" type="hidden" value="PUT">
              @endif
                {{ csrf_field() }}

                <div class="form-group row">
                  <label for="example-text-input" class="col-md-2 col-form-label">Url :</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" value="{{ $sRow->url??'' }}" name="url" required>
                  </div>
                </div>

                <hr>

                <div class="form-group mb-0 row">
                    <div class="col-md-6">
                        <a class="btn btn-secondary btn-sm waves-effect" href="{{ route('backend.honda-test-result-topic.index') }}">
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
              </form>
            </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
