@extends('backend.masterview')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Quản lý danh mục
     <span class="tools pull-right">
        <a class="btn btn-primary" href="{{route('ad.themdm')}}" onclick="return confirm('Are you sure?');">Thêm</a>
    </span>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Mã loại</th>
            <th>Tên loại</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Unactive</th>
          </tr>
        </thead>
        <tbody>
          @foreach($getDm as $loai)
          <tr data-expanded="true">
            <td>{{$loai->maloai}}</td>
            <td>{{$loai->tenloai}}</td>
            @php if($loai->status == 0){ @endphp
              <td>Kích hoạt</td>
            @php }else{ @endphp
              <td>Chưa kích hoạt</td>
            @php } @endphp
            <td><a href="{{route('ad.suadm',['id'=>$loai->maloai])}}" class="active" onclick="return confirm('Are you sure?');" ui-toggle-class=""><i class="fa fa-check text-success text-active"></td> 
            <td><a href="{{route('ad.xoadm',['id'=>$loai->maloai])}}" onclick="return confirm('Are you sure?');" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@stop()