@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">DIRECTION</h4>

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
                  <thead>
                    <th>No.</th>
                    <th>Banner</th>
                    <th>Topic (EN)</th>
                  
                    <th>Action</th>
                  </thead>
                  <tbody>

                    
                    <tr>
                      <td>1</td>
                      <td>
                        <img height="100" src="{{ asset('local/public/direc_img').'/'.$direc->direc_img }}">
                      </td>
                      <td>
                        {{$direc->direc_topic}}
                      </td>
                      <td>
                        <a href="{{url('backend/edit_direc')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      </td>

                    </tr>
                  </tbody>
                </table>

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

