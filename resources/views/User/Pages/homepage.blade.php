@extends('User.bin.upper')
@section('title')
    Home Page
@endsection


@section('body')
    <style>
        @media only screen and (max-width: 991px) {
            .alignmenthome {
                align-items: center;
                display: flex;
                flex-direction: column;
            }

            .machinery {
                font-weight: 700;
                font-size: 27px;
                letter-spacing: .5px;
                line-height: 47px
            }

            .card-layout {
                width: 20%;
                padding: 0px 4px;

            }

            .categorymt {
                margin-top: 20px;
            }

            .categoryimage {
                height: 25px;
                width: 25px
            }

            .categoryarrowimage {
                height: 20px;
                width: 14px
            }

            .whyuspaading {
                padding: 30px 25px
            }

            .cattitle {
                font-size: 8px;
                font-weight: 500;
                color: black;
                text-decoration: none !important
            }

            .newbutton {
                align-items: center;
                align-items: center;
                width: 50%;
                justify-content: center;
                display: flex;
                height: 35px;
                font-size: 8px;
            }

            .corevalue2 {
                margin: 0 auto;
                width: 100%;
                display: flex;
                margin-left: 5%;
                position: relative;
                margin-top: -29%;
            }

            .corevalue1image {
                margin: 0 auto;
                height: 350px
            }

            .corevalue2image {
                margin: 0 auto;
                height: 250px
            }

            .cardposition {
                margin-top: -50% !important;

            }

            .margincolorbottom {
                margin-bottom: 20%;
            }

            .logotest2 {
                height: 55px;
                position: absolute;
                right: 0px;
                top: 20px;
            }

            .margintopform {
                margin-top: 10%
            }

            .clientimagewidth {
                width: 70%
            }

            .clientwidth {
                width: 70%
            }
            .corereddiv {
               display: none
            }

        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {

            .alignmenthome {
                align-items: auto;
                display: auto;
                flex-direction: auto;
                margin-top: 3%;
            }

            .machinery {
                font-weight: 700;
                font-size: 40px;
                letter-spacing: .5px;
                line-height: 47px
            }

            .card-layout {
                width: 10%;
                text-decoration: none
            }

            .categorymt {
                margin-top: -45px;
            }

            .categoryimage {
                height: 28px;
                width: 39px
            }

            .categoryarrowimage {
                height: 20px;
                width: 13px
            }

            .whyuspaading {
                padding: 30px 70px
            }

            .cattitle {
                font-size: 10px;
                font-weight: 500;
                color: black;
                text-decoration-color: transparent !important
            }

            .newbutton {
                align-items: center;
                align-items: center;
                width: 50%;
                justify-content: center;
                display: flex;
                height: 35px;
                font-size: auto
            }

            .corevalue2 {
                margin: 0 auto;
                display: flex;
                margin-left: 35%;
                position: relative;
                margin-top: -35%;
            }

            .corevalue1image {
                margin: 0 auto;
                height: 400px
            }

            .corevalue2image {
                margin: 0 auto;
                height: 270px
            }

            .margincolorbottom {
                margin-bottom: 0%;
            }

            .logotest2 {
                height: 55px;
                position: absolute;
                right: 60px;
                top: 20px;
            }

            .margintopform {
                margin-top: 30%
            }

            .clientwidth {
                width: 60%
            }

            .corereddiv {
                width: 100%;
                height: 225px;
                position: relative;
                margin-left: 10px;
                margin-bottom: 10px;
                border-bottom: 10px solid red;
                border-left: 10px solid red;
            }
        }
    </style>
    @include('User.bin.navBar.navBar')
    {{-- banner section --}}
    <div class="container-fluid p-0 mb-5">
        <div class="test">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 mx-auto alignmenthome">
                        <h2 class="text-light mt-5 text-center text-lg-start smallscreen mb-3"
                            style="font-weight: 400;
                    font-size: 15px;
                    letter-spacing: .5px;line-height:47px
                         ">
                            Search products and find verified sellers
                            near

                            you</h2>
                        <div class="col-md-7 col-11">
                            <div class="blurred w-100">
                                <h1 class="homeparagraph" style="margin-top: 9px">Empowering Industry Through Cutting-Edge
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <h2 class="text-light mt-4 mb-4 text-center text-lg-start machinery">
                                Machinery Solutions</h2>
                        </div>

                        <a href="{{ route('user-product') }}" class="button mt-2 button-background "
                            style="padding: 10px 20px!important">
                            Explore Now <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -2px" class="ms-1"
                                width="17" height="17" fill="currentColor" class="bi bi-arrow-right"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg></a>
                    </div>
                    <div class="col-6 d-none d-lg-block mx-auto">
                        <form action="{{ route('user-homepage') }}" method="post" style="margin-top: 30%">
                            @csrf
                            <h1 for="" class="text-light homeparagraph">Search products and find verified sellers
                                near

                                you</h1><br>
                            <div class="input-group mb-3" style="height: 45px;margin-top: -10px;">

                                <input type="text" name="search" class="form-control shadow-none"
                                    aria-label="Text input with segmented dropdown button"
                                    placeholder="Enter Product/Service Name" style="border-radius: 0px;font-size:14px">
                                <button class="btn homeparagraph text-light button-background"
                                    style="border-radius: 0px;width:90px" type="submit">Search</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="row categorymt" style="margin-right:0">

            <div class="col-11 mx-auto">
                <div class="row" style="justify-content:space-evenly">
                    {{-- <div class="col-2 card-layout ">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/steel.png') }}" class="card-img-top mb-2 mt-1 categoryimage"
                                    alt="">
                                <p class="mt-1 cattitle">Steel Pipes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 card-layout">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/plate.png') }}" class="card-img-top mb-2 mt-1 categoryimage"
                                    alt="">
                                <p class="mt-1 cattitle" style="">Steel Plates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 card-layout">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/fab.png') }}" class="card-img-top mb-2 mt-1 categoryimage"
                                    alt="">
                                <p class="mt-1 cattitle">Fabrication</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 card-layout">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/tube.png') }}" class="card-img-top mb-2 mt-1 categoryimage"
                                    alt="">
                                <p class="mt-1 cattitle">Steel Tubes</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-layout largescreen">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/cutting.png') }}" 
                                    class="card-img-top mb-2 mt-1 categoryimage" alt="">
                                <p class="mt-1 cattitle">Cutting Machines</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-layout largescreen">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/agri.png') }}" 
                                    class="card-img-top mb-2 mt-1 categoryimage" alt="">
                                <p class="mt-1 cattitle" >Eco-friendly machinery</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-layout largescreen">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/replacement.png') }}" "
                                    class="card-img-top mb-2 mt-1 categoryimage" alt="">
                                <p class="mt-1 cattitle">Replacement Parts</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-layout largescreen">
                        <div class="card border-0 shadow" style="height: 100px">
                            <div class="card-body text-center">
                                <img src="{{ asset('logo/advance.png') }}" 
                                    class="card-img-top mb-2 mt-1 categoryimage" alt="">
                                <p class="mt-1 cattitle">Advanced Machinary</p>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($outer as $index => $item)
                        {{-- {{ dd($item)}} --}}
                        <div class="col-2 card-layout {{ $index >= 4 ? ' largescreen' : '' }}">
                            <a href="{{ route('user-categoryfilter', ['outer_id' => $item->outCid]) }}" class="link">
                                <div class="card border-0 shadow" style="height: 100px">
                                    <div class="card-body text-center">
                                        <img src="{{ $item->out_cat_image }}" class="card-img-top mb-2 mt-1 categoryimage"
                                            alt="">
                                        <p class="mt-1 cattitle">{{ Str::limit($item->outer_Category_name, 15, '...') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <div class="col-2 card-layout">
                        <a href="{{ route('user-shopbycategories') }}" class="link">
                            <div class="card border-0 shadow" style="height: 100px">
                                <div class="card-body text-center">
                                    <img src="{{ asset('logo/viewall.png') }}"
                                        class="card-img-top mb-2 mt-1 categoryarrowimage" alt="">
                                    <p class="mt-2 cattitle"> View all Categories</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>

    </div>
    {{-- product you may like --}}
    <div class="container">
        <h4 class="text-center" style="color: #FF4545">Products You May Like</h4>
        <div class="row mt-4">
            @foreach ($product as $item)
                <div class="col-lg-3 col-6 mt-3 ">
                    <div class="card productCardData" style="border-radius: 0px">
                        <div class="card-body">
                            <img src="{{ $item->product_images[0] }}" class="card-img-top "
                                style="border-radius:0px;height:250px" alt="">
                            <h6 style="font-size: .85rem" class="mt-2">{{ $item->product_name }}</h6>
                            <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->discounted_price }}</h6>
                            <div style="display: flex;align-items: center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: {{ $item->average_percentage }}%;">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>

                                </div>
                                <span style="font-size: .8rem"
                                    class="text-bold ms-1">({{ $item->average_rating ? $item->average_rating : 0 }})</span>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('user-productdetails', ['product_id' => $item->id]) }}"
                                    class="button mt-2 button-background d-flex newbutton" style="">
                                    View Details

                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="11px"
                                        alt="">
                                </a>
                                <a href="{{ route('user-contactus') }}"
                                    class="button secondary-color  mt-2 ms-2 newbutton">
                                    Contact Us
                                    <img src="{{ asset('logo/call.png') }}" class="ms-1" height="11px"
                                        alt="">
                                </a>


                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <h6 class="text-center mt-3 text-decoration-underline" style="color: #FF4545"><a style="color: #FF4545""
                href="{{ route('user-product') }}">View All</a></h6>
    </div>
    {{-- parts you may like --}}
    <div class="container mt-5">
        <h4 class="text-center" style="color: #FF4545">Query Based Products</h4>
        <div class="row mt-4">
            @foreach ($queryproduct as $item)
                <div class="col-lg-3 col-6 mt-3 ">
                    <div class="card productCardData" style="border-radius: 0px">
                        <div class="card-body">
                            <img src="{{ $item->product_images[0] }}" class="card-img-top "
                                style="border-radius:0px;height:250px" alt="">
                            <h6 style="font-size: .85rem" class="mt-2">{{ $item->product_name }}</h6>
                            <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->discounted_price }}</h6>
                            <div style="display: flex;align-items: center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: {{ $item->average_percentage }}%;">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>

                                </div>
                                <span style="font-size: .8rem"
                                    class="text-bold ms-1">({{ $item->average_rating ? $item->average_rating : 0 }})</span>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('user-productdetails', ['product_id' => $item->id]) }}"
                                    class="button mt-2 button-background d-flex newbutton" style="">
                                    View Details

                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="11px"
                                        alt="">
                                </a>
                                <a href="{{ route('user-contactus') }}"
                                    class="button secondary-color  mt-2 ms-2 newbutton">
                                    Contact Us
                                    <img src="{{ asset('logo/call.png') }}" class="ms-1" height="11px"
                                        alt="">
                                </a>


                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <h6 class="text-center  text-decoration-underline mt-3"><a href="{{ route('user-product') }}"
                style="color: #FF4545">View All</a></h6>
    </div>
    {{-- about us --}}
    <div class="container" style="margin-top: 7%">
        <div class="row ">
            <div class="col-lg-6 col-12 "
                style="align-items: center;
                display: flex;
                justify-content: center;">
                <img src="{{ asset('logo/aboutus-home.png') }}" height="330px" alt="">
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0" style="padding:0px 60px">
                <h4 class="mb-3" style="color: #FF4545">About Us</h4>
                <span style="color:#2e2e2e;font-size:14.2px">Welcome to STEELVISTA, where innovation meets tradition in the
                    world of steel manufacturing and machinery production. Established 5 years ago, we have been at the
                    forefront of delivering exceptional solutions that redefine industry standards.</span>
                <br>
                <div class="mt-3" style="color:#2e2e2e;font-size:14.2px">Our journey began with a vision - a vision to
                    revolutionize the steel and machinery sector by blending cutting-edge technology with time-honored
                    craftsmanship. Over the past 5 years, we've evolved, adapted, and grown, becoming a trusted name in the
                    industry.</div>
                <div class="mt-4">
                    <a href="{{ route('user-aboutus') }}" class="button button-background mt-2"
                        style="padding: 8px 20px!important;align-items: center;
                        display: flex;
                        width: fit-content;">
                        Read
                        More <img class="ms-2" src="{{ asset('logo/arrow.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- why us --}}
    <div class="container-fluid p-0 " style="margin-top: 7%;background:#263238">
        <div class="row" style="margin-right: 0px">
            <div class="col-12 col-lg-8 whyuspaading">
                <h4 class="text-light ms-lg-3 ms-2 mb-4">Why Choose Us?</h4>
                <div class="row">
                    <div class="col-6 col-lg-5 me-lg-5">
                        <div class="card whyuscard">
                            <div class="card-body p-lg-3 p-2">
                                <img src="{{ asset('logo/star.png') }}" height="30px" alt="">
                                <h6 class="text-light mt-2">Industry Expertise</h6>
                                <p class="mt-3 w-100" style="color: #d4d4d4;font-size:11.5px">With 5 years of experience,
                                    we
                                    are industry leaders in steel manufacturing and machinery production. Our seasoned
                                    experts bring unparalleled knowledge and insights to every project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  col-lg-5 me-lg-5">
                        <div class="card whyuscard">
                            <div class="card-body p-lg-3 p-2">
                                <img src="{{ asset('logo/quality.png') }}" height="23px" alt="">
                                <h6 class="text-light mt-2">Quality Assurance</h6>
                                <p class="mt-3" style="color: #d4d4d4;font-size:11.5px">At STEELVISTA, quality is
                                    non-negotiable. Our rigorous quality control measures guarantee that every steel product
                                    and machinery component meets the highest industry standards. We take pride in
                                    delivering excellence.</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-5 col-6 me-lg-5">
                        <div class="card whyuscard">
                            <div class="card-body p-lg-3 p-2">
                                <img src="{{ asset('logo/truck.png') }}" height="23px" alt="">
                                <h6 class="text-light mt-2">Timely Delivery</h6>
                                <p class="mt-3" style="color: #d4d4d4;font-size:11.5px">We understand the importance of
                                    timelines in the industrial sector. Our streamlined processes and efficient workflows
                                    enable us to deliver projects on time, without compromising on quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-6 me-lg-5">
                        <div class="card whyuscard">
                            <div class="card-body p-lg-3 p-2">
                                <img src="{{ asset('logo/track.png') }}" height="25px" alt="">
                                <h6 class="text-light mt-2">Proven Track Record</h6>
                                <p class="mt-3" style="color: #d4d4d4;font-size:11.5px">Over the years, we have
                                    successfully delivered projects for clients across various industries. Our proven track
                                    record speaks to our reliability, consistency, and ability to exceed expectations.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="{{ asset('logo/whyus-home.png') }}" class="w-100" alt="">
            </div>
        </div>
    </div>
    {{-- our categories --}}
    <div class="container mt-2">
        <div class="row mt-5">
            <div class="col-12 col-lg-3  mb-3">
                <div class="card-body p-2">
                    <h5 style="color: #FF4545">Our Categories</h5>
                    <p class="mt-2" style="font-size: 13px">We take pride in offering a comprehensive range of services
                        tailored to meet the diverse needs of our
                        clients. Our commitment to excellence extends across every aspect of our operations, ensuring that
                        you receive top-notch solutions for your industrial requirements.</p>
                </div>
            </div>
            @foreach ($category as $item)
                <div class="col-lg-3 col-6  mb-3">
                    <div class="card-body categoryCard">
                        <div style="width: 100%">
                            <img src="{{ $item->cat_img }}" style="width: 100%" class="categoryImage" alt="">
                            <a href="{{ route('user-shopbycategories') }}" style="text-decoration: none">
                                <div class="categoryImageTitle ">
                                    <h6 style="font-size: 14px" class="text-light">{{ $item->category_name }}</h6>
                                    <p style="font-size: 11px;color:rgb(204, 204, 204);margin-top:-5px">Learn More <img
                                            class="ms-1" style="margin-top: -2px" src="{{ asset('logo/arrow.png') }}"
                                            height="9px"></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>
        <a href="{{ route('user-shopbycategories') }}">
            <h6 class="text-center  text-decoration-underline mt-4" style="color: #FF4545">View All</h6>

        </a>
    </div>
    <style>
        .cardshadow {
            transition: box-shadow 0.3s;
        }

        .cardshadow:hover {
            box-shadow: 5px 4px 50px rgba(0, 0, 0, 0.1);
        }
    </style>
    {{-- our core values --}}
    <div class="container" style="margin-top: 7%">
        <div class="row" style="padding:0px 20px">
            <div class="col-12 col-lg-6 order-2 order-lg-1 mt-5 mt-lg-0">
                <h4 style="color: #FF4545">Our Core Values</h4>
                <p class="mt-4 " style="font-size: 15px">Our mission is simple: to provide our clients with the highest
                    quality steel products and machinery, backed by unparalleled service. </p>

                <div class="card cardshadow mt-5" style="border: 0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="align-items: center;display:flex" class="ms-3"><img
                                    src="{{ asset('logo/quality-1.png') }}" height="50px" alt=""></div>
                            <div style="padding: 0px 35px">
                                <h6>Quality</h6>
                                <p style="font-size: 13.5px">We are committed to delivering products of the utmost quality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardshadow mt-3" style="border: 0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="align-items: center;display:flex" class="ms-3"><img
                                    src="{{ asset('logo/innovation.png') }}" height="50px" alt=""></div>
                            <div style="padding: 0px 35px">
                                <h6>Innovation</h6>
                                <p style="font-size: 13.5px">We invest in the latest technologies and methodologies to stay
                                    ahead of the curve, offering you solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardshadow mt-3" style="border: 0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="align-items: center;display:flex" class="ms-3"><img
                                    src="{{ asset('logo/customer.png') }}" height="50px" alt=""></div>
                            <div style="padding: 0px 35px">
                                <h6>Customers Focus</h6>
                                <p style="font-size: 13.5px">Our customer-centric approach means that your satisfaction is
                                    our top priority.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <div style="margin-left: 10%">
                    <div style="margin: 0 auto;width:100%;display:flex">
                        <img src="{{ asset('logo/corevalue-1.png') }}" class="corevalue1image" style=""
                            alt="">
                        <div style="" class="corereddiv"></div>
                    </div>
                    <div style="" class="corevalue2">
                        <img src="{{ asset('logo/corevalue-2.png') }}" class="corevalue2image" alt="">
                    </div>
                    <div class="card shadow clientwidth"
                        style="border: 0;position: relative;
                    margin-top: -14%;
                    margin-left: 12%;">
                        <div class="card-body d-flex align-items-center">
                            <img src="{{ asset('logo/profile-1.png') }}" height="45px" alt="">
                            <div class="text-center ms-4">
                                <h4 style="color: #FF4545">3800+</h4>
                                <h6 style="margin-top: -5px">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- testinomial --}}
    <div class="container-fluid " style="background: #FDEFED;margin-top:7%;">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1 margincolorbottom">
                <div class="image-div" style="position: relative;z-index:1">
                    <img src="{{ asset('logo/test-2.png') }}" style="" class="logotest2" alt="">
                    <img src="{{ asset('logo/test-3.png') }}" style="height: 70px;position: absolute;left:10px;top:60px"
                        alt="">
                </div>
                <div class="col-10 mx-auto">
                    <div class="card shadow cardposition slider"
                        style="    border-radius: 0px;border:0;
                            position: relative;
                            margin-top: 19%;
                            z-index: 1;">
                        @foreach ($test as $item)
                            <div class="card-body me-4" style="padding: 15px 45px">
                                <div style="display: flex;align-items: center">
                                    <div>
                                        <img src="{{ $item->user_profile }}"
                                            style="    width: 50px;
                                height: 50px;
                                border-radius: 50%"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="star-ratings ms-3">
                                        <div class="fill-ratings" style="width: {{ $item->rating }}%;">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>

                                    </div>
                                </div>
                                <p style="font-size: 13px" class="mt-3">
                                    {{ Str::limit($item->testimonial, 300, '...') }}</p>
                                <h6 style="font-size: 14px">{{ $item->user_name }}</h6>
                                <h6 class="mb-4" style="font-size: 14px;margin-top:-4px">{{ $item->user_role }},
                                    {{ $item->user_job_at }}</h6>
                            </div>
                        @endforeach

                    </div>


                </div>

            </div>
            <div class="col-12 col-lg-5 p-5 order-1 order-lg-2">
                <h4 style="margin-top: 10%;color:#FF4545">What Our Clients Say About Us?</h4>
                <p class="mt-3" style="font-size: 13px">Testimonials that Speak Louder Than Words: Our Clients Share
                    Their Success Stories.</p>
                <img src="{{ asset('logo/test-1.png') }}" height="75px"
                    style="margin-top: 25%;
                    margin-left: -11%;" alt="">
            </div>
        </div>
    </div>
    {{-- email section --}}
    <div class="container-fluid p-0">
        <div class="footer-test p-2 p-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto">
                        <h3 class="" style="margin-top: 16%;color:#FF4545">Committed to Value, Committed to you.
                        </h3>
                        <p class="mt-4 text-light">Feel free to get in touch with us anytime; we're here to answer your
                            questions, address your needs, and assist you in any way we can.</p>
                    </div>
                    <div class="col-12 col-lg-5 mx-auto">
                        <form action="" method="post" class="margintopform" style="">
                            <div class="input-group mb-3" style="height: 50px;margin-top: -10px;">

                                <input type="text" class="form-control shadow-none"
                                    aria-label="Text input with segmented dropdown button" placeholder="Enter Your Email"
                                    style="border-radius: 0px;font-size:14px">
                                <button class="btn button-background homeparagraph primary-color"
                                    style="border-radius: 0px;width:100px" type="button">Subscribe</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                // Slick settings go here
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3000,
                // Add more settings as needed
            });
        });
    </script>

    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
