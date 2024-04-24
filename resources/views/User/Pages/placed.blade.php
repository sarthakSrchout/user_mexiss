@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex " style="align-items: center;justify-content:center;flex-direction:column">
                <h3 class="mt-5" style="color: #85ed29">Order Placed Successfully!</h3>
                <img src="{{ asset('logo/orderplaced.png') }}" class="img-fluid d-flex " style="width: 40%"  alt="">
                <a href="{{ route('user-homepage') }}" style="    width: fit-content;
                background: #85ed29;
                padding: 12px 28px;
               
                text-decoration: none;
                color: white;
                font-weight: 600;">Continue Shopping</a>
            </div>
        </div>
    </div>
@endsection
