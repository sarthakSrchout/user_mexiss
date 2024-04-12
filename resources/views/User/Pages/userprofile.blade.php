@extends('User.bin.upper')
@section('title')
    User Profile
@endsection


@section('body')
<style>
        .profile-pic {
            color: transparent;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .profile-pic input {
            display: none;
        }

        .profile-pic img {
            position: absolute;
            width: 120px;
            height: 120px;
            box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
            border-radius: 100px;
            z-index: 0;
        }

        .profile-pic .-label {
            cursor: pointer;
            height: 120px;
            width: 120px;
        }

        .profile-pic:hover .-label {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            color: #fafafa;
            height: 120px;
            width: 120px;
            transition: background-color 0.2s ease-in-out;
            border-radius: 100px;
            /* margin-bottom: 0; */
        }

        .profile-pic span {
            display: inline-flex;
            padding: 0.2em;
            height: 2em;
        }
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001;">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Profile </p>
        </div>


    </nav>
    <div class="container mb-5 ">
        <div class="row mt-5 mb-2">
            <div class="col-1 largescreen">
                <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">

            </div>
            <div class="col-3 largescreen">
                @include('User.Pages.profilesidebar')
            </div>
            <div class="col-lg-6 col-12 mx-auto">
                <div class="card" style="border: none">
                    <div class="card-body">
                        <h4 style="color: #ff4545" class="text-center">Your Account</h4>
                        <p class="text-center largescreen" style="font-size: 13px">Please make sure that these details are up to date as
                            they will be used for your bookings and communication with us.</p>
                        <form>
                            <div class="row">

                                <div class="mb-3">
                                    <div class="profile-pic">
                                        <label class="-label" for="file">
                                            <span class="glyphicon glyphicon-camera"></span>
                                            <span>Change Image</span>
                                        </label>
                                        <input id="file" type="file" required name="profile"
                                            onchange="loadFile(event)" />
                                        <img src="{{ asset('logo/male.png') }}" id="output" width="120px"
                                            height="120px" />

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="First Name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Last name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="input-group mb-3 inquiryinput">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/mail.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="email"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="E-mail" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="tel"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Phone" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3 inquiryinput">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address1.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="tel"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Address" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3 inquiryinput">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="tel"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Pincode" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="input-group mb-3 ">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="button btn mt-2 button-background w-100"
                                    style="padding: 7px 10px!important;font-size:13px"> Save
                                </a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>
        var loadFile = function(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>


    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
