@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        .card-input-element {
            display: none;

        }

        .card-input {
            box-shadow: 0px 0px 4px 0px #dbdbdb
        }

        .card-input-element:checked+.card-input {
            box-shadow: 0px 0px 3px 0px #FF4545
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
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
    style="top: 0;position:sticky;z-index:101001;">

    <div class="d-flex align-items-center" style="height: 80px">
        <a href="{{ route('user-address') }}">
            <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

        </a>
        <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Cart </p>
    </div>


</nav>
<div class="container ">
    <div class="row mt-2 mb-2">
        <div class="col-12 d-flex" style="justify-content: space-between">
            <div class="d-flex align-items-center largeflexscreen">
                <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545">Select Payment Method</p>
            </div>
            <div class="d-flex align-items-center">
                <p class="mt-3 ms-4 me-1" style="font-size: 16px;">Cart</p>
                <p class="mt-3">--------------</p>
                <p class="mt-3 me-1 ms-1" style="font-size: 16px">Address</p>
                <p class="mt-3">--------------</p>
                <p class="mt-3 ms-1" style="font-size: 16px;color:#FF4545;text-decoration:underline ">Payment</p>

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

    <div class="container-fluid"
        style="border-top: .5px solid rgb(181, 181, 181);border-bottom: .5px solid rgb(181, 181, 181) ">
        <div class="row">
            <div class="col-lg-7 col-12 mt-5 mb-5 largeborder"
                style="">
                <div class="row">
                    <div class="col-11 col-lg-5 mx-auto">
                        <h6 style="color: #FF4545" class="mb-4">Choose Payment Method</h6>
                        <div style="font-size: 14px;" class="mt-2">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Cash on Delivery
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                PhonePe / Google Pay / BHIM / UPI
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Credit/Debit Card
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Paytm/Wallets
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Net Banking
                            </label>
                        </div>
                   
                      
                    </div>
                </div>
               
            </div>
            <div class="col-lg-5 col-12 mt-lg-5  mb-5">
                <div
                    style="text-align: center;
                    justify-content: center;
                    display: flex;">
                    <h6>Price Details</h6>
                </div>
                <div
                    style="text-align: center;
                    justify-content: center;
                    display: flex;">
                    <div class=""
                        style="    width: 150px;
                        height: 1px;
                        background: black;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto mt-lg-5 mt-5">
                        <div class="d-flex ">
                            <p style="font-size: 14px;flex-grow:1">Price(1 item)</p>
                            <p style="font-size: 14px;font-weight: 600">Rs 2443</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Discount</p>
                            <p style="font-size: 14px;font-weight: 600">-Rs 2443</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Delivery Charges</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-success">Rs 2443</p>
                        </div>
                        <div class="mt-3"
                            style="    width: 100%;
                        height: 1px;
                        background: black;">
                        </div>
                        <div class="d-flex mt-3">
                            <p style="font-size: 14px;flex-grow:1;font-weight:600">Total Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-dark">Rs 2443</p>
                        </div>
                        <button class="btn mt-2  homeparagraph w-100 text-light button-background"
                            style="border-radius: 0px;" type="button">Continue</button>
                    </div>
                </div>
            </div>
        </div>

    </div>





    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
