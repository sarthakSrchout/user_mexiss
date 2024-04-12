@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001;">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-product') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600;flex:1">Products Details</p>
            <a href="">
                <img src="{{ asset('logo/search1.png') }}" alt="">

            </a>
            <a href="{{ route('user-cart') }}" class="ms-3 me-4">
                <img src="{{ asset('logo/cart1.png') }}" alt="">

            </a>
        </div>



    </nav>
    <style>
        .getquotesbutton {
            background-image: linear-gradient(to right, #8d8585, #82787d, #716c77, #5c6370, #455a64);
            font-size: 13px;
            font-weight: 600;
            color: white;
            padding: 5px 70px;
            border-radius: 0px;
            border: 1px
        }

        .smallimagescreen {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            .imagescroll {
                display: none !important
            }

            .smallimagescreen {
                display: block;
            }
        }
    </style>
    <div class="container largescreen">
        <div class="row mt-4">
            <div class="col-12 d-flex align-items-center ">
                <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Products</p>
                <div class="col-4">
                    <div class="input-group">

                        <input type="text" class="form-control shadow-none"
                            aria-label="Text input with segmented dropdown button" placeholder="Enter Product/Service Name"
                            style="border-radius: 0px;font-size:12px">
                        <button class="btn homeparagraph text-light button-background" style="border-radius: 0px;"
                            type="button">Search</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-4">

        <div class="row">
            <div class="col-5 mx-auto imagescroll">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('logo/productdetails.png') }}" height="66px" alt="">
                        <img src="{{ asset('logo/productdetails.png') }}" class="mt-3" height="66px" alt="">
                        <img src="{{ asset('logo/productdetails.png') }}" class="mt-3" height="66px" alt="">
                        <img src="{{ asset('logo/productdetails.png') }}" class="mt-3" height="66px" alt="">
                    </div>
                    <div class="col-10">
                        <img src="{{ asset('logo/largeproduct.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card" style="border-radius:0px">
                            <div class="card-header">
                                <span class="ms-2"> MACHINE DATA</span>
                            </div>
                            <div class="card-body p-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Machine type:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Manufacturer:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Year of construction:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Condition:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card border-0" style="border-radius:0px">

                            <div class="card-body p-2">
                                <h6>Rating and Reviews</h6>

                                <div class="row p-2 mt-4">
                                    <div class="col-4 " style="border-right: 1.2px solid">
                                        <div class="d-flex mt-4">
                                            <h1 style="font-weight: 400">4.3</h1>
                                            <img src="{{ asset('logo/star-1.png') }}" class="mt-2 ms-2" height="30px"
                                                alt="">
                                        </div>
                                        <p style="font-size: 12.5px;color:grey">5 verfied buyers</p>
                                    </div>
                                    <div class="col-8 p-3">
                                        <div class="d-flex " style="flex-direction: column">
                                            <div class="d-flex" style="align-items: center">
                                                <div style="font-size: 13px">5</div>
                                                <img src="{{ asset('logo/star-1.png') }}" class="ms-1 me-2"
                                                    height="13px" alt="">
                                                <div
                                                    style="height: 5px;
                                                background: #FEC80Aed;
                                                width: 60%;
                                                border-radius: 8px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1" style="flex-direction: column">
                                            <div class="d-flex" style="align-items: center">
                                                <div style="font-size: 13px">4</div>
                                                <img src="{{ asset('logo/star-1.png') }}" class="ms-1 me-2"
                                                    height="13px" alt="">
                                                <div
                                                    style="height: 5px;
                                                background: #E0E0E0;
                                                width: 60%;
                                                border-radius: 8px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1" style="flex-direction: column">
                                            <div class="d-flex" style="align-items: center">
                                                <div style="font-size: 13px">3</div>
                                                <img src="{{ asset('logo/star-1.png') }}" class="ms-1 me-2"
                                                    height="13px" alt="">
                                                <div
                                                    style="height: 5px;
                                                background: #E0E0E0;
                                                width: 60%;
                                                border-radius: 8px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1" style="flex-direction: column">
                                            <div class="d-flex" style="align-items: center">
                                                <div style="font-size: 13px">2</div>
                                                <img src="{{ asset('logo/star-1.png') }}" class="ms-1 me-2"
                                                    height="13px" alt="">
                                                <div
                                                    style="height: 5px;
                                                background: #E0E0E0;
                                                width: 60%;
                                                border-radius: 8px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1" style="flex-direction: column">
                                            <div class="d-flex" style="align-items: center">
                                                <div style="font-size: 13px">1</div>
                                                <img src="{{ asset('logo/star-1.png') }}" class="ms-1 me-2"
                                                    height="13px" alt="">
                                                <div
                                                    style="height: 5px;
                                                background: #E0E0E0;
                                                width: 60%;
                                                border-radius: 8px;">
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
            <div class="col-12 smallimagescreen">
                <div class="row ">
                    <div style="position: relative; overflow: hidden;">

                        <div class="smallslider w-100">
                            <div class="col-12 ">
                                <div class="card w-100" style="border-radius: 0px;border:0">
                                    <div class="card-body">
                                        <img src="{{ asset('logo/productImage.png') }}" class="card-img-top w-100 "
                                            style="border-radius:0px;height:250px" alt="">


                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card w-100" style="border-radius: 0px;border:0">
                                    <div class="card-body">
                                        <img src="{{ asset('logo/productImage.png') }}" class="card-img-top w-100 "
                                            style="border-radius:0px;height:250px" alt="">


                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card w-100" style="border-radius: 0px;border:0">
                                    <div class="card-body">
                                        <img src="{{ asset('logo/productImage.png') }}" class="card-img-top w-100 "
                                            style="border-radius:0px;height:250px" alt="">


                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card w-100" style="border-radius: 0px;border:0">
                                    <div class="card-body">
                                        <img src="{{ asset('logo/productImage.png') }}" class="card-img-top w-100 "
                                            style="border-radius:0px;height:250px" alt="">


                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card w-100" style="border-radius: 0px;border:0">
                                    <div class="card-body">
                                        <img src="{{ asset('logo/productImage.png') }}" class="card-img-top w-100 "
                                            style="border-radius:0px;height:250px" alt="">


                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h6>REDFORD CB-16 COLD BOX</h6>
                <p style="font-size: 13px;color:#FF4545;font-weight:500" class="mt-3">Description</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">REDFORD CB-16 COLD BOX with PLC</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">Manufacturer : REDFORD</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">Condition : New</p>
                <div class="d-flex mt-4" style="height: 5px;align-items:center">
                    <img src="{{ asset('logo/stars.png') }}" style="margin-top:-13px" alt="">
                    <p style="font-size: 13px" class="ms-2">(5)</p>
                </div>
                <h6 class="mt-3">Rs. 6765</h6>
                <a href="{{ route('user-cart') }}" class="getquotesbutton largescreen" style="text-decoration: none">Get
                    Quote</a>
                <p style="font-size: 13px;color:#FF4545;font-weight:500" class="mt-3">Specification</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">100% Original Products</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">Pay on delivery might be available</p>
                <p style="font-size: 13px;color:black;margin-top:-13px">Easy 14 days returns and exchanges</p>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card" style="border-radius:0px">
                            <div class="card-header">
                                <span class="ms-2">SELLER</span>
                            </div>
                            <div class="card-body p-4">
                                <h6 style="font-size: 14px;color:#FF4545">MEXXiSS Technologies</h6>
                                <h6 style="font-size: 14px;color:#000000;font-weight:400" class="mt-2">New Delhi, India
                                </h6>
                                <h6 style="font-size: 14px;color:#000000" class="mt-2 mb-3">Registered since : 2007</h6>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="button mt-2 button-background largescreen"
                                    style="padding: 7px 10px!important;font-size:10.2px"> Request for Callback
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card" style="border-radius:0px">
                            <div class="card-header">
                                <span class="ms-2"> TECHNICAL DETAILS</span>
                            </div>
                            <div class="card-body p-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Overall Weight:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">7200 kg</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Manufacturer:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Year of construction:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <h6 style="font-size:12px">Condition:</h6>
                                        <h6 style="font-size:12px;font-weight:400" class="ms-1">REDFORD CB-16 COLD BOX
                                            with PLC</h6>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="margin-top: 6%">
        <hr>
    </div>

    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="button mt-2 button-background smallscreen w-100"
        style="padding: 10px !important;font-size:15px;bottom: 0; position: fixed; z-index: 101001; background: #FF4545 !important">
        Request for Callback
    </button>

    @include('User.Pages.recommendation')

    {{-- footer section --}}
    @include('User.bin.footer.footer')
    <style>
        .inquiryinput:hover {}
    </style>
    <!-- jQuery -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index: 999999999999999999;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius:0px;">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <img style="height: 100%" src="{{ asset('logo/modalimage.png') }}" class="img-fluid largescreen"
                            alt="">
                        <img style="" src="{{ asset('logo/longquiry.png') }}" class="img-fluid w-100 smallscreen"
                            alt="">
                    </div>
                    <div class="col-lg-9 col-12 p-3">
                        <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                            <div class="d-flex"
                                style="width: 100%;
                            align-items: center;
                            justify-content: space-between;">
                                <h6 class="modal-title" id="exampleModalLabel"
                                    style="color: #FF4545;font-weight: 600;flex:1">SEND INQUIRY</h6>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div style="font-size: 13px;color:grey" class="mt-1">
                                24/7 We will answer your questions and problems.
                            </div>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                            </span>
                                            <input type="text"
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="First Name"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                            </span>
                                            <input type="text"
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="Last name"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/mail.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="email"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="E-mail" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="tel"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Phone" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 ">
                                        <textarea class="form-control shadow-none"
                                            style=" border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;" rows="3"
                                            placeholder="Describe your issue"></textarea>

                                    </div>
                                    <div class="input-group mb-3 ">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="button btn mt-2 button-background w-100"
                                            style="padding: 7px 10px!important;font-size:13px"> Send
                                        </a>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $('.smallslider').slick({
                // Slick settings go here
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 2000,
                // Add more settings as needed
            });
        });
    </script>
@endsection
