    @extends('User.bin.upper')
    @section('title')
        Product
    @endsection


    @section('body')
        <style>
            .price-range-slider {
                width: 100%;
                float: left;
                padding: 10px 20px;
            }

            .price-range-slider .range-value {
                margin: 0;
            }

            .price-range-slider .range-value input {
                width: 100%;
                background: none;
                color: #000;
                font-size: 16px;
                font-weight: initial;
                box-shadow: none;
                border: none;
                margin: 20px 0 20px 0;
            }

            .price-range-slider .range-bar {
                background: #ffffff;
                height: 5px;
                width: 96%;
                margin-left: 8px;
                box-shadow: 0px 0px 20px 0px rgb(216, 216, 216)
            }

            .price-range-slider .range-bar .ui-slider-range {
                background: #FF4545;
            }

            .price-range-slider .range-bar .ui-slider-handle {
                border: none;
                border-radius: 25px;
                background: #fff;
                border: 2px solid #FF4545;
                height: 17px;
                width: 17px;
                top: -0.52em;
                cursor: pointer;
            }

            .price-range-slider .range-bar .ui-slider-handle+span {
                background: #FF4545;
            }

            /*--- /.price-range-slider ---*/
        </style>

        <div id="maindivproduct" style="display: block">
            @include('User.bin.navBar.navBar')
            <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
                style="top: 0;position:sticky;z-index:101001;">

                <div class="d-flex align-items-center" style="height: 80px">
                    <a href="{{ route('user-homepage') }}">
                        <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

                    </a>
                    <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600;flex:1">Products </p>
                    <a href="">
                        <img src="{{ asset('logo/search1.png') }}" alt="">

                    </a>
                    <a href="{{ route('user-cart') }}" class="ms-3 me-4">
                        <img src="{{ asset('logo/cart1.png') }}" alt="">

                    </a>
                </div>


            </nav>
            <div class="container">
                <div class="row mt-4 largescreen">
                    <div class="col-12 d-flex align-items-center ">
                        <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                        <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                        <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                        <p class="mt-3 ms-" style="font-size: 14px;color:#FF4545;flex:1">Products</p>
                        <div class="col-4">
                            <div class="input-group">

                                <input type="text" class="form-control shadow-none"
                                    aria-label="Text input with segmented dropdown button"
                                    placeholder="Enter Product/Service Name" style="border-radius: 0px;font-size:12px">
                                <button class="btn homeparagraph text-light button-background" style="border-radius: 0px;"
                                    type="button">Search</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3 largescreen">
                        <div class="card shadow me-4" style="border-radius: 0px;border:0;height:420px">
                            <div class="card-body p-4">
                                <h5>Categories</h5>
                                <div class="mb-4" style="border: 2px solid red;border-radius: 10px; "></div>
                                <style>
                                    .hidescrollbar::-webkit-scrollbar {
                                        width: 0;
                                    }
                                </style>

                                <div class="hidescrollbar" style="height: 300px;overflow:hidden;overflow-y: auto;">
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background-image: linear-gradient(to left, #ff4545, #fe574f, #fd6659, #fc7363, #fa806e) !important;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: white">
                                            Core Machine
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div
                                            style=" background:white;
                                            padding: 3.5px 15px;
                                            font-size: 13px;
                                            color: rgb(0, 0, 0)">
                                            Sand Mullar
                                        </div>
                                        <div style="flex: 1"></div>
                                        <span style="font-weight: 500;font-size:13px">23</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mt-5 me-4 p-2" style="border-radius: 0px;border:0;">
                            <div class="card-body p-4">
                                <h5>Price</h5>
                                <div class="d-flex" style="align-items: center;text-align: center">
                                    <div class="" style="border: 2px solid red;border-radius: 10px;width:100px ">
                                    </div>
                                    <div style="flex: 1"></div>
                                    <a style="color: #FF4545;text-decoration: none;font-size:14px"
                                        href="">Clear</a>
                                </div>
                                <div class="d-flex mt-3" style="justify-content: space-between">
                                    <select name="" id="initiallimit" style="padding: 1px;font-size:14px">
                                        <option value="" selected disabled>Rs. 5000</option>
                                    </select>
                                    <select name="" id="endlimit" style="padding: 1px;font-size:14px">
                                        <option value="" selected disabled>Rs .30942</option>
                                    </select>
                                </div>
                                <div class="price-range-slider mt-4">

                                    <div id="slider-range" class="range-bar"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="d-flex largeflexscreen"
                            style="    justify-content: space-between;font-size:13px;
                            align-items: center;">
                            <div class="ms-5">523 Items</div>
                            <div c>
                                Sort By:
                                <select name="" id="" style="padding: 2px">
                                    <option value="" selected disabled>Featured</option>
                                </select>
                            </div>
                            <div>
                                View:
                                <img src="{{ asset('logo/view-1.png') }}" style="height: 17px" class="ms-3"
                                    alt="">
                                <img src="{{ asset('logo/view-2.png') }}" style="height: 17px" class="ms-2"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mt-lg-4">
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 mt-3 ">
                                <a href="{{ route('user-productdetails') }}" style="text-decoration: none;color:black">
                                    <div class="card productCardData" style="border-radius: 0px">
                                        <div class="card-body">
                                            <img src="{{ asset('logo/productImage.png') }}" class="card-img-top "
                                                style="border-radius:0px;height:150px" alt="">
                                            <h6 style="font-size: .85rem" class="mt-2">REDFORD CB-16 COLD BOX</h6>
                                            <h6 style="font-size: .75rem" class="mt-1">Rs. 3570</h6>
                                            <img src="{{ asset('logo/stars.png') }}" alt=""><span
                                                style="font-size: .7rem" class="text-bold ms-1">(5)</span>
                                            <div class="d-flex">
                                                <a href="" class="button mt-2 button-background d-flex"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex
                                            height:32px;font-size:10px">
                                                    View Details

                                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1"
                                                        height="9px" alt="">
                                                </a>
                                                <a href="" class="button secondary-color  mt-2 ms-2"
                                                    style="align-items:center;align-items: center;
                                            width: 50%;
                                            justify-content: center;
                                            display: flex;
                                            height:32px;font-size:10px">
                                                    Contact Us
                                                    <img src="{{ asset('logo/call.png') }}" class="ms-1"
                                                        height="11px" alt="">

                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>




                        </div>
                    </div>
                    <div class="row mt-5 " style="margin-bottom: 80px">
                        <div class="col-lg-3"></div>
                        <div class="col-7 d-flex mx-auto" style="justify-content: center">
                            <h6 class="ms-5">1</h6>
                            <h6 class="ms-3">2</h6>
                            <h6 class="ms-3">3</h6>
                            <h6 class="ms-3">4</h6>
                            <h6 class="ms-3">5</h6>
                        </div>
                        <div class="col-2 largeflexscreen" style="display:flex;justify-content: end">

                            <a href="" class="button mt-2 button-background float-right"
                                style="padding: 7px 10px!important;font-size:13px;    align-items: center;
                            display: flex;
                        ">
                                Next Page

                                <img src="{{ asset('logo/arrow-1.png') }}" class="ms-2" height="11px"
                                    alt="">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 secondary-color p-0 shadow smallscreen"
                id="navbar"
                style="bottom: 0; position: fixed; z-index: 101001; background: #FF4545 !important;display:block">

                <div class="row p-2 mt-1">
                    <div class="col-6 d-flex align-items-center" onclick="toggleSort()"
                        style="align-items: center; justify-content: center; border-right: 3px solid rgb(232, 232, 232); cursor: pointer;">

                        <h6 class="text-light"><img src="{{ asset('logo/sort.png') }}" alt=""
                                class="me-2">Sort
                        </h6>
                    </div>
                    <div class="col-6 d-flex" style="align-items: center; justify-content: center;cursor: pointer;"
                        onclick="toggleFilter()">
                        <h6 class="text-light"><img src="{{ asset('logo/filter.png') }}" alt=""
                                class="me-2">Filter
                        </h6>

                    </div>
                </div>

            </nav>
            <div id="sortDiv" class="p-3"
                style="display: none; position: fixed; bottom: 45px; left: 0; width: 100%; background: #fff; border-top: 1px solid #ccc;">
                <!-- Add your sorting options here -->
                <ul style="list-style: none">
                    <li style="color: grey;font-weight:600">Sort By</li>
                    <hr>
                    <li style="font-size: 13px" class="mt-2">What's New</li>
                    <li style="font-size: 13px" class="mt-2">Price- High to Low</li>
                    <li style="font-size: 13px" class="mt-2">Price- Low to High</li>
                    <li style="font-size: 13px" class="mt-2">Popularity</li>
                    <li style="font-size: 13px" class="mt-2">Customer Ratings</li>
                    <!-- Add more options as needed -->
                </ul>
            </div>
        </div>

        <div class="largescreen" style="margin-top: 6%">
            <hr>
        </div>

        @include('User.Pages.recommendation')

        {{-- footer section --}}
        <div class="largescreen">
            @include('User.bin.footer.footer')

        </div>

        {{-- FilterScreen --}}
        <div id="filterscreen" style="display: none;width: 100%">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-12 p-0 m-0">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color w-100 p-0 shadow smallscreen" style="position:fixed; top:0; z-index:1021321321001; background:white!important">
                            <div class="d-flex align-items-center" style="height: 60px">
                                <p class="mt-3 ms-3" style="font-size: 14.5px;color:#000000;font-weight:600;flex:1">
                                    Filters
                                </p>
                                <a href="" style="color: #ff4545;font-size:12px;font-weight:600" class="me-3">
                                    CLEAR ALL
                                </a>
                            </div>
                        </nav>
                        
                    </div>
                    <div class="row p-0 " style="margin-top: 60px">
                        <div class="col-4" style="background: #fbf2f2;min-height:100vh;max-height: fit-content">
                            <ul style="list-style: none;margin-left:-23px" class="mt-3">
                                <li class="p-2 w-100"
                                    style="font-size: 13px;color:#ffffff;font-weight:600;background: #FF4545">Brand</li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Categories
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Price Range
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Discount</li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Delivery Time
                                </li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <ul style="list-style: none;margin-left:-28px" class="mt-3">

                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="priceRangeCheckbox" name="priceRangeCheckbox">
                                    <label for="priceRangeCheckbox" class="ms-2">Price Range</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="discountCheckbox" name="discountCheckbox">
                                    <label for="discountCheckbox" class="ms-2">Discount</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="deliveryTimeCheckbox" name="deliveryTimeCheckbox">
                                    <label for="deliveryTimeCheckbox" class="ms-2">Delivery Time</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="brandCheckbox" name="brandCheckbox">
                                    <label for="brandCheckbox" class="ms-2">Brand</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 secondary-color p-0 shadow smallscreen"
                style="bottom: 0; position: fixed; z-index: 101001; background: #FF4545 !important">

                <div class="row p-2" style="height: 50px">
                    <div class="col-6 d-flex align-items-center" onclick="toggleFilter()"
                        style="align-items: center; justify-content: center; border-right: 3px solid rgb(232, 232, 232); cursor: pointer;">

                        <h6 class="text-light">Close
                        </h6>
                    </div>
                    <div class="col-6 d-flex" style="align-items: center; justify-content: center;cursor: pointer;">
                        <h6 class="text-light">Apply
                        </h6>

                    </div>
                </div>

            </nav>
        </div>
        <script>
            function toggleSort() {
                var sortDiv = document.getElementById('sortDiv');
                sortDiv.style.display = sortDiv.style.display === 'none' ? 'block' : 'none';


            }
        </script>
        <script>
            function toggleFilter() {
                var sortDiv = document.getElementById('filterscreen');
                sortDiv.style.display = sortDiv.style.display === 'none' ? 'block' : 'none';

                var maindivproduct = document.getElementById('maindivproduct');
                maindivproduct.style.display = maindivproduct.style.display === 'none' ? 'block' : 'none';

            }
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [0, 100000],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });

                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                    " - $" + $("#slider-range").slider("values", 1));
            });
        </script>
    @endsection
