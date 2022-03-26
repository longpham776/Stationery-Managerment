@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý sản phẩm
      <span class="tools pull-right">
      <a class="btn btn-primary" href="{{route('ad.themsp')}}" onclick="return confirm('Are you sure?');">Thêm</a>
    </span>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Unactive</th>
          </tr>
        </thead>
        <tbody>
          @foreach($getSp as $sp)
          <tr>
            <td>{{$sp->masanpham}}</td>
            <td>{{$sp->tensanpham}}</td>
            @php foreach($getDm as $loai){
              if(($loai->maloai) == ($sp->loaisanpham)) { 
              @endphp
              <td>{{$loai->tenloai}}</td>
              @php }
            } @endphp
            <td>{{$sp->gia}}</td>
            <td><img src="{{url('public')}}/frontend/img/product/{{$sp->hinh}}" weight="100px" height="100px"/></td>
            <td>{{$sp->mota}}</td>
            @php if($sp->status == 0){ @endphp
              <td>Kích hoạt</td>
            @php }else{ @endphp
              <td>Chưa kích hoạt</td>
            @php } @endphp
            <td><a href="#" onclick="return confirm('Are you sure?');" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></td> 
            <td><a href="#" onclick="return confirm('Are you sure?');" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@stop()