@extends('frontend.masterview')
<!-- Categories Section Begin -->
@section('content')
<section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="public/frontend/img/categories/ca-1.jpg">
                            <h5><a href="{{route('category')}}">Văn phòng phẩm</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="public/frontend/img/categories/ca-2.jpg">
                            <h5><a href="{{route('category')}}">Văn phòng phẩm</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="public/frontend/img/categories/ca-3.jpg">
                            <h5><a href="{{route('category')}}">Văn phòng phẩm</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="public/frontend/img/categories/ca-4.png">
                            <h5><a href="{{route('category')}}">Văn phòng phẩm</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="public/frontend/img/categories/ca-5.png">
                            <h5><a href="{{route('category')}}">Văn phòng phẩm</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".quatang">Quà tặng</li>
                            <li data-filter=".vanphongpham">Văn phòng phẩm</li>
                            <li data-filter=".phukien">Phụ kiện điện thoại</li>
                            <li data-filter=".gaubong">Gấu bông</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">          
<!--Văn phòng phẩm-->
            @foreach($getVpp as $vpp) 
            <div class="col-lg-3 col-md-4 col-sm-6 mix vanphongpham">
                <div class="featured__item">
                <form action="{{route('postcart')}}" method="POST">
                @csrf   
                <input type="hidden" name="soluong" value="1">
                <input type="hidden" name="masp" value="{{$vpp->masanpham}}"/>    
                    <a href="{{route('product_detail',['id'=>$vpp->masanpham])}}">
                    <div class="featured__item__pic set-bg" data-setbg="public/frontend/img/product/{{$vpp->hinh}}">
                        <ul class="featured__item__pic__hover">
                        <li><button type="" class="fa fa-heart"></button></li>
                        <li><button type="" class="fa fa-retweet"></button></li>
                        <li><button type="submit" class="fa fa-shopping-cart"></button></li>
                        </ul>
                    </div>
                    </a>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$vpp->masanpham])}}">{{$vpp->tensanpham}}</a></h6>
                        <h5>${{$vpp->gia}}</h5>
                    </div>
                </form>
                </div>
            </div>
            @endforeach
<!--end văn phòng phẩm-->
<!--quà tặng-->
            @foreach($getQt as $qt)    
            <div class="col-lg-3 col-md-4 col-sm-6 mix quatang">
                <div class="featured__item">
                <form action="{{route('postcart')}}" method="POST">
                @csrf   
                <input type="hidden" name="soluong" value="1">
                <input type="hidden" name="masp" value="{{$qt->masanpham}}"/>   
                <a href="{{route('product_detail',['id'=>$vpp->masanpham])}}"> 
                    <div class="featured__item__pic set-bg" data-setbg="public/frontend/img/product/{{$qt->hinh}}">
                        <ul class="featured__item__pic__hover">
                            <li><button type="" class="fa fa-heart"></button></li>
                            <li><button type="" class="fa fa-retweet"></button></li>
                            <li><button type="submit" class="fa fa-shopping-cart"></button></li>
                        </ul>
                    </div>
                </a>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$qt->masanpham])}}">{{$qt->tensanpham}}</a></h6>
                        <h5>${{$qt->gia}}</h5>
                    </div>
                </form>
                </div>
            </div>
            @endforeach
<!--end quà tặng-->
<!--Phụ kiện điện thoại-->
            @foreach($getPkdt as $pkdt)
            <div class="col-lg-3 col-md-4 col-sm-6 mix phukien">
                <div class="featured__item">
                <form action="{{route('postcart')}}" method="POST">
                @csrf   
                <input type="hidden" name="soluong" value="1">
                <input type="hidden" name="masp" value="{{$pkdt->masanpham}}"/>   
                <a href="{{route('product_detail',['id'=>$vpp->masanpham])}}"> 
                    <div class="featured__item__pic set-bg" data-setbg="public/frontend/img/product/{{$pkdt->hinh}}">
                        <ul class="featured__item__pic__hover">
                            <li><button type="" class="fa fa-heart"></button></li>
                            <li><button type="" class="fa fa-retweet"></button></li>
                            <li><button type="submit" class="fa fa-shopping-cart"></button></li>
                        </ul>
                    </div>
                </a>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$pkdt->masanpham])}}">{{$pkdt->tensanpham}}</a></h6>
                        <h5>${{$pkdt->gia}}</h5>
                    </div>
                </form>
                </div>
            </div>
            @endforeach
<!--end phụ kiện điện thoại-->  
<!--Gấu bông-->       
            @foreach($getGb as $gb)       
            <div class="col-lg-3 col-md-4 col-sm-6 mix gaubong">
                <div class="featured__item">
                <form action="{{route('postcart')}}" method="POST">
                @csrf   
                <input type="hidden" name="soluong" value="1">
                <input type="hidden" name="masp" value="{{$gb->masanpham}}"/>  
                <a href="{{route('product_detail',['id'=>$vpp->masanpham])}}">  
                    <div class="featured__item__pic set-bg" data-setbg="public/frontend/img/product/{{$gb->hinh}}">
                        <ul class="featured__item__pic__hover">
                            <li><button type="" class="fa fa-heart"></button></li>
                            <li><button type="" class="fa fa-retweet"></button></li>
                            <li><button type="submit" class="fa fa-shopping-cart"></button></li>
                        </ul>
                    </div>
                </a>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$gb->masanpham])}}">{{$gb->tensanpham}}</a></h6>
                        <h5>${{$gb->gia}}</h5>
                    </div>
                </form>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="public/frontend/img/banner/banner1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="public/frontend/img/banner/banner2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
@stop()