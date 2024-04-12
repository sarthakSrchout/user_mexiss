@extends('User.bin.upper')
@section('title')
    Product Details
@endsection

<style>
    @media only screen and (max-width: 991px) {
        .tickposition {
            position: absolute;
            top: 12%;
            left: 14%;
        }

        .ordercardpadding {
            display: flex;
            padding: 0px 0px
        }

        .imageheight {
            height: 180px;
        }

        .returnbutton {
            background: white;
            border: 1px solid grey;
            font-size: 12px;
            padding: 3px 17px;
            margin-top: -5px;
        }

        .prdtitle {
            font-size: 13.5px
        }

        .returntext {
            font-size: 12px;
            color: black;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .tickposition {
            position: absolute;
            top: 12%;
            left: 10%;
        }

        .ordercardpadding {
            display: flex;
            padding: 25px 55px
        }

        .imageheight {
            height: 200px;
        }

        .returnbutton {
            background: white;
            border: 1px solid grey;
            font-size: 13px;
            padding: 3px 17px;
            width: 100px
        }

        .returntext {
            font-size: 13px;
            color: black;
        }
    }
</style>

@section('body')
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Orders</p>
        </div>

    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center" style="flex: 1">
                    <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                    <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">My Order</p>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('logo/profile-1.png') }}" style="height: 40px;border-radius: 50%" alt="">
                    <div>
                        <p class="mt-3 ms-4" style="font-size: 14px">Account</p>
                        <p class="ms-4" style="font-size: 14px;color:grey;margin-top: -15px;">XYZ</p>
                    </div>

                </div>
            </div>
        </div>
        <hr>

    </div>
    <div class="container mt-4 mt-lg-0">
        <div class="row">
            <div class="col-12 d-lg-flex">
                <div class="d-flex align-items-center order-2 order-lg-1" style="flex: 1">
                    <div>
                        <p class=" " style="font-size: 14px;font-weight: 600">All Orders</p>
                        <p class="" style="font-size: 14px;color:grey;margin-top: -15px;">From Anytime</p>
                    </div>

                </div>
                <div class="col-12 col-lg-5 order-1 order-lg-2">
                    <div class="d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                <img src="{{ asset('logo/search.png') }}" alt="" height="18px">
                            </span>
                            <input type="tel"
                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                class="form-control shadow-none" placeholder="Search in Order" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="ms-4">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="button btn button-background" style="width: 80px">Filter</button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 mx-auto mt-3">
                <div class="card" style="border-radius: 0px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-11 mx-auto mb-4">
                                <div class="d-flex">
                                    <div
                                        style="width: 45px;height:45px;border-radius:50%;background: black;align-items: center;
                                        justify-content: center;
                                        display: flex;">
                                        <img src="{{ asset('logo/package.png') }}" height="30px" alt="">
                                        <div class="tickposition" style=" ">
                                            <img src="{{ asset('logo/tick.png') }}" height="18px" alt="">

                                        </div>
                                    </div>
                                    <div class="ms-lg-5 ms-4">
                                        <h6 style="color: rgb(31, 226, 54)">Delivered</h6>
                                        <p style="font-size: 12px">On Fri, 20th Oct</p>
                                    </div>
                                </div>

                                <div class="card " style="border: 0;border-radius: 0;background: #F4F4F4">
                                    <div class="card-body ordercardpadding mt-2 mt-lg-0" style="">
                                        <img src="{{ asset('logo/productdetails.png') }}" class="imageheight"
                                            alt="">
                                        <div class="ms-3 ms-lg-5" style="flex: 1">
                                            <h6 class="prdtitle">REDFORD CB-16 COLD BOX</h6>
                                            <p style="font-size: 13px;color:black;font-weight:500" class="mt-lg-3 ">Rs
                                                6766
                                            </p>
                                            <p style="font-size: 13px;color:black;margin-top:-13px">Seller : REDFORD</p>

                                            <div class="d-flex mt-lg-2">
                                                <button class="returnbutton" style="">Exchange</button>
                                                <button class="ms-3 returnbutton">Return</button>
                                            </div>
                                            <div class="d-flex mt-lg-3 mt-2">
                                                <img src="{{ asset('logo/got.png') }}" height="10px" class="mt-1"
                                                    alt="">
                                                <p class="ms-2 returntext">Exchange/ Return
                                                    available till 29th December.</p>
                                            </div>

                                            <p class="" style="font-size: 13px;color:black;margin-top: -5px;">Rate the product <img
                                                    src="{{ asset('logo/stars.png') }}" height="20px" alt="">
                                            </p>

                                        </div>
                                        <div class="largeflexscreen"
                                            style="align-items: center;
                                                justify-content: center;
                                                display: flex;
                                                    ">
                                            <button
                                                style="height: 35px;width: 35px;border-radius:50%;border:0;background: #FF4545;align-items: center;
                                            justify-content: center;
                                            display: flex;" >
                                                <img src="{{ asset('logo/arrow-1.png') }}" alt=""
                                                    class="ms-1"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="col-12 mx-auto mt-3">
                <div class="card" style="border-radius: 0px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-11 mx-auto mb-4">
                                <div class="d-flex">
                                    <div
                                        style="width: 45px;height:45px;border-radius:50%;background: black;align-items: center;
                                        justify-content: center;
                                        display: flex;">
                                        <img src="{{ asset('logo/package.png') }}" height="30px" alt="">
                                        <div class="tickposition" style=" ">
                                            <img src="{{ asset('logo/tick.png') }}" height="18px" alt="">

                                        </div>
                                    </div>
                                    <div class="ms-lg-5 ms-4">
                                        <h6 style="color: rgb(31, 226, 54)">Delivered</h6>
                                        <p style="font-size: 12px">On Fri, 20th Oct</p>
                                    </div>
                                </div>

                                <div class="card " style="border: 0;border-radius: 0;background: #F4F4F4">
                                    <div class="card-body ordercardpadding mt-2 mt-lg-0" style="">
                                        <img src="{{ asset('logo/productdetails.png') }}" class="imageheight"
                                            alt="">
                                        <div class="ms-3 ms-lg-5" style="flex: 1">
                                            <h6 class="prdtitle">REDFORD CB-16 COLD BOX</h6>
                                            <p style="font-size: 13px;color:black;font-weight:500" class="mt-lg-3 ">Rs
                                                6766
                                            </p>
                                            <p style="font-size: 13px;color:black;margin-top:-13px">Seller : REDFORD</p>

                                            <div class="d-flex mt-lg-2">
                                                <button class="returnbutton" style="">Exchange</button>
                                                <button class="ms-3 returnbutton">Return</button>
                                            </div>
                                            <div class="d-flex mt-lg-3 mt-2">
                                                <img src="{{ asset('logo/got.png') }}" height="10px" class="mt-1"
                                                    alt="">
                                                <p class="ms-2 returntext">Exchange/ Return
                                                    available till 29th December.</p>
                                            </div>

                                            <p class="" style="font-size: 13px;color:black;margin-top: -5px;">Rate the product <img
                                                    src="{{ asset('logo/stars.png') }}" height="20px" alt="">
                                            </p>

                                        </div>
                                        <div class="largeflexscreen"
                                            style="align-items: center;
                                                justify-content: center;
                                                display: flex;
                                                    ">
                                            <button
                                                style="height: 35px;width: 35px;border-radius:50%;border:0;background: #FF4545;align-items: center;
                                            justify-content: center;
                                            display: flex;" >
                                                <img src="{{ asset('logo/arrow-1.png') }}" alt=""
                                                    class="ms-1"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="col-12 mx-auto mt-3">
                <div class="card" style="border-radius: 0px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-11 mx-auto mb-4">
                                <div class="d-flex">
                                    <div
                                        style="width: 45px;height:45px;border-radius:50%;background: black;align-items: center;
                                        justify-content: center;
                                        display: flex;">
                                        <img src="{{ asset('logo/package.png') }}" height="30px" alt="">
                                        <div class="tickposition" style=" ">
                                            <img src="{{ asset('logo/tick.png') }}" height="18px" alt="">

                                        </div>
                                    </div>
                                    <div class="ms-lg-5 ms-4">
                                        <h6 style="color: rgb(31, 226, 54)">Delivered</h6>
                                        <p style="font-size: 12px">On Fri, 20th Oct</p>
                                    </div>
                                </div>

                                <div class="card " style="border: 0;border-radius: 0;background: #F4F4F4">
                                    <div class="card-body ordercardpadding mt-2 mt-lg-0" style="">
                                        <img src="{{ asset('logo/productdetails.png') }}" class="imageheight"
                                            alt="">
                                        <div class="ms-3 ms-lg-5" style="flex: 1">
                                            <h6 class="prdtitle">REDFORD CB-16 COLD BOX</h6>
                                            <p style="font-size: 13px;color:black;font-weight:500" class="mt-lg-3 ">Rs
                                                6766
                                            </p>
                                            <p style="font-size: 13px;color:black;margin-top:-13px">Seller : REDFORD</p>

                                            <div class="d-flex mt-lg-2">
                                                <button class="returnbutton" style="">Exchange</button>
                                                <button class="ms-3 returnbutton">Return</button>
                                            </div>
                                            <div class="d-flex mt-lg-3 mt-2">
                                                <img src="{{ asset('logo/got.png') }}" height="10px" class="mt-1"
                                                    alt="">
                                                <p class="ms-2 returntext">Exchange/ Return
                                                    available till 29th December.</p>
                                            </div>

                                            <p class="" style="font-size: 13px;color:black;margin-top: -5px;">Rate the product <img
                                                    src="{{ asset('logo/stars.png') }}" height="20px" alt="">
                                            </p>

                                        </div>
                                        <div class="largeflexscreen"
                                            style="align-items: center;
                                                justify-content: center;
                                                display: flex;
                                                    ">
                                            <button
                                                style="height: 35px;width: 35px;border-radius:50%;border:0;background: #FF4545;align-items: center;
                                            justify-content: center;
                                            display: flex;" >
                                                <img src="{{ asset('logo/arrow-1.png') }}" alt=""
                                                    class="ms-1"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          


        </div>
    </div>



    {{-- //filter modal --}}
    <div class="modal fade" style="z-index: 999999" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="row">

                    <div class="col-12  ">
                        <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                            <div class="d-flex"
                                style="width: 100%;
                            align-items: center;
                            justify-content: space-between;">


                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                        <div class="modal-body" style="padding: 0px 40px">
                            <form>
                                <h6 class="modal-title mb-3" id="exampleModalLabel"
                                    style="color: #000000;font-weight: 600;">Filter Orders</h6>
                                <div style="font-size: 14px;">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        On the Way
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Delivered
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Cancel
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Refund
                                    </label>
                                </div>
                                <hr>
                                <h6 class="modal-title mb-4" id="exampleModalLabel"
                                    style="color: #000000;font-weight: 600;flex:1">Time</h6>
                                <div style="font-size: 14px;">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Any Time
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Last 30 days
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Last 6 Months
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for=""
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="payment" id="" class="me-3">
                                        Last year
                                    </label>
                                </div>

                                <div class="d-flex row mt-3 mb-4">
                                    <div class="col-6">
                                        <button class="w-100"
                                            style="border: 1px solid grey;font-size:13px;background: white;padding: 5px;font-weight: 600">Clear
                                            Filter</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="w-100 text-light"
                                            style="border: 1px solid rgb(255, 255, 255);font-size:13px;background: #FF4545;padding: 5px;font-weight: 600">Apply</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
