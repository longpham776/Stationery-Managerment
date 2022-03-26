@extends('frontend.masterview')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="public/frontend/img/banner.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>THANH TOÁN</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    @php $content=Cart::content(); @endphp
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Thông Tin Hóa Đơn</h4>
                <form action="{{route('postcheckout')}}" method="POST"> 
                    @csrf 
                    @php foreach($_SESSION['user'] as $a){  
                        $fullname=explode(' ', $a->hotenkhachhang); 
                        $last_name = $fullname[count($fullname)-1];
                        $first_name=array_shift($fullname);
                        $middleName = implode(" ", $fullname);
                    } @endphp
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ Tên Lót<span>*</span></p>
                                        <input type="text" value="{{$first_name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input type="text" value="{{$last_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" name="diachi">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" value="@php foreach($_SESSION['user'] as $a){echo $a->sdt;} @endphp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" value="@php foreach($_SESSION['user'] as $a){echo $a->email;} @endphp">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Chú thích đơn hàng<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach($content as $sp)
                                    <li>{{$sp->name}}<span>$@php $total=$sp->price*$sp->qty; echo number_format($total); @endphp</span></li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>${{Cart::subtotal()}}</span></div>
                                <div class="checkout__order__total">Total <span>${{Cart::subtotal()}}</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@stop()