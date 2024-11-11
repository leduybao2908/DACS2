@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumbs">
                <li>
                    <a href="{URL::to('/')}">Trang chủ</a>
                </li>
                <li class="active">Thanh toán giỏ hàng</li>
            </ol>
        </div>
        <div class="register-req">
            <p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
    
        </div>
        <div class="shopper-informations"> 
            <div class="row">
                <style type="text/css"> .col-md-6.form-style input[type=text] {margin: 5px 0;
                }</style>
                <div class="col-md-12 clearfix">
                    <div class="bill-to">
                        <p>Điền thông tin gửi hàng</p>
                        <div class="col-md-6 form-style">
                            <form method="POST">
                                @csrf
                                <input type="text" name="shipping_email" class="shipping_email form.control" placeholder="Điền email">
                                <input type="text" name="shipping_name" class="shipping_name form.control" placeholder="Họ và tên người gửi">
                                <input type="text" name="shipping_address" class="shipping_address form.control" placeholder="Địa chỉ gửi hàng">
                                <input type="text" name="shipping_phone" class="shipping_phone form.control" placeholder="Số điện thoại">
                                <textarea name="shipping_notes form-control" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>

                                @if(Session::get('fee'))
                                <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
                                @else
                                <input type="hidden" name="order_fee" class="order_fee" value="10000">
                                @endif
                                @if(Session::get('coupon'))
                                @foreach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>