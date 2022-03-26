<!DOCTYPE html>
<head>
<title>User Ogani</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Admin Ogani" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="{{url('public')}}/backend/css/bootstrap.min.css" >
<link href="{{url('public')}}/backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="{{url('public')}}/backend/css/style-responsive.css" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{url('public')}}/backend/css/font.css" type="text/css"/>
<link href="{{url('public')}}/backend/css/font-awesome.css" rel="stylesheet"> 
<script src="{{url('public')}}/backend/css/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>ĐĂNG KÝ</h2>
		<form action="{{route('postregister')}}" method="post">
			@csrf
			<input type="text" class="ggg" name="name" placeholder="HỌ TÊN">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL">
			<input type="number" class="ggg" name="phone" placeholder="SỐ ĐIỆN THOẠI">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD">
			<div class="clearfix"></div>
			<input type="submit" value="ĐĂNG KÝ" name="register">
		</form>
		<p>Quay về đăng nhập.<a href="{{route('loginuser')}}">Login</a></p>
</div>
</div>
<script src="{{url('public')}}/backend/css/bootstrap.js"></script>
<script src="{{url('public')}}/backend/css/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{url('public')}}/backend/css/scripts.js"></script>
<script src="{{url('public')}}/backend/css/jquery.slimscroll.js"></script>
<script src="{{url('public')}}/backend/css/jquery.nicescroll.js"></script>
<script src="{{url('public')}}/backend/css/jquery.scrollTo.js"></script>
</body>
</html>
