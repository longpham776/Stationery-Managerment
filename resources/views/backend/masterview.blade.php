<!DOCTYPE html>
<head>
<title>Admin Ogani</title>
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
<link rel="stylesheet" href="{{url('public')}}/backend/css/morris.css" type="text/css"/>
<link rel="stylesheet" href="{{url('public')}}/backend/css/monthly.css">
<script src="{{url('public')}}/backend/js/jquery2.0.3.min.js"></script>
<script src="{{url('public')}}/backend/js/raphael-min.js"></script>
<script src="{{url('public')}}/backend/js/morris.js"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
    <a href="{{route('ad.home')}}" class="logo">
        Ogani
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="nav notify-row" id="top_menu">
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/admin.png">
                <span class="username">@php if(isset($_SESSION['admin'])){foreach($_SESSION['admin'] as $a){echo $a->username;}} @endphp</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{route('ad.logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('ad.home')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản lý</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('ad.qldm')}}">Quản lý danh mục</a></li>
                        <li><a href="{{route('ad.qlsp')}}">Quản lý sản phẩm</a></li>
						<li><a href="{{route('ad.qldh')}}">Quản lý đơn hàng</a></li>
						<li><a href="{{route('ad.qlkh')}}">Quản lý khách hàng</a></li>
						<li><a href="{{route('ad.qltv')}}">Quản lý thành viên</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('ad.logout')}}">
                        <i class="fa fa-user"></i>
                        <span>Đăng xuất</span>
                    </a>
                </li>
            </ul>            
		</div>
    </div>
</aside>
@yield('content')
<div class="footer">
			<div class="wthree-copyright">
			  <p>© 2022 Ogani. All rights reserved | Design by <a href="#">Ogani</a></p>
			</div>
		  </div>
</section>
</section>
<script src="{{url('public')}}/backend/js/bootstrap.js"></script>
<script src="{{url('public')}}/backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{url('public')}}/backend/js/scripts.js"></script>
<script src="{{url('public')}}/backend/js/jquery.slimscroll.js"></script>
<script src="{{url('public')}}/backend/js/jquery.nicescroll.js"></script>
<script src="{{url('public')}}/backend/js/jquery.scrollTo.js"></script>
<script>
	$(document).ready(function() {
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	<script type="text/javascript" src="{{url('public')}}/backend/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
</body>
</html>