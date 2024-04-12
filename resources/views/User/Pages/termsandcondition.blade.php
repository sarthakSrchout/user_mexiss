@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        .termandcondition {
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

        .margin-bottom {
            margin-bottom: 6%
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .termandcondition {
                z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 13%;
                color: white;
                font-size: 30px;


            }

            .margin-bottom {
                margin-bottom: 16%
            }

            .termimage {
                margin-top: 16%
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .margin-bottom {
                margin-bottom: 6%
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {}

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {}

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {}
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-help') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">Terms & Conditions</p>
        </div>


    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                    <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Terms & Conditions</p>
                </div>

            </div>
        </div>

    </div>
    <div class="container-fluid margin-bottom">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ asset('logo/term.png') }}" class="w-100" height="200px" style="position: absolute">
                <h6 class="termandcondition">
                    Terms & Conditions</h6>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5" style="background: #FDEFED">
        <div class="row p-3 p-lg-5">
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-lg-5 col-12 order-2 order-lg-1 mx-auto">
                <h3 style="color: #FF4545" class="mb-4 mt-3">Welcome to MEXXiSS</h3>
                <p style="font-size: 14px">By accessing our website, you agree to comply with and be bound by the following
                    terms and conditions. Please read these terms carefully. </p>
                <p style="font-size: 14px">

                    If you disagree with any part of these terms, please do not use our website.</p>
            </div>
            <div class="col-lg-6 col-11 order-1 order-lg-2 mx-auto" style="justify-content: center;display:flex">
                <div>
                    <img src="{{ asset('logo/cuate.png') }}" class="termimage" style="align-items: center" alt="">

                </div>
                {{-- <div style="">
                        <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

                    </div> --}}
            </div>
        </div>
    </div>

    <div class="container mt-2 mb-5">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h6 class="mb-3">1. Website Usage</h6>
                        <p style="font-size: 13px">1.1 The content on this website is for general information and use only.
                            It is subject to change without notice.</p>
                        <p style="font-size: 13px">1.2 Your use of any information or materials on this website is entirely
                            at your own risk. It is your responsibility to ensure that any products, services, or
                            information available through this website meet your specific requirements.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">2. Intellectual Property</h6>
                        <p style="font-size: 13px">This website contains material which is owned by or licensed to us. This
                            material includes, but is not limited to, the design, layout, look, appearance, and graphics.
                            Reproduction is prohibited without explicit consent.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">3.User Conduct</h6>
                        <p style="font-size: 13px">You agree not to use the website for any unlawful purpose or in a way
                            that could damage, disable, overburden, or impair the website.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">4. Product Information</h6>
                        <p style="font-size: 13px">Product descriptions and specifications are provided for informational
                            purposes. We reserve the right to modify or discontinue any product without notice at any time.
                        </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">5. Privacy Policy</h6>
                        <p style="font-size: 13px">Your use of our website is also governed by our Privacy Policy, which can
                            be found here.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">6. Limitation of Liability</h6>
                        <p style="font-size: 13px">In no event will MEXXiSS be liable for any loss or damage, including
                            without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever
                            arising from loss of data or profits arising out of, or in connection with, the use of this
                            website.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">7. Governing Law</h6>
                        <p style="font-size: 13px">Your use of this website and any dispute arising out of such use is
                            subject to the laws of India.
                        </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">8. Changes to Terms and Conditions</h6>
                        <p style="font-size: 13px">MEXXiSS may change these terms from time to time by updating this page.
                            You should check this page periodically to ensure that you are aware of any changes.
                        </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h6 class="mb-3">9. Contact Information</h6>
                        <p style="font-size: 13px">For any questions regarding these terms, please contact us at here.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
