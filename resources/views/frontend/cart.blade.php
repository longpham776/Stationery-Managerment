@extends('frontend.masterview')
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="public/frontend/img/banner.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>GIỎ HÀNG</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Trang Chủ</a>
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        @php $content=Cart::content(); $i=1 @endphp
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th></th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $sp)
                                <tr>
                                    <td class="shoping__cart__item">
                                    <a href="{{route('product_detail',['id'=>$sp->id])}}"><img src="public/frontend/img/product/{{$sp->options->images}}" alt=""></a>
                                        <h5><a href="{{route('product_detail',['id'=>$sp->id])}}"><font color="black">{{$sp->name}}</font></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        ${{number_format($sp->price)}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$sp->qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('upcart',['id'=>$sp->id,'qty'=>$sp->qty])}}" class="fa fa-retweet">
                                    </td>
                                    <td class="shoping__cart__total">
                                        $ @php $total=$sp->price*$sp->qty; echo number_format($total); @endphp
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{route('delcart',['id'=>$sp->rowId])}}" class="icon_close"></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('category')}}" class="primary-btn cart-btn">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <form action="#">
                                <input type="hidden">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng tiền</h5>
                        <ul>
                            <li>Subtotal <span>${{Cart::subtotal()}}</span></li>
                            <li>Total <span>${{Cart::pricetotal()}}</span></li>
                        </ul>
                        <a href="{{route('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@stop()