@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thêm sản phẩm
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal " id="commentForm" method="get" action="" novalidate="novalidate">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-3">Tên sản phẩm</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="cname" name="name" minlength="2" type="text" required="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-3">Giá sản phẩm cũ</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="cname" name="name" minlength="2" type="text" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Thêm</button>
                                </div>
                            </div>
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