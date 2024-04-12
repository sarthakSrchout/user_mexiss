@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        .helpandsupp {
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

        .bannerheight {
            height: 200px
        }

        .marginbottom {
            margin-bottom: 6%
        }

        @media only screen and (max-width: 600px) {
            .helpandsupp {
                z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 15%;
                color: white;
                font-size: 25px;
            }

            .bannerheight {
                height: 150px
            }

            .welcomefont {
                font-size: 17px
            }

            .marginbottom {
                margin-bottom: 15%
            }

            .textcenter {
                text-align: center
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
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">Help and Support</p>
        </div>


    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                    <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Help and Support</p>
                </div>

            </div>
        </div>

    </div>
    <div class="container-fluid marginbottom">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ asset('logo/help.png') }}" class="w-100 bannerheight" style="position: absolute">
                <h6 class="helpandsupp">
                    Help & Support</h6>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row p-lg-5 p-3">
            <div class="col-12 text-center">
                <h3 style="color: #FF4545" class="mb-4 mt-3 welcomefont">Welcome to the MEXXiSS Help and Support Center
                </h3>

            </div>
            <div class="col-lg-10 col-11 mx-auto">
                <p style="font-size: 13.5px" class="textcenter">We are here to assist you and provide the information you
                    need to make the most
                    of our website and services.
                    If you have any questions or encounter issues, please explore the following resources or contact our
                    support team for personalized assistance.</p>
            </div>
            <div class="col-6 mx-auto mt-3" style="justify-content: center;display:flex">
                <img src="{{ asset('logo/supp.png') }}" class="img-fluid" style="align-items: center" alt="">

                {{-- <div style="">
                        <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

                    </div> --}}
            </div>
        </div>
    </div>

    <div class="container mt-2 mb-5">
        <div class="row">
            <div class="col-lg-10 col-11 mx-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h6 class="mb-3">Frequently Asked Questions (FAQs)</h6>
                        <p style="font-size: 13px">Our FAQs section is designed to address common queries and provide quick
                            answers to help you navigate our website and understand our products and services better. Check
                            our FAQs <a href="{{ route('user-faq') }}" style="color: #FF4545">here.</a></p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">Getting Started Guide</h6>
                        <p style="font-size: 13px">If you're new to MEXXiSS our Getting Started Guide provides step-by-step
                            instructions to help you explore our website, understand our product categories, and make
                            informed decisions. Access the guide <a href="" style="color: #FF4545">here.</a> </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">Contacting Support</h6>
                        <p style="font-size: 13px">For personalized assistance, our support team is ready to help. Please
                            use one of the following methods to get in touch:</a> </p>
                        <p style="font-size: 13px" class="d-flex"><span style="font-weight: 700" class="ms-2 me-2">Email:
                            </span> support@yourcompany.com</a> </p>
                        <p style="font-size: 13px;margin-top: -12px;" class="d-flex"><span style="font-weight: 700"
                                class="ms-2 me-2">Phone: </span> [Your Contact Number]</a> </p>
                        <p style="font-size: 13px;margin-top: -12px;" class="d-flex"><span style="font-weight: 700"
                                class="ms-2 me-2">Live Chat: </span>Available [Specify Days and Hours]</a> </p>

                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">Technical Support</h6>
                        <p style="font-size: 13px">If you are experiencing technical issues or have questions about our
                            machinery or products, our technical support team is dedicated to resolving your concerns
                            promptly. Contact our technical support team <a href="" style="color: #FF4545">here.</a>
                        </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">Customer Feedback</h6>
                        <p style="font-size: 13px">We value your feedback. If you have suggestions, comments, or if there's
                            anything we can do to improve your experience with MEXXiSS, please share your thoughts with us
                            <a href="" style="color: #FF4545">here.</a>
                        </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">Terms and Conditions</h6>
                        <p style="font-size: 13px">For detailed information about the terms and conditions of using our
                            website, please refer to our <a href="{{ route('user-term') }}" style="color: #FF4545">Terms and Conditions</a>
                            page. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
