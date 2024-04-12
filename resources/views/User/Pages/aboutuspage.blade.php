@extends('User.bin.upper')
@section('title')
    About Us
@endsection


@section('body')
    <style>
        .joinus-test {
            width: 100%;
            height: 350px;
            background-size: cover;
            background-image: url('{{ asset('logo/joinus.png') }}');
            position: relative;
        }

        .aboutusbanner {
            height: 200px;
        }

        .aboutusimage {
            height: 280px;
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .aboutusbanner {
                height: 120px;

            }

            .joinus-test {

                height: 600px;
            }

            .aboutusimage {
                height: auto;
                margin-top: 10%;
            }

        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {}

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
                    <a href="{{ route('user-homepage') }}">
                        <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

                    </a>
                    <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">About Us</p>
                </div>


    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                    <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">About Us</p>
                </div>

            </div>
        </div>

    </div>
    <div class="container-fluid" style="margin-bottom: 10%">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ asset('logo/aboutusbanner.png') }}" class="w-100 aboutusbanner" style="position: absolute">
                <h6
                    style="z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 6%;
                color: white;
                font-size: 30px;">
                    About us</h6>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-10 col-lg-6 order-2 order-lg-1 mx-auto">
                <h4 style="color: #FF4545" class="mb-4 mt-3">Who We Are?</h4>
                <p style="font-size: 14px">Welcome to STEELVISTA, where innovation meets tradition in the world of steel
                    manufacturing and machinery production. Established 5 years ago, we have been at the forefront of
                    delivering exceptional solutions that redefine industry standards.</p>
                <p style="font-size: 14px">Our journey began with a vision - a vision to revolutionize the steel and
                    machinery sector by blending cutting-edge technology with time-honored craftsmanship. Over the past 5
                    years, we've evolved, adapted, and grown, becoming a trusted name in the industry.</p>
            </div>
            <div class="col-12 col-lg-6 mx-auto order-1 order-lg-2" style="justify-content: center;display:flex">
                <div>
                    <img src="{{ asset('logo/aboutus1.png') }}" class="aboutusimage img-fluid" style="align-items: center"
                        alt="">

                </div>
                {{-- <div style="">
                        <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

                    </div> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <h4 style="color:#FF4545" class="text-center">Our Team</h4>
        <p class="mt-3 col-10 mx-auto col-lg-12" style="font-size: 13px">Meet the dedicated individuals behind STEELVISTA.
            Our team is comprised of
            skilled professionals, from engineers to craftsmen, united by a passion for excellence. Together, we bring a
            wealth of experience and expertise to every project.</p>
        <div class="row mt-5">
            <div class="col-lg-3 col-12">
                <div class="card" style="border: 0">
                    <div class="card-body text-center">
                        <img src="{{ asset('logo/team.png') }}" class="img-fluid" alt="">
                        <h6 class="mt-3">Tema</h6>
                        <h6 style="font-weight: 400">Founder & CEO</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card" style="border: 0">
                    <div class="card-body text-center">
                        <img src="{{ asset('logo/team.png') }}" class="img-fluid" alt="">
                        <h6 class="mt-3">Tema</h6>
                        <h6 style="font-weight: 400">Founder & CEO</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card" style="border: 0">
                    <div class="card-body text-center">
                        <img src="{{ asset('logo/team.png') }}" class="img-fluid" alt="">
                        <h6 class="mt-3">Tema</h6>
                        <h6 style="font-weight: 400">Founder & CEO</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card" style="border: 0">
                    <div class="card-body text-center">
                        <img src="{{ asset('logo/team.png') }}" class="img-fluid" alt="">
                        <h6 class="mt-3">Tema</h6>
                        <h6 style="font-weight: 400">Founder & CEO</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .card.glass-effect {
            background: rgba(255, 255, 255, 0.1);
            /* Adjust the alpha value for transparency */
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            /* Adjust the blur value for the glass effect */
            border-radius: 10px;
            /* Adjust the border-radius as needed */
        }

        .card.glass-effect .card-body {
            padding: 20px;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="joinus-test">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-10  mx-auto">
                        <h4 style="margin-top: 14%;color:#FF4545">Join us On Our Journey</h4>
                        <p class="mt-4 text-light " style="font-size: 14px">Each member of our team plays a crucial role
                            in
                            making STEELVISTA a leader in the steel and machinery industry. </p>
                        <p class="mt-3 text-light " style="font-size: 14px">Together, we are committed to excellence,
                            innovation, and shaping the future of manufacturing. </p>
                    </div>
                    <style>
                        input::placeholder {
                            color: rgb(217, 217, 217) !important
                        }
                    </style>
                    <div class="col-lg-5 col-10 mx-auto">
                        <div class="card glass-effect mt-4" style="background: transparent">
                            <div class="col-11 mx-auto">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <input type="text" class="form-control shadow-none outline-none"
                                                placeholder="Name"
                                                style="background: transparent;border:none;border-bottom: 1px solid grey;border-radius:0;color:white;font-size:13px">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control shadow-none outline-none"
                                                placeholder="E-mail"
                                                style="background: transparent;border:none;border-bottom: 1px solid grey;border-radius:0;color:white;font-size:13px">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control shadow-none outline-none"
                                                placeholder="Address"
                                                style="background: transparent;border:none;border-bottom: 1px solid grey;border-radius:0;color:white;font-size:13px">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control shadow-none outline-none"
                                                placeholder="Message"
                                                style="background: transparent;border:none;border-bottom: 1px solid grey;border-radius:0;color:white;font-size:13px">
                                        </div>
                                        <div class="mb-3">
                                            <input type="submit"
                                                class="w-100 btn homeparagraph text-light button-background"
                                                style="border-radius: 0px;width:90px" value="Send" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
