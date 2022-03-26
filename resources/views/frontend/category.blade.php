@extends('frontend.masterview')
@section('content')
<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
             
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <div class="latest-product__slider owl-carousel">
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>@php echo count($getsp); @endphp</span> Sản Phẩm</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($getsp as $sp)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                            <form action="{{route('postcart')}}" method="POST">
                             @csrf 
                                <a href="{{route('product_detail',['id'=>$sp->masanpham])}}">
                                <div class="product__item__pic set-bg" data-setbg="public/frontend/img/product/{{$sp->hinh}}">
                                    <ul class="product__item__pic__hover">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="masp" value="{{$sp->masanpham}}"/>
                                        <li><button type="submit" class="fa fa-heart"></button></li>
                                        <li><button type="submit" class="fa fa-retweet"></button></li>
                                        <li><button type="submit" class="fa fa-shopping-cart" name="addcart" value="addcart"></button></li>
                                    </ul>
                                </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="{{route('product_detail',['id'=>$sp->masanpham])}}">{{$sp->tensanpham}}</a></h6>
                                    <h5>$ {{$sp->gia}}</h5>
                                </div>
                            </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product__pagination">
                        <!-- <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@stop()