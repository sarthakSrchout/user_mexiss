@extends('User.bin.upper')
@section('title')
    Product Details
@endsection


@section('body')
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
            <a href="{{ route('user-address') }}">
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
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">Select Payment Method</p>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ route('user-cart') }}" class="me-1 link" style="font-size: 16px;">Cart</a>
                    <p class="mt-3">--------------</p>
                    <a href="{{ route('user-address') }}" class=" me-1 link" style="font-size: 16px">Address</a>
                    <p class="mt-3">--------------</p>
                    <p class="mt-3 ms-1" style="font-size: 16px;color:#FF4545;text-decoration:underline ">Payment</p>

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

    <div class="container-fluid"
        style="border-top: .5px solid rgb(181, 181, 181);border-bottom: .5px solid rgb(181, 181, 181) ">
        <div class="row">
            <div class="col-lg-7 col-12 mt-5 mb-5 largeborder" style="">
                <div class="row">
                    <div class="col-11 col-lg-5 mx-auto">
                        <h6 style="color: #FF4545" class="mb-4">Choose Payment Method</h6>
                        <div style="font-size: 14px;" class="mt-2">
                            <label for="cod" style="display: flex;
                            align-items: center;">
                                <input type="radio" id="cod" name="payment" value="0" class="me-3">
                                Cash on Delivery
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="razerpay" style="display: flex;
                            align-items: center;">
                                <input type="radio" id="razerpay" name="payment" value="1" class="me-3">
                                Razerpay
                            </label>
                        </div>
                        {{-- <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Credit/Debit Card
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Paytm/Wallets
                            </label>
                        </div>
                        <div style="font-size: 14px;" class="mt-3">
                            <label for="" style="display: flex;
                            align-items: center;">
                                <input type="radio" name="payment" id="" class="me-3">
                                Net Banking
                            </label>
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
                            <p style="font-size: 14px;flex-grow:1">Total Cart Price</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-success">Rs
                                {{ $cart?->total_cart_value }}</p>
                        </div>
                        <div class="d-flex">
                            <p style="font-size: 14px;flex-grow:1">Tax Amount</p>
                            <p style="font-size: 14px;font-weight: 600">
                                Rs
                                {{ $cart?->total_tax_amount }}

                            </p>
                        </div>

                        <div class="mt-3"
                            style="    width: 100%;
                    height: 1px;
                    background: black;">
                        </div>
                        <div class="d-flex mt-3">
                            <p style="font-size: 14px;flex-grow:1;font-weight:600">Payable Amount</p>
                            <p style="font-size: 14px;font-weight: 600" class="text-dark">Rs
                                {{ round($cart?->total_cart_value + $cart?->total_tax_amount) . '\-' }}</p>
                        </div>
                        <a href="#" id="continueBtn"
                            class="btn mt-2  homeparagraph w-100 text-light button-background" style="border-radius: 0px;"
                            type="button">Continue</a>


                    </div>



                </div>

            </div>
        </div>

    </div>





    {{-- footer section --}}
    @include('User.bin.footer.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let id;

        // Function to check if any radio button is selected
        function isAnyRadioButtonSelected() {
            var radioButtons = document.querySelectorAll('input[name="payment"]');
            var anyChecked = false;
            radioButtons.forEach(function(radioButton) {
                if (radioButton.checked) {
                    id = radioButton.value;
                    anyChecked = true;
                }
            });
            return anyChecked;
        }

        // Event handler for the "Continue" button click
        document.getElementById('continueBtn').addEventListener('click', function(event) {
            if (!isAnyRadioButtonSelected()) {
                toastr.error('Select a Payment Method to Continue!');

                event.preventDefault(); // Prevent the default action (redirecting to another page)
            } else {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                document.getElementById('overlay').style.display = 'block';
                document.getElementById('loader-container').style.display = 'block';

                $.ajax({
                    url: "{{ route('user-placeorder') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        pay_method: id
                    },
                    success: function(response) {
                        if (response.status == 2) {
                            toastr.error('An Unkown Error Occured! Try again after sometime!');
                        }
                        if (response.status == 1) {
                            window.location.href = "{{ route('user-placed') }}";

                            toastr.success('Order Placed Successfully!');
                        }
                        document.getElementById('overlay').style.display = 'none';
                        document.getElementById('loader-container').style.display = 'none';
                        // window.location.href = "{{ route('user-payment') }}";
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }

                });

            }
        });
    </script>
@endsection
