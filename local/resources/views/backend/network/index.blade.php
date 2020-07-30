@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('backend/libs/select2/select2.min.css')}}">
@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18"> NETWORK </h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-3">
            
            <select name="country" class="form-control select2-templating myWhere " >
              <option value="">Select</option>
                @if($dsCountry)
                @foreach($dsCountry AS $r)
                <option value="{{$r->id}}">{{$r->country}}</option>
                @endforeach
                @endif
            </select>

            </div>

            <div class="col-3">

            <input type="text" class="form-control float-left ml-1 text-center w200 myLike" placeholder="Company" name="txt_company">

          </div>
          <div class="col-6 text-right">
            <a class="btn btn-info btn-sm mt-1" href="{{ route('backend.network.create') }}">
              <i class="bx bx-plus font-size-20 align-middle mr-1"></i>ADD
            </a>
          </div>
        </div>
        <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
        </table>
      </div>
    </div>
    </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')

<script>
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
          url: '{{ route('backend.network.datatable') }}',
          data: function ( d ) {
            d.Where={};
            $('.myWhere').each(function() {
              if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                d.Where[$(this).attr('name')] = $.trim($(this).val());
                console.log($(this).attr('name')+":"+$(this).val());
              }
            });
            d.Like={};
            $('.myLike').each(function() {
              if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                d.Like[$(this).attr('name')] = $.trim($(this).val());
                console.log($(this).attr('name')+":"+$(this).val());
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
            {data: 'txt_company', title :'<center>Company</center>', className: 'text-left'},
            {data: 'country', title :'<center>Country</center>', className: ''},
            {data: 'country_name', title :'<center>country_name</center>', className: 'text-left'},
            {data: 'id',   title :'<center>Table</center>', className: 'text-center',render: function(d) {
               return '<a href="{{ url('backend/network_table') }}/?id='+d+'" class="btn btn-sm btn-info"><i class="bx bx-edit font-size-16 align-middle"></i></a> ';
            }},
            {data: 'id', title :'<center>Tools</center>', className: 'text-center'},
        ],
        'columnDefs' : [
            //hide the second & fourth column
            { 'visible': false, 'targets': [2] }
        ],
        rowCallback: function(nRow, aData, dataIndex){
          $('td:last-child', nRow).html(''
            + '<a href="{{ route('backend.network.index') }}/'+aData['id']+'/edit" class="btn btn-sm btn-primary"><i class="bx bx-edit font-size-16 align-middle"></i></a> '
            + '<a href="javascript: void(0);" data-url="{{ route('backend.network.index') }}/'+aData['id']+'" class="btn btn-sm btn-danger cDelete"><i class="bx bx-trash font-size-16 align-middle"></i></a>'
          ).addClass('input');
        }
    });
    $('.myWhere,.myLike,.myCustom').on('change', function(e){
      oTable.draw();
    });

});


</script>
    <script src="{{ URL::asset('backend/libs/select2/select2.min.js')}}"></script>
    <script>
      $('.select2-templating').select2();
    </script>    
@endsection