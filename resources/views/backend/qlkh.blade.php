@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý khách hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã khách hàng</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Password</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Unactive</th>
          </tr>
        </thead>
        <tbody>
          @foreach($getKh as $kh)
          <tr>
            <td>{{$kh->makhachhang}}</td>
            <td>{{$kh->hotenkhachhang}}</td>
            <td>{{$kh->sdt}}</td>
            <td>{{$kh->email}}</td>
            <td>{{$kh->password}}</td>
            @php if($kh->status == 0){ @endphp
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
  </div>
</div>
</section>
@stop()