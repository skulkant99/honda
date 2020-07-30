@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">NEWS UPDATE</h4>
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
                    <a href="{{url('backend/add_news')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> เพิ่มข่าว</a>
                  </div>
                  <br><br>
                  <div class="col-12">
                    <table id="data-table" class="table table-bordered dt-responsive" style="width: 100%;">
                    <thead>
                      <th>No.</th>
                      <th>Image</th>
                      <th>Record Date</th>
                      <th>Title (EN)</th>
                      <th>Gallery</th>
                      <th>Action</th>
                    </thead>
                    <tbody>

                      @foreach($news as $key=>$c)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                          <img src="{{ asset('local/public/news_img').'/'.$c->news_img }}" height="50">
                        </td>
                        <td>{{$c->news_post_time}}</td>
                        <td>{{$c->news_topic}}</td>
                        <td>
                          <a href="{{ url('backend/news_gallery', $c->news_group) }}" class="btn btn-sm btn-info"><i class="fa fa-file-image"></i></a>
                        </td>
                        <td>
                          <a href="{{ url('backend/edit_news',$c->news_group) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                          <a href="{{ url('backend/delete_news',$c->news_group) }}" class="btn btn-sm btn-danger" onclick="if(confirm('ยืนยันการลบ / Confirm to delete ')) return true; else return false;"><i class="fa fa-trash"></i></a>
                          {{-- <a href="{{ url('backend/delete_news',$c->news_id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> --}}
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

