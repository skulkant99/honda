@extends('backend.layouts.master')

@section('title') Honda Asia & Oceania | Sustainability @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Form Add BANNER</h4>

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
                    
                    <form action="{{url('backend/save_news')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @method('POST')

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Country</label>
                        <div class="col-md-10">
                          <select class="form-control" name="news_ct">
                            <option value="">Select Country</option>
                            @foreach($country as $c)
                            <option value="{{$c->ct_id}}">{{$c->ct_name_en}}</option>
                            @endforeach()
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Page Menu</label>
                        <div class="col-md-10">
                          <select class="form-control" name="news_menu">
                            <option value="">Select Page Menu</option>
                            <option value="1">menu_index</option>
                            <option value="2">menu_safety</option>
                            <option value="3">menu_csr</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">UPLOAD IMAGE FILE (380X230) :</label>
                        <div class="col-md-10">
                          <input type="file" id="imgInp" name="news_file" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                          <img style="height: 200px" id="blah" src="local/public/img_banner/nopic.jpg" alt="your image" />
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Save Date</label>
                        <div class="col-md-10">
                            <input type="date" name="news_post" class="form-control">
                        </div>
                      </div>

                      <hr>



                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Company (EN)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="comp[0]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Company (TH)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="comp[1]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Company (ID)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="comp[2]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Company (VN)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="comp[3]">
                        </div>
                      </div>

                      <hr>

                      <input type="hidden" name="lang[0]" value="en">
                      <input type="hidden" name="lang[1]" value="th">
                      <input type="hidden" name="lang[2]" value="in">
                      <input type="hidden" name="lang[3]" value="vn">

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Topic (EN)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="top[0]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Topic (TH)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="top[1]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Topic (ID)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="top[2]">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Topic (VN)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="top[3]">
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (EN)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="cont[0]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (TH)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="cont[1]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (ID)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="cont[2]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Content (VN)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="cont[3]"></textarea>
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Detail (EN)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="detail[0]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Detail (TH)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="detail[1]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Detail (ID)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="detail[2]"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Detail (VN)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="detail[3]"></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Keyword</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="keyword"></textarea><br>
                            *หมายเหตุ : การใส่คีย์เวิร์ดควรมี เครื่องหมาย " , " คั่นระหว่างข้อความ

                        </div>
                      </div>




                      <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10" align="right">
                          <a href="{{ url('backend/news-update-3') }}" class="btn btn-sm btn-warning"><i class="fa fa-caret-left"></i> ย้อนกลับ</a>
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
<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
@endsection

