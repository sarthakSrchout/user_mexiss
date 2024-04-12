@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        @media only screen and (max-width: 991px) {
            .cattitle {
                z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 13%;
                color: white;
                font-size: 25px;
            }

            .catimage {
                height: 150px;
            }

            .catmarginb {
                margin-bottom: 8%
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .cattitle {
                z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 6%;
                color: white;
                font-size: 30px;
            }

            .catimage {
                height: 200px;
            }

            .catmarginb {
                margin-bottom: 6%
            }
        }
    </style>


    @include('User.bin.navBar.navBar')

    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">Shop By Categories</p>
        </div>


    </nav>
    <div class="container-fluid catmarginb" style="">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ asset('logo/shop.png') }}" class="w-100 catimage" style="position: absolute">
                <h6 class="cattitle" style="">
                    Shop By Our Categories</h6>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">

            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6  mt-5">
                <div class="card-body categoryCard">
                    <div style="width: 100%">
                        <img src="{{ asset('logo/induction.png') }}" style="width: 100%" class="categoryImage"
                            alt="">
                        <div class="categoryImageTitle " style="padding: 8px 13px">
                            <h6 style="font-size: 14px" class="text-light">Core Machine</h6>
                            <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                    class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                    height="9px"></p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
