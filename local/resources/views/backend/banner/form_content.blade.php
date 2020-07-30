@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">EDIT HEADER BANNER</h4>

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
                    
                    <form action="{{url('backend/update_content')}}" method="POST" autocomplete="off">
                      {{ csrf_field() }}
                      @method('put')
                      <?php 
                      $lang = '';
                      ?>
                      @foreach($content as $no=>$cont)
                        @if($no==0) <?php $lang='EN' ?>@endif
                        @if($no==1) <?php $lang='TH' ?>@endif
                        @if($no==2) <?php $lang='ID' ?>@endif
                        @if($no==3) <?php $lang='VN' ?>@endif

                        <input type="hidden" name="no" value="{{$no}}">
                        <input type="hidden" name="id[]" value="{{$cont->cont_id}}">

                        <div class="form-group row">
                          <label for="example-email-input" class="col-md-2 col-form-label">Header ({{$lang}})</label>
                          <div class="col-md-10">
                            <input class="form-control" name="cont_head[]" value="{{$cont->cont_head}}">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="example-email-input" class="col-md-2 col-form-label">Content ({{$lang}})</label>
                          <div class="col-md-10">
                            <input class="form-control" name="cont_title[]" value="{{$cont->cont_title}}" >
                          </div>
                        </div>
                      @endforeach

                      {{-- <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Header (TH)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="head_th" value="{{$content -> cont_head_th}}" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Header (ID)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="head_id" value="{{$content -> cont_head_id}}" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Header (VN)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="head_vn" value="{{$content -> cont_head_vn}}" >
                        </div>
                      </div> --}}

                      <hr>

                      {{-- <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (EN)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="title_en" value="{{$content -> cont_title}}" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (TH)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="title_th" value="{{$content -> cont_title_th}}" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (ID)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="title_id" value="{{$content -> cont_title_id}}" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (VN)</label>
                        <div class="col-md-10">
                          <input class="form-control" name="title_vn" value="{{$content -> cont_title_vn}}" >
                        </div>
                      </div> --}}

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{url('backend/header-banner-2')}}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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

{{-- <script>
var oTable;
$(function() {
    oTable = $('#data-table').DataTable({
    "sDom": "<'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
        processing: true,
        serverSide: true,
        scroller: true,
        scrollCollapse: true,
        scrollX: true,
        ordering: false,
        scrollY: ''+($(window).height()-370)+'px',
        iDisplayLength: 25,
        ajax: {
          url: '{{ route('backend.nisit.datatable') }}',
          data: function ( d ) {
            d.Where={};
            $('.myWhere').each(function() {
              if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                d.Where[$(this).attr('name')] = $.trim($(this).val());
              }
            });
            d.Like={};
            $('.myLike').each(function() {
              if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                d.Like[$(this).attr('name')] = $.trim($(this).val());
              }
            });
            d.Custom={};
            $('.myCustom').each(function() {
              if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                d.Custom[$(this).attr('name')] = $.trim($(this).val());
              }
            });
            oData = d;
          },
          method: 'POST'
        },
        columns: [
            {data: 'id', title :'ID', className: 'text-center w50'},
            {data: 'prename', 			title :'<center>Prename</center>', className: 'text-left'},
            {data: 'fname',       title :'<center>Name</center>', className: 'text-left'},
            {data: 'surname',       title :'<center>Surname</center>', className: 'text-left'},
            {data: 'board',       title :'<center>Board</center>', className: 'text-left'},
            {data: 'year_admission',       title :'<center>Year admission</center>', className: 'text-left'},

        ],
        rowCallback: function(nRow, aData, dataIndex){

        }
    });
    $('.myWhere,.myLike,.myCustom,#onlyTrashed').on('change', function(e){
      oTable.draw();
    });
});
</script> --}}
@endsection

