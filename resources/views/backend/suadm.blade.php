@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thêm danh mục
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal " id="commentForm" method="POST" action="{{route('postsuadm')}}" novalidate="novalidate">
                        @csrf   @foreach($getDetail as $loai)
                        <div class="form-group ">
                                <label for="cname" class="control-label col-lg-3">Loại danh mục</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="cname" name="maloai" readonly value="{{$loai->maloai}}" minlength="2" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-3">Tên danh mục</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="cname" name="tenloai" value="{{$loai->tenloai}}" minlength="2" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Sửa</button>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
  </div>
</div>
</section>
@stop()