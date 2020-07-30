@extends('backend.layouts.master')

@section('title') BANNER @endsection

@section('css')

@endsection

@section('content')

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">BANNER</h4>
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
              <input type="text" class="form-control float-left ml-1 text-center w200 myLike" placeholder="Banner Name" name="image">

            </div>
            <div class="col-4 text-right">
              <a class="btn btn-info btn-sm mt-1" href="{{ route('backend.banner-direction.create') }}">
                <i class="bx bx-plus font-size-16 align-middle mr-1"></i>เพิ่ม BANNER
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
          url: '{{ action("Backend\Safety\Direction\BannerController@Datatable") }}',
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
          {data: 'id', title :'No', className: 'text-center w50'},
          {data: 'image', title :'<center>Banner</center>', className: 'text-center'},
          {data: 'updated_at', title :'Updated At', className: 'text-center w130'},
          {data: 'id', title :'Action', className: 'text-center w60'},
        ],
        rowCallback: function(nRow, aData, dataIndex){
          $('td:last-child', nRow).html(''
            + '<a href="{{ route('backend.banner-direction.index') }}/'+aData['id']+'/edit" class="btn btn-sm btn-primary"><i class="bx bx-edit font-size-16 align-middle"></i></a> '
            {{--+ '<a href="javascript: void(0);" data-url="{{ route('backend.banner-direction.index') }}/'+aData['id']+'" class="btn btn-sm btn-danger cDelete"><i class="bx bx-trash font-size-16 align-middle"></i></a>'--}}
          ).addClass('input');
          // console.log("nRow : ", nRow)
          $('td:nth-child(2)', nRow).html(''
            + '<div class="container">\n' +
            '  <img src="{{"local/public/images/Safety/Directions/Banner/"}}'+aData['image']+'" class="rounded" alt="Cinque Terre" width="auto" height="200" > \n' +
            '</div>'
          );
        }
      });
      $('.myWhere,.myLike,.myCustom,#onlyTrashed').on('change', function(e){
        oTable.draw();
      });

    });
  </script>
@endsection

