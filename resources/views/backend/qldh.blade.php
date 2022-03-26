@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý đơn hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã hóa đơn</th>
            <th>Ngày lập</th>
            <th>Mã khách</th>
            <th>Tên khách</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Tình trạng</th>
            <th>Thành tiền</th>
            <th>Sửa</th>
            <th>Change Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($getDh as $hd)
          <tr>
            <td>{{$hd->mahoadon}}</td>
            <td>{{$hd->ngaylap}}</td>
            <td>{{$hd->makh}}</td>
            <td>{{$hd->hoten_kh}}</td>
            <td>{{$hd->sdt_kh}}</td>
            <td>{{$hd->diachi}}</td>
            @php if($hd->trangthai == 0){ @endphp
              <td>Chờ xác nhận</td>
            @php }else if($hd->trangthai == 1){ @endphp
              <td>Chờ lấy hàng</td>
            @php }else if($hd->trangthai == 2){ @endphp
              <td>Đang giao</td>
            @php }else if($hd->trangthai == 3){ @endphp
              <td>Đã giao</td>
            @php }else if($hd->trangthai == 4){ @endphp
              <td>Đã hủy</td>
            @php } @endphp
            <td>{{$hd->tongtien}}</td>
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