<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lùm xùm</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public')}}/frontend/css/style.css" type="text/css">
    <link rel="shortcut icon" href="{{url('public')}}/frontend/public/frontend/img/iconlogo.png">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{url('public')}}/frontend/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{route('cart')}}"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="public/frontend/img/vietnamese.png" alt="">
                <div>Việt Nam</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Việt Nam</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{route('loginuser')}}"><i class="fa fa-user"></i>Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li><a href="{{route('category')}}">Sản phẩm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{route('cart')}}">Giỏ hàng</a></li>
                        <li><a href="{{route('checkout')}}">Thanh toán</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> stu.edu.vn</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> stu.edu.vn </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__language">
                                <img src="public/frontend/img/vietnamese.png" alt="">
                                <div>Việt Nam</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Việt Nam</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            @php if(!isset($_SESSION['user'])){ @endphp
                            <div class="header__top__right__auth">
                                <a href="{{route('loginuser')}}"><i class="fa fa-user"></i> Login</a>
                            </div>
                            @php }else{ @endphp
                            <div class="header__top__right__auth">
                                Hello,<a href="#"><i class="fa fa-user"></i>@php if(isset($_SESSION['user'])){foreach($_SESSION['user'] as $a){echo $a->email;}} @endphp</a>
                                <a href="{{route('logout')}}" title="Sign Out" style="text-decoration:none;">Sign Out</a>
                            </div>
                            @php } @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="public/frontend/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('category')}}">Sản phẩm</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('cart')}}">Giỏ hàng</a></li>
                                    <li><a href="{{route('checkout')}}">Thanh toán</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-bag"></i><span>{{Cart::count()}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            @foreach($getloai as $lsp)
                            <li><a href="#">{{$lsp->tenloai}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('category')}}" method="GET">
                                <input type="text" name="kw" placeholder="Bạn cần tìm gì nè?">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                       <!-- phone và sđt ----------------
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

@yield('content')
<!-- Footer Section Begin -->
 <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{route('home')}}"><img src="public/frontend/img/logo.png"alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: 180, Cao Lỗ</li>
                            <li>Email:  stu.edu.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>HỖ TRỢ KHÁCH HÀNG</h6>
                        <ul>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Chính sách ưu đãi</a></li>
                            <li><a href="#">Chính sách chiết khấu</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <h6>CHÍNH SÁCH</h6>
                        <ul>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Chính sách giao hàng</a></li>
                            <li><a href="#">Chính sách đổi trả</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-16">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Lùm Xùm</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="{{url('public')}}/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/frontend/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/frontend/js/jquery.nice-select.min.js"></script>
    <script src="{{url('public')}}/frontend/js/jquery-ui.min.js"></script>
    <script src="{{url('public')}}/frontend/js/jquery.slicknav.js"></script>
    <script src="{{url('public')}}/frontend/js/mixitup.min.js"></script>
    <script src="{{url('public')}}/frontend/js/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/frontend/js/main.js"></script>




</body>
</html>