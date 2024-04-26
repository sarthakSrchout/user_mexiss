@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">Contact Us</p>
        </div>


    </nav>
    <style>
        .marginbottom {
            margin-bottom: 10%
        }

        .howcanwe {
            z-index: 100;
            position: relative;
            align-items: center;
            display: flex;
            justify-content: center;
            vertical-align: middle;
            margin-top: 4%;
            color: #FF4545;
            font-size: 30px;
        }

        .contactimage {
            height: 320px
        }

        .contactusbutton {
            justify-content: space-between;
            display: flex
        }

        .smallbuttonsection {

            display: none !important
        }

        @media only screen and (max-width: 600px) {
            .howcanwe {
                z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 10%;
                color: #FF4545;
                font-size: 25px;
            }

            .contactimage {
                height: 320px
            }

            .marginbottom {
                margin-bottom: 15%
            }

            .contactusbutton {

                display: none !important
            }

            .smallbuttonsection {

                display: flex !important
            }
        }
    </style>
    <div class="container-fluid marginbottom">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ asset('logo/conatcusbanner.png') }}" class="w-100 contactimage" style="position: absolute">
                <h6 class="howcanwe">
                    How Can We Help?
                </h6>
                <div class="col-lg-6 col-11 mx-auto mt-3"
                    style="z-index: 100;
                    position: relative;
                    align-items: center;
                    display: flex;
                    justify-content: center;
                    vertical-align: middle;
                    color:rgb(255, 255, 255);
                    text-align: center;
                    font-size: 14.8px;">
                    Thank you for your interest in MEXXiSS. Whether you have inquiries about our products, services, or
                    partnership opportunities, we are here to assist you.
                    <br><br>
                    Please feel free to reach out to us using the convenient contact form to send us a message directly or
                    call us.

                </div>
                <br>
                <div class="col-lg-1 col-4 mx-auto">
                    <button class="ms-4 ms-lg-3"
                        style="z-index: 100;
                        position: relative;
                        align-items: center;
                        display: flex;
                        justify-content: center;
                        vertical-align: middle;
                        background:transparent;
                        color:#FF4545;
                        text-align: center;
                        font-size: 13px;
                        border:1px solid #FF4545;
                        padding:5px 20px">Call
                        Us</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6 col-11 mx-auto order-2 order-lg-1">
                <h4 style="color: #FF4545" class="mb-4 mt-3">Have a Question or Comment?</h4>
                <p style="font-size: 14px" class="mb-4">Your feedback is important to us. If you have any questions,
                    comments, or if there's anything specific you'd like to discuss, please don't hesitate to get in touch
                    using the form below.</p>
                <form action="{{ route('user-contactus') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-3 inquiryinput">
                                <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                    <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                </span>
                                <input type="text" required name="first_name"
                                    style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                    class="form-control shadow-none" placeholder="First Name *" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-3 inquiryinput">
                                <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                    <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                </span>
                                <input type="text" required name="last_name"
                                    style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                    class="form-control shadow-none" placeholder="Last name *" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="input-group mb-3 inquiryinput">
                            <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                <img src="{{ asset('logo/mail.png') }}" alt="" height="18px">
                            </span>
                            <input type="email" required name="email"
                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                class="form-control shadow-none" placeholder="E-mail *" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 inquiryinput">
                            <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                            </span>
                            <input type="tel" name="phone"
                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                class="form-control shadow-none" placeholder="Phone" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                            <textarea class="form-control shadow-none" required name="issue"
                                style=" border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;" rows="3"
                                placeholder="Describe your issue *"></textarea>

                        </div>
                        <div class="input-group mb-3 ">
                            <button type="submit" 
                                class="button btn mt-2 button-background w-100"
                                style="padding: 7px 10px!important;font-size:13px"> Send
                            </button>
                        </div>
                    </div>



                </form>
            </div>
            <div class="col-lg-6 col-11 mx-auto order-1 order-lg-2" style="justify-content: center;display:flex">
                <div>
                    <img src="{{ asset('logo/aboutus1.png') }}" style="align-items: center" width="100%" height="440px"
                        alt="">

                </div>

            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-7 d-flex mx-auto contactusbutton">
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/map.png') }}" height="30px" alt="">
                    <div class="d-flex ms-3" style="flex-direction: column">
                        <h6 style="color: #FF4545">Find Us</h6>
                        <h6 style="font-size: 12.5px">Gujarat, India</h6>
                    </div>
                </div>
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/callus.png') }}" height="30px" alt="">
                    <div class="d-flex ms-3" style="flex-direction: column">
                        <h6 style="color: #FF4545">Call Us</h6>
                        <h6 style="font-size: 12.5px">+91 96765365454</h6>
                    </div>
                </div>
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/mailbox.png') }}" height="30px" alt="">
                    <div class="d-flex ms-3" style="flex-direction: column">
                        <h6 style="color: #FF4545">Mail Us</h6>
                        <h6 style="font-size: 12.5px">info@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex mx-auto smallbuttonsection" style="justify-content: space-between">
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/map.png') }}" height="18px" alt="">
                    <div class="d-flex ms-1" style="flex-direction: column">
                        <h6 style="color: #FF4545;font-size: 12px">Find Us</h6>
                        <h6 style="font-size: 10px;margin-top: -5px;">Gujarat, India</h6>
                    </div>
                </div>
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/callus.png') }}" height="18px" alt="">
                    <div class="d-flex ms-1" style="flex-direction: column">
                        <h6 style="color: #FF4545;font-size: 12px">Call Us</h6>
                        <h6 style="font-size: 10px;margin-top: -5px;">+91 96765365454</h6>
                    </div>
                </div>
                <div class="d-flex" style="align-items: center">
                    <img src="{{ asset('logo/mailbox.png') }}" height="18px" alt="">
                    <div class="d-flex ms-1" style="flex-direction: column">
                        <h6 style="color: #FF4545;font-size: 12px">Mail Us</h6>
                        <h6 style="font-size: 10px;margin-top: -5px;">info@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
