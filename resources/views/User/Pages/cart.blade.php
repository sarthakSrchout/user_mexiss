@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        .quantity {
            display: flex;
            border: 1px solid grey;
            border-radius: 0px;
            overflow: hidden;
            width: 104px;
            height: 37px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .quantity button {
            background-color: #ffffff;
            color: #000000;
            border: none;
            cursor: pointer;
            font-size: 20px;
            width: 30px;
            height: auto;
            text-align: center;
            transition: background-color 0.2s;
        }

        .quantity button:hover {
            background-color: #ffffff;
        }

        .input-box {
            width: 40px;
            text-align: center;
            border: none;
            padding: 8px 10px;
            font-size: 16px;
            outline: none;
            border: 1px solid grey;
            border-top: 0px;
            border-bottom: 0px
        }

        @media only screen and (max-width: 991px) {
            .cardmt {
                margin-top: -40px;
            }

        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {

            .largeborder {
                border-right: .5px solid rgb(181, 181, 181)
            }
        }

        /* Hide the number input spin buttons */
        .input-box::-webkit-inner-spin-button,
        .input-box::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .input-box[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001;">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Cart </p>
        </div>


    </nav>
    <div class="container ">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex" style="justify-content: space-between">
                <div class="d-flex align-items-center largeflexscreen">
                    <a href="{{ route('user-homepage') }}" class="d-flex align-items-center link">
                        <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                        <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    </a>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Cart</p>
                </div>
                <div class="d-flex align-items-center">
                    <p class="mt-3 ms-4 me-1" style="font-size: 16px;color:#FF4545;text-decoration:underline">Cart</p>
                    <p class="mt-3">--------------</p>
                    <p class="mt-3 me-1 ms-1" style="font-size: 16px ">Address</p>
                    <p class="mt-3">--------------</p>
                    <p class="mt-3 ms-1" style="font-size: 16px">Payment</p>

                </div>
                <div class="d-flex align-items-center largeflexscreen">
                    <img class="ms-1" src="{{ asset('logo/shield.png') }}" height="17px" alt="">
                    <p class=" mt-3 ms-1" style="font-size: 14px;color:#313131;flex:1">100% Secure</p>
                </div>
            </div>
            <div class="col-12 smallflexscreen" style="justify-content: end">
                <div class="d-flex align-items-center smallflexscreen me-4">
                    <img class="ms-1" src="{{ asset('logo/shield.png') }}" height="17px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#313131;flex:1">100% Secure</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid mt-2"
        style="border-top: .5px solid rgb(181, 181, 181);border-bottom: .5px solid rgb(181, 181, 181) ">
        <div class="row">
            <div class="col-lg-7 col-12 mt-4 mb-lg-5 mb-0 largeborder" style="">
                <div class="row">
                    <div class="col-lg-9 col-12  mx-auto">
                        {{-- <div class="input-group   mb-3 largeflexscreen" style="height: 45px;">

                            <input type="text" class="form-control shadow-none"
                                aria-label="Text input with segmented dropdown button" placeholder="Check Availability"
                                style="border-radius: 0px;font-size:13px">
                            <button class="btn homeparagraph text-light button-background"
                                style="border-radius: 0px;width:120px" type="button">Enter Pincode</button>

                        </div> --}}
                        <div class="smallscreen mb-4"></div>

                        @if ($cart)
                            @foreach ($cart['item'] as $item)
                                <div class="card cardmt" style="border: 0px">
                                    <div class="card-body">
                                        <div class="d-flex row p-0">
                                            <div class="col-6 p-0">
                                                @if (!empty($item->product->product_images))
                                                    @php
                                                        $imageUrls = explode(',', $item->product->product_images);
                                                        $firstImageUrl = $imageUrls[0];
                                                    @endphp

                                                    <img src="{{ $firstImageUrl }}" class="img-fluid" style="height: 250px"
                                                        alt="">
                                                @endif
                                            </div>
                                            <div class="col-6 p-4" style="margin-top: -20px">
                                                <h6>{{ $item->product->product_name }}</h6>
                                                <p style="font-size: 15px;color:black;margin-top:-px">Rs.
                                                    {{ $item->discounted_price }} <del class="ms-2">Rs.
                                                        {{ $item->original_price }}</del></p>
                                                <div class="d-flex mt-4" style="height: 5px;align-items:center">
                                                    <img src="{{ asset('logo/stars.png') }}" style="margin-top:-13px"
                                                        alt="">
                                                    <p style="font-size: 13px" class="ms-2">(5)</p>
                                                </div>

                                                <p style="font-size: 13px;color:black" class="mt-2">Quantity</p>
                                                <div class="quantity">
                                                    <a href="{{ route('user-decreasecartquantity', ['cart_item_id' => $item->id]) }}"
                                                        class="input-box link" style="font-size: 21px;padding:0px"
                                                        aria-label="Decrease">&minus;</a>
                                                    <input type="number" readonly class="input-box"
                                                        value="{{ $item->quantity }}" min="1">
                                                    <a href="{{ route('user-increasecartquantity', ['cart_item_id' => $item->id]) }}"
                                                        class="input-box link" style="font-size: 21px;padding:0px"
                                                        aria-label="Increase">&plus;</a>
                                                </div>
                                                <p class="mt-3" style="font-size: 14px;color:black;margin-top:-px">
                                                    Seller :
                                                    {{ $item->product?->seller?->business_name }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif


                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 mt-lg-4 mt-0 mb-5 ">
                <div style="text-align: center;
                justify-content: center;
                display: flex;">
                    <h6>Price Details</h6>
                </div>
                <div style="text-align: center;
                justify-content: center;
                display: flex;">
                    <div class=""
                        style="    width: 150px;
                    height: 1px;
                    background: black;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto mt-lg-5 mt-3">
                        <div class="d-flex ">
                            <p style="font-size: 14px;flex-grow:1">Price({{ $cart?->no_of_products }} item)</p>
                            <p style="font-size: 14px;font-weight: 600">Rs {{ $cart?->total_original_price }}</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Total Discounted Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-success">Rs
                                {{ $cart?->total_discounted_price }}</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Discount</p>
                            <p style="font-size: 14px;font-weight: 600">
                                @if ($cart?->coupon_id)
                                    <span class="text-success">Coupon Discount
                                        (Rs.{{ $cart?->total_coupon_discount }}\-)</span>
                                @endif-Rs
                                {{ $cart?->total_original_price - $cart?->total_discounted_price + $cart?->total_coupon_discount }}

                            </p>
                        </div>

                        <div class="mt-3"
                            style="    width: 100%;
                    height: 1px;
                    background: black;">
                        </div>
                        <div class="d-flex mt-3">
                            <p style="font-size: 14px;flex-grow:1;font-weight:600">Total Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-dark">Rs
                                {{ $cart?->total_cart_value }}</p>
                        </div>
                        @if (Auth::user())
                            <a href="{{ route('user-address') }}"
                                class="btn mt-2  homeparagraph w-100 text-light button-background"
                                style="border-radius: 0px;" type="button">Continue</a>
                        @else
                            <a href="#"   data-bs-toggle="modal"
                            data-bs-target="#loginmodal"
                                class="btn mt-2  homeparagraph w-100 text-light button-background"
                                style="border-radius: 0px;" type="button">Continue</a>
                        @endif

                        <div class="input-group   mb-3  mt-4" style="height: 45px;">

                            @if (!$cart?->coupon_id)
                                <form action="{{ route('user-cartapplycoupon') }}" class="d-flex w-100">
                                    @csrf
                                    <input type="text" class="form-control shadow-none" name="coupon"
                                        aria-label="Text input with segmented dropdown button" required
                                        placeholder="Have a coupon?" style="border-radius: 0px;font-size:13px">
                                    @error('coupon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="submit" class="btn homeparagraph text-light button-background"
                                        style="border-radius: 0px;width:180px" value="Apply Coupon">
                                </form>
                            @else
                                <form action="{{ route('user-cartremovecoupon') }}" class="d-flex w-100">
                                    @csrf
                                    <input type="text" readonly disabled class="form-control shadow-none"
                                        name="coupon"
                                        value="{{ $cart?->coupon->coupon_code }} applied! (Rs.{{ $cart->total_coupon_discount }}\- off) "
                                        aria-label="Text input with segmented dropdown button" required
                                        placeholder="Have a coupon?" style="border-radius: 0px;font-size:13px">
                                    @error('coupon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="submit" class="btn homeparagraph text-light button-background"
                                        style="border-radius: 0px;width:180px" value="Remove Coupon">
                                </form>
                            @endif

                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>




    <div style="margin-top: 5%" class="largescreen">


        @include('User.Pages.recommendation')

    </div>
    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
