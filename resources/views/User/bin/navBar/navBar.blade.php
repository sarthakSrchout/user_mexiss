<nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow largescreen"
    style="top: 0;position:sticky;z-index:101001">
    <div class="container-fluid" style="padding: 0px 30px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-lg-2">
            <a class="navbar-brand" href="#"><img height="30px" src="{{ asset('logo/logo.png') }}"
                    alt=""></a>
        </div>

        <ul class="navbar-nav col-lg-7"
            style="background: white;height:54px;border-right: 10px solid red;border-left: 10px solid red;height:54px;align-items:center;padding:0px 50px;justify-content:space-evenly">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user-homepage') }}"
                    style="font-weight: 600;font-size: 14px;color: black;">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user-aboutus') }}"
                    style="font-weight: 600;font-size: 14px;color: black;">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user-product') }}"
                    style="font-weight: 600;font-size: 14px;color: black;">Products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user-contactus') }}"
                    style="font-weight: 600;font-size: 14px;color: black;">Contact Us</a>
            </li>

        </ul>

        <div class="col-lg-3">
            {{-- <button type="button" class="btn btn-labeled btn-success ms-5   " data-bs-toggle="modal"
                data-bs-target="#loginmodal"
                style="color: #FF4545;background:white;border:none;font-size: 13px;font-weight: 600;">
                <span class="btn-label me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg></span>Login</button> --}}
            <a href="{{ route('user-profile') }}" type="button" class="btn btn-labeled btn-success ms-5   "
                style="color: #FF4545;background:white;border:none;font-size: 13px;font-weight: 600;">
                <span class="btn-label me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg></span>Profile</a>
            <a href="{{ route('user-cart') }}" class="ms-5" type="submit">
                <img src="{{ asset('logo/shopping-cart.png') }}" height="23px" alt="">
            </a>
        </div>

    </div>

</nav>
@if(request()->is('/'))
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">
        <div class="d-flex p-3" style="align-items: center">

            <a class="navbar-brand" href="#"><img src="{{ asset('logo/logo2.png') }}" alt=""></a>

            <input type="text" class="form-control shadow-none outline-none w-100"
                placeholder="Enter Product/Service Name" style="font-size: 13.5px">


            {{-- <button type="button" class="btn btn-labeled btn-success ms-5   " data-bs-toggle="modal"
                data-bs-target="#loginmodal"
                style="color: #FF4545;background:white;border:none;font-size: 13px;font-weight: 600;">
                <span class="btn-label me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg></span>Login</button> --}}

                        {{-- <a href="#" class="ms-3" type="submit" data-bs-toggle="modal" data-bs-target="#loginmodal">
            <img src="{{ asset('logo/profile.png') }}" height="30px" alt="">
            </a> --}}
            <div class="btn-group">
                <a href="#" class="ms-3  dropdown-toggle" type="submit" data-bs-toggle="dropdown"
                    style="text-decoration: none;color:grey">
                    <img src="{{ asset('logo/profile.png') }}" height="30px" alt="">
                </a>
                <style>
                    .dropdown-menu2[data-bs-popper] {
                        top: 130%;
                        left: -116px;
                        margin-top: var(--bs-dropdown-spacer)
                    }
                </style>
                <ul class="dropdown-menu dropdown-menu2 dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="{{ route('user-profile') }}" style="font-size: 13px"><img
                                src="{{ asset('logo/sprofile.png') }}" alt="" class="me-3">My Profile</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('user-myorrders') }}" style="font-size: 13px"><img
                                src="{{ asset('logo/sorder.png') }}" alt="" class="me-3">My Order</a></li>
                    <li><a class="dropdown-item" href="{{ route('user-cart') }}" style="font-size: 13px"><img
                                src="{{ asset('logo/scart.png') }}" alt="" class="me-3">My Cart</a></li>
                    <li><a class="dropdown-item" href="{{ route('user-help') }}" style="font-size: 13px"><img
                                src="{{ asset('logo/shelp.png') }}" alt="" class="me-3">Help</a></li>
                    <li><a class="dropdown-item" href="" style="font-size: 13px"><img
                                src="{{ asset('logo/slogout.png') }}" alt="" class="me-3">Logout</a></li>

                </ul>
            </div>


        </div>

    </nav>
@endif
{{-- login modal --}}
<div class="modal fade" style="z-index:23456765" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:0px">
            <div class="row" style="--bs-gutter-x:0">
                <div class="col-lg-6 col-12">
                    <img style="height:100%" src="{{ asset('logo/login.png') }}" height="100%"
                        class="img-fluid w-100 largescreen" alt="">
                    <img style="" src="{{ asset('logo/longtube.png') }}" class="img-fluid w-100 smallscreen"
                        alt="">
                </div>
                <div class="col-lg-6 col-12 p-3">
                    <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                        <div class="d-flex"
                            style="width: 100%;
                            align-items: center;
                            justify-content: space-between;">
                            {{-- <h6 class="modal-title" id="exampleModalLabel"
                                    style="color: #FF4545;font-weight: 600;flex:1">SEND INQUIRY</h6> --}}

                            <button type="button" class="btn-close largescreen" data-bs-dismiss="modal"
                                aria-label="Close"></button>

                            <button type="button" class="btn-close smallflexscreen" data-bs-dismiss="modal"
                                style="position: absolute;
                        top: 16px;
                        left: 0;
                        right: 21px;
                        background: white;
                        border-radius: 50%;
                        align-items: center;
                        justify-content: center;
                        font-weight: 700;
                        color: #000000;"
                                aria-label="Close">X</button>

                        </div>
                        {{-- <div style="font-size: 13px;color:grey" class="mt-1">
                                24/7 We will answer your questions and problems.
                            </div> --}}
                    </div>
                    <div class="modal-body marginmodaltop">
                        <h5 style="color: # FF4545">Welcome to MAXXiSS</h5>
                        <form>
                            <div class="row">
                                <h6 class="mt-lg-2" style="font-size:13px">Please Login to your account.</h6>
                                <h6 class="mt-lg-3 mt-2" style="font-size:13px;color:grey">Enter your registered
                                    mobile
                                    number</h6>

                                <div class=" mt-lg-3 mt-2">
                                    <form action="{{ route('user-homepage') }}" method="POST">
                                        @csrf
                                        <div class="d-flex">
                                            <select name="" class="form-select shadow-none"
                                                style="width:80px;font-size:15px">
                                                <option value="" selected>+91</option>
                                                <option value="">+91</option>
                                                <option value="">+91</option>
                                            </select>
                                            <input type="number" name="phone"
                                                class="form-control shadow-none ms-2 hide-arrow"
                                                placeholder="0000000000">
                                        </div>
                                        <div class="d-flex ">
                                            <div class="position-relative">
                                                <h6 class="mt-3" style="font-size:13px;color:grey">Enter OTP</h6>
                                                <div id="otp"
                                                    class="inputs d-flex flex-row justify-content-center mt-2"> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="first" name="first"
                                                        maxlength="1" /> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="second" name="second"
                                                        maxlength="1" /> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="third" name="third"
                                                        maxlength="1" /> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="fourth" name="fourth"
                                                        maxlength="1" /> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="fifth" name="fifth"
                                                        maxlength="1" /> <input
                                                        class="m-2 text-center form-control rounded" required
                                                        type="text" id="sixth" name="sixth"
                                                        maxlength="1" /> </div>

                                            </div>
                                        </div>
                                        <div class="input-group mb-3 mt-3">
                                            <input type="submit" href=""
                                                class="button btn mt-2 button-background w-100"
                                                style="padding: 7px 10px!important;font-size:13px" value="Get OTP">

                                        </div>
                                    </form>

                                </div>


                                <h6 class="mt-2 text-center" style="font-size:13px">Didn't have an Account? <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#registermodal"
                                        style="color: #FF4545">Register</a></h6>

                            </div>



                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- otp verification modal --}}
{{-- <div class="modal fade" id="loginverificationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:0px">
            <div class="row">
                <div class="col-6">
                    <img style="height: 100%" src="{{ asset('logo/login.png') }}" class="img-fluid w-100"
                        alt="">
                </div>
                <div class="col-6 p-3">
                    <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                        <div class="d-flex"
                            style="width: 100%;
                            align-items: center;
                            justify-content: space-between;">
                          
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                
                    </div>
                    <div class="modal-body">
                        <h5 style="color: #FF4545">Welcome to MAXXiSS</h5>
                        <form>
                            <div class="row">
                                <h6 class="mt-2" style="font-size:13px">Please Login to your account.</h6>
                                <h6 class="mt-3" style="font-size:13px;color:grey">Enter your registered mobile
                                    number</h6>

                                <div class="d-flex mt-3">
                                    <form action="">
                                        <select name="" class="form-select shadow-none"
                                            style="width:80px;font-size:15px">
                                            <option value="" selected>+91</option>
                                            <option value="">+91</option>
                                            <option value="">+91</option>
                                        </select>
                                        <input type="text" name="phone" class="form-control shadow-none ms-2"
                                            placeholder="0000000000">
                                    </form>


                                </div>

                                <div class="input-group mb-3 mt-3">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="button btn mt-2 button-background w-100"
                                        style="padding: 7px 10px!important;font-size:13px">Submit
                                    </a>
                                </div>
                                <h6 class="mt-2 text-center" style="font-size:13px">Didn't have an Account? <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#registermodal"
                                        style="color: #FF4545">Register</a></h6>

                            </div>



                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
{{-- register modal --}}
<div class="modal fade" style="z-index:999990" id="registermodal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:0px">
            <div class="modal-header border-0 p-0">



                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    style="position: absolute;
                            top: 16px;
                            left: 0;
                            right: 21px;
                            background: white;
                            border-radius: 50%;
                            align-items: center;
                            display: flex;
                            justify-content: center;
                            font-weight: 700;
                            color: #000000;"
                    aria-label="Close">X</button>


            </div>
            <style>
                .registercontainser {
                    --bs-gutter-x: 0 !important
                }

                .registerrow {
                    --bs-gutter-x: 0 !important
                }
            </style>
            <div class="container-fluid registercontainser">
                <div class="row p-0 registerrow">
                    <div class="col-12 p-0">
                        <img style="height: 100%" src="{{ asset('logo/resgister.png') }}" class=" w-100"
                            alt="">
                    </div>
                </div>

                <div class="modal-body">
                    <h5 style="color: #FF4545" class="text-center">New User In MAXXiSS?</h5>
                    <div class="row registerrow">
                        <div class="col-10 mx-auto">
                            <h6 class="mt-3 mb-2" style="font-size:13px;color:rgb(46, 46, 46)">Please enter the
                                details below for the registration</h6>
                            <form>
                                <div class="row ">
                                    <div class="col-6">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/person.png') }}" alt=""
                                                    height="18px">
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
                                                <img src="{{ asset('logo/person.png') }}" alt=""
                                                    height="18px">
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
                                            class="form-control shadow-none" placeholder="E-mail"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="tel"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Phone"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/loc.png') }}" alt=""
                                                    height="18px">
                                            </span>
                                            <input type="tel"
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="Locality"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/address.png') }}" alt=""
                                                    height="18px">
                                            </span>
                                            <input type="tel"
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="Pincode"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 ">
                                        <a href="" class="button btn mt-2 button-background w-100"
                                            style="padding: 7px 10px!important;font-size:13px"> Regsiter
                                        </a>
                                    </div>
                                    <h6 class="mt-2 text-center" style="font-size:13px">Already have an Account? <a
                                            href="#" data-bs-toggle="modal" data-bs-target="#loginmodal"
                                            style="color: #FF4545">Login</a></h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function(event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }
        OTPInput();
    });
</script>
