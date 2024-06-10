@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
    <style>
        .quantity {
            display: flex;
            border: 1px solid grey;
            border-radius: 0px;
            overflow: hidden;
            width: 104px;
            height: 37px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .quantity button {
            background-color: #ffffff;
            color: #000000;
            border: none;
            cursor: pointer;
            font-size: 20px;
            width: 30px;
            height: auto;
            text-align: center;
            transition: background-color 0.2s;
        }

        .quantity button:hover {
            background-color: #ffffff;
        }

        .input-box {
            width: 40px;
            text-align: center;
            border: none;
            padding: 8px 10px;
            font-size: 16px;
            outline: none;
            border: 1px solid grey;
            border-top: 0px;
            border-bottom: 0px
        }


        /* Hide the number input spin buttons */
        .input-box::-webkit-inner-spin-button,
        .input-box::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .input-box[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
    <style>
        .card-input-element {
            display: none;

        }

        .card-input {
            box-shadow: 0px 0px 4px 0px #dbdbdb
        }

        .card-input-element:checked+.card-input {
            box-shadow: 0px 0px 3px 0px #FF4545
        }

        @media only screen and (max-width: 991px) {
            .cardmt {
                margin-top: -40px;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {

            .largeborder {
                border-right: .5px solid rgb(181, 181, 181)
            }
        }
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001;">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-cart') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Cart </p>
        </div>


    </nav>
    <div class="container ">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex" style="justify-content: space-between">
                <div class="d-flex align-items-center largeflexscreen">
                    <a href="{{ route('user-homepage') }}" class="d-flex align-items-center link">
                        <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                        <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    </a>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Add Address</p>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ route('user-cart') }}" class="me-1 link" style="font-size: 16px;">Cart</a>
                    <p class="mt-3">--------------</p>
                    <p class="mt-3 me-1 ms-1" style="font-size: 16px;color:#FF4545;text-decoration:underline ">Address</p>
                    <p class="mt-3">--------------</p>
                    <p class="mt-3 ms-1" style="font-size: 16px">Payment</p>

                </div>
                <div class="d-flex align-items-center largeflexscreen">
                    <img class="ms-1" src="{{ asset('logo/shield.png') }}" height="17px" alt="">
                    <p class=" mt-3 ms-1" style="font-size: 14px;color:#313131;flex:1">100% Secure</p>
                </div>
            </div>
            <div class="col-12 smallflexscreen" style="justify-content: end">
                <div class="d-flex align-items-center smallflexscreen me-4">
                    <img class="ms-1" src="{{ asset('logo/shield.png') }}" height="17px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#313131;flex:1">100% Secure</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid mt-2"
        style="border-top: .5px solid rgb(181, 181, 181);border-bottom: .5px solid rgb(181, 181, 181) ">
        <div class="row">
            <div class="col-12 col-lg-7 mt-4 mb-5 largeborder">
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto">
                        <div class="d-flex  mb-3 ">
                            <p style="flex:1">Select Delivery Address</p>
                            <button class="btn homeparagraph text-light button-background" onclick="insertfunction()"
                                style="border-radius: 0px;font-size:13px;height:32px" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Add New
                                Address</button>

                        </div>

                        @foreach ($address as $item)
                            <div class="col-12 mb-3">
                                <label class="w-100">
                                    <input type="radio" value="{{ $item->id }}" name="product"
                                        @if ($cart->user_address_id == $item->id) checked @endif class="card-input-element"
                                        style="position: relative" />

                                    <div class="card w-100 card-input border-0" style="border-radius:0px">
                                        <div class="card-body p-4">
                                            <h6>{{ $item->full_name }}</h6>
                                            <p style="margin-top: px;font-size:13.5px">{{ $item->building_no_or_name }},
                                                {{ $item->colony }}</p>
                                            <p style="margin-top: -12px;font-size:13.5px">{{ $item->state }} ,
                                                {{ $item->city }} , {{ $item->pincode }}</p>
                                            <p style="margin-top: -12px;font-size:13.5px">Mobile :
                                                {{ $item->phone_number }}</p>
                                            <p style="margin-top: -12px;font-size:13.5px">Type :
                                                {{ $item->address_type == '0' ? 'Work' : 'Home' }}</p>

                                            <button onclick="editfunction({{ $item->id }})" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                class="btn homeparagraph text-light button-background"
                                                style="border-radius: 3px;font-size:12px;height:25px;padding:2px 10px;color:#FF4545 !important;border:1px solid #FF4545;background:white !important"
                                                type="button">Edit</button>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endforeach


                        {{-- <div class="col-12 mb-3     largescreen">
                            <button class="btn w-100 homeparagraph text-light button-background" data-bs-toggle="modal" onclick="insertfunction()"
                                data-bs-target="#exampleModal"
                                style="border-radius: 3px;font-size:14px;color:#FF4545 !important;box-shadow: 0px 0px 2px 0px #FF4545;background:white !important;align-items: center;
                                text-align: left;
                                display: flex;"
                                type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    class="ms-2 me-3" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>Add New Address</button>
                        </div>
 --}}


                        {{-- small address --}}
                        {{-- <div class="col-12 mb-3     smallscreen">
                            <label class="w-100">
                                <input type="radio" name="product" class="card-input-element"
                                    style="position: relative" />

                                <div class="card w-100 card-input border-0" style="border-radius:0px">
                                    <div class="card-body p-4">
                                        <h6>GKJS</h6>
                                        <p style="margin-top: px;font-size:13.5px">Near Jagannath Temple, XXXXXX</p>
                                        <p style="margin-top: -12px;font-size:13.5px">XXXXXXXXXXXXXXXXXXX</p>
                                        <p style="margin-top: -12px;font-size:13.5px">Mobile : 8098989823</p>
                                        <button class="btn homeparagraph text-light button-background"
                                            style="border-radius: 3px;font-size:12px;height:25px;padding:2px 10px;color:#FF4545 !important;border:1px solid #FF4545;background:white !important"
                                            type="button">Remove</button>
                                        <button class="btn homeparagraph text-light button-background"
                                            style="border-radius: 3px;font-size:12px;height:25px;padding:2px 10px;color:#FF4545 !important;border:1px solid #FF4545;background:white !important"
                                            type="button">Edit</button>
                                    </div>
                                </div>
                            </label>
                        </div> --}}
                        {{-- <div class="col-12 mb-3  smallscreen">
                            <button class="btn w-100 homeparagraph text-light button-background"
                                style="border-radius: 3px;font-size:14px;color:#FF4545 !important;box-shadow: 0px 0px 2px 0px #FF4545;background:white !important;
                                text-align: center;
                                display: flex;justify-content: center"
                                type="button">Change Address</button>
                        </div> --}}
                        {{-- product data --}}
                        {{-- <div class="smallscreen mb-5"></div>
                        <div class="card cardmt smallscreen" style="border: 0px">
                            <div class="card-body">
                                <div class="d-flex row p-0">
                                    <div class="col-6 p-0">
                                        <img src="{{ asset('logo/productImage.png') }}" class="img-fluid"
                                            style="height: 250px" alt="">
                                    </div>
                                    <div class="col-6 p-4" style="margin-top: -20px">
                                        <h6>REDFORD CB-16 COLD BOX</h6>
                                        <p style="font-size: 15px;color:black;margin-top:-px">Rs. 2837</p>
                                        <div class="d-flex mt-4" style="height: 5px;align-items:center">
                                            <img src="{{ asset('logo/stars.png') }}" style="margin-top:-13px"
                                                alt="">
                                            <p style="font-size: 13px" class="ms-2">(5)</p>
                                        </div>

                                        <p style="font-size: 13px;color:black" class="mt-2">Quantity</p>
                                        <div class="quantity">
                                            <button class="minus" aria-label="Decrease">&minus;</button>
                                            <input type="number" class="input-box" value="1" min="1"
                                                max="10">
                                            <button class="plus" aria-label="Increase">&plus;</button>
                                        </div>
                                        <p class="mt-3" style="font-size: 14px;color:black;margin-top:-px">Seller :
                                            MTAILMODEECOM</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cardmt smallscreen" style="border: 0px">
                            <div class="card-body">
                                <div class="d-flex row p-0">
                                    <div class="col-6 p-0">
                                        <img src="{{ asset('logo/productImage.png') }}" class="img-fluid"
                                            style="height: 250px" alt="">
                                    </div>
                                    <div class="col-6 p-4" style="margin-top: -20px">
                                        <h6>REDFORD CB-16 COLD BOX</h6>
                                        <p style="font-size: 15px;color:black;margin-top:-px">Rs. 2837</p>
                                        <div class="d-flex mt-4" style="height: 5px;align-items:center">
                                            <img src="{{ asset('logo/stars.png') }}" style="margin-top:-13px"
                                                alt="">
                                            <p style="font-size: 13px" class="ms-2">(5)</p>
                                        </div>

                                        <p style="font-size: 13px;color:black" class="mt-2">Quantity</p>
                                        <div class="quantity">
                                            <button class="minus" aria-label="Decrease">&minus;</button>
                                            <input type="number" class="input-box" value="1" min="1"
                                                max="10">
                                            <button class="plus" aria-label="Increase">&plus;</button>
                                        </div>
                                        <p class="mt-3" style="font-size: 14px;color:black;margin-top:-px">Seller :
                                            MTAILMODEECOM</p>

                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-12 mt-lg-4 mt-0 mb-5 ">
                <div style="text-align: center;
                justify-content: center;
                display: flex;">
                    <h6>Price Details</h6>
                </div>
                <div style="text-align: center;
                justify-content: center;
                display: flex;">
                    <div class=""
                        style="    width: 150px;
                    height: 1px;
                    background: black;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto mt-lg-5 mt-3">
                        <div class="d-flex ">
                            <p style="font-size: 14px;flex-grow:1">Price({{ $cart?->no_of_products }} item)</p>
                            <p style="font-size: 14px;font-weight: 600">Rs {{ $cart?->total_original_price }}</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Total Discounted Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-success">Rs
                                {{ $cart?->total_discounted_price }}</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Discount</p>
                            <p style="font-size: 14px;font-weight: 600">
                                @if ($cart?->coupon_id)
                                    <span class="text-success">Coupon Discount
                                        (Rs.{{ $cart?->total_coupon_discount }}\-)</span>
                                @endif-Rs
                                {{ $cart?->total_original_price - $cart?->total_discounted_price + $cart?->total_coupon_discount }}

                            </p>
                        </div>

                        <div class="mt-3"
                            style="    width: 100%;
                    height: 1px;
                    background: black;">
                        </div>
                        <div class="d-flex mt-3">
                            <p style="font-size: 14px;flex-grow:1;font-weight:600">Total Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-dark">Rs
                                {{ $cart?->total_cart_value }}</p>
                        </div>
                        <a href="#" id="continueBtn"
                            class="btn mt-2  homeparagraph w-100 text-light button-background" style="border-radius: 0px;"
                            type="button">Continue</a>


                    </div>



                </div>

            </div>
        </div>

    </div>



    <div class="modal fade @if (Session::has('addressformSubmitted')) show @endif" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999999999999999;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius:0px;">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
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
                                <h6 class="modal-title" id="addresstitle" style="color: #FF4545;font-weight: 600;flex:1">
                                    ADD NEW ADDRESS</h6>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('user-addresspostoperation') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                            </span>
                                            <input type="text" required
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="Full Name *" id="full_name"
                                                name="full_name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group d-flex ">
                                        <select name="country_table_id" id="country_table_id"
                                            class="form-select shadow-none"
                                            style="width: 85px; font-size: 13.5px;border-radius:0">
                                            @foreach ($country as $item)
                                                <option value="{{ $item->id }}"
                                                    data-code="{{ $item->country_phone_code }}"
                                                    @if ($item->country_phone_code == '+91') selected @endif>
                                                    {{ $item->country_phone_code }} ( {{ $item->country_name }} )</option>
                                            @endforeach
                                            <!-- Add more options as needed -->
                                        </select>
                                        <input type="number" value="" required id="phone_number"
                                            style="border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            name="phone_number" class="form-control shadow-none ms-2"
                                            placeholder="Your Phone Number *">
                                    </div>
                                    <span id="phone_number_validation" class="text-danger mb-3 mt-2"
                                        style="font-size: 10px;"></span>

                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="number" value="" id="alt_phone_number"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Alt Phone Number"
                                            aria-label="Username" name="alt_phone_number"
                                            aria-describedby="basic-addon1">
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="input-group mb-3 inquiryinput" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="state" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="State *" aria-label="Username"
                                            name="state" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput col-6" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="city" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="City *" aria-label="Username"
                                            name="city" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput col-6" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="pincode" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Pincode *"
                                            aria-label="Username" name="pincode" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="building_no" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Building No/Name *"
                                        aria-label="Username" name="building_no" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="colony" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Colony *" aria-label="Username"
                                        name="colony" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="landmark"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Landmark " aria-label="Username"
                                        name="landmark" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <select name="address_type" class="form-select" id="address_type" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;">
                                        <option value="" selected disabled>Select a Address Type *</option>
                                        <option value="1">Home</option>
                                        <option value="0">Work</option>
                                    </select>

                                </div>
                                <div id="addressdiv"></div>
                                <div class="input-group mb-3 ">
                                    <button type="submit" id="addressubmitbutton"
                                        class="button btn mt-2 button-background w-100"
                                        style="padding: 7px 10px!important;font-size:13px"> ADD NEW ADDRESS
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let id;

        // Function to check if any radio button is selected
        function isAnyRadioButtonSelected() {
            var radioButtons = document.querySelectorAll('input[name="product"]');
            var anyChecked = false;
            radioButtons.forEach(function(radioButton) {
                if (radioButton.checked) {
                    id = radioButton.value; // Corrected the assignment here
                    anyChecked = true;
                }
            });
            return anyChecked;
        }

        // Event handler for the "Continue" button click
        document.getElementById('continueBtn').addEventListener('click', function(event) {
            if (!isAnyRadioButtonSelected()) {
                event.preventDefault(); // Prevent the default action (redirecting to another page)
                toastr.error('Please select an address to continue!');
            } else {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                $.ajax({
                    url: "{{ route('user-address') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(response);
                        window.location.href = "{{ route('user-payment') }}";
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });

            }
        });
    </script>


    <script>
        function validatePhoneNumberLength() {
            var selectedCode = document.getElementById('country_table_id').options[document.getElementById(
                'country_table_id').selectedIndex].getAttribute('data-code');
            console.log(selectedCode)
            var phoneNumberInput = document.getElementById('phone_number');
            var phoneNumberInputDiv = document.getElementById('phone_number_validation');
            var addressubmitbutton = document.getElementById('addressubmitbutton');
            var phoneNumber = phoneNumberInput.value;

            if (selectedCode === '+91') {
                if (phoneNumber.length !== 10) {
                    phoneNumberInputDiv.innerHTML = 'Phone number must be exactly 10 digits for India (+91).';
                    addressubmitbutton.disabled = true
                } else {
                    phoneNumberInputDiv.innerHTML = ''
                    addressubmitbutton.disabled = false;
                }
            } else {
                phoneNumberInputDiv.innerHTML = '';
                addressubmitbutton.disabled = false

            }
        }

        document.getElementById('country_table_id').addEventListener('change', function() {
            validatePhoneNumberLength();
        });

        document.getElementById('phone_number').addEventListener('input', function() {
            validatePhoneNumberLength();
        });


        // Trigger initial validation check on page load
        document.addEventListener('DOMContentLoaded', function() {
            validatePhoneNumberLength();
        });
    </script>
    <script>
        let currentpage = 'insert';

        function insertfunction() {
            currentpage = 'insert';
            document.getElementById('addresstitle').innerHTML = 'ADD NEW ADDRESS';
            document.getElementById('full_name').value = '';
            document.getElementById('phone_number').value = '';
            document.getElementById('alt_phone_number').value = '';
            document.getElementById('country_table_id').value = '76';
            document.getElementById('state').value = '';
            document.getElementById('city').value = '';
            document.getElementById('pincode').value = '';
            document.getElementById('building_no').value = '';
            document.getElementById('colony').value = '';
            document.getElementById('landmark').value = '';
            document.getElementById('address_type').value = '';
            document.getElementById('addressubmitbutton').innerHTML = 'ADD NEW ADDRESS';
            document.getElementById('addressdiv').innerHTML = ''
        }

        function editfunction(id) {
            jQuery.ajax({
                url: `{{ url('user/getaddressdetails') }}/${id}`,
                type: 'GET',
                success: function(response) {
                    // console.log(response)
                    currentpage = 'edit';
                    document.getElementById('addresstitle').innerHTML = 'EDIT ADDRESS';
                    document.getElementById('full_name').value = response.full_name;
                    document.getElementById('phone_number').value = response.phone_number;
                    document.getElementById('alt_phone_number').value = response.alt_phone_number;
                    document.getElementById('country_table_id').value = response.country_table_id;
                    document.getElementById('state').value = response.state;
                    document.getElementById('city').value = response.city;
                    document.getElementById('pincode').value = response.pincode;
                    document.getElementById('building_no').value = response.building_no_or_name;
                    document.getElementById('colony').value = response.colony;
                    document.getElementById('landmark').value = response.landmark;
                    document.getElementById('address_type').value = response.address_type;
                    document.getElementById('addressubmitbutton').innerHTML = 'SAVE ADDRESS';
                    document.getElementById('addressdiv').innerHTML =
                        '<input type="text" hidden value="' + response.id +
                        '" name="address_id" id="address_id" class="form-control">';

                },
            });

        }
    </script>


    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
