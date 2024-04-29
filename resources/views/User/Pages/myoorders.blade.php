@extends('User.bin.upper')
@section('title')
    Product Details
@endsection

<style>
    @media only screen and (max-width: 991px) {
        .tickposition {
            position: absolute;
            top: 12%;
            left: 14%;
        }

        .ordercardpadding {
            display: flex;
            padding: 0px 0px
        }

        .imageheight {
            height: 180px;
        }

        .returnbutton {
            background: white;
            border: 1px solid grey;
            font-size: 12px;
            padding: 3px 17px;
            margin-top: -5px;
        }

        .prdtitle {
            font-size: 13.5px
        }

        .returntext {
            font-size: 12px;
            color: black;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .tickposition {
            position: absolute;
            top: 12%;
            left: 10%;
        }

        .ordercardpadding {
            display: flex;
            padding: 25px 55px
        }

        .imageheight {
            height: 200px;
        }

        .returnbutton {
            background: white;
            border: 1px solid grey;
            font-size: 13px;
            padding: 3px 17px;
            width: 100px
        }

        .returntext {
            font-size: 13px;
            color: black;
        }
    }
</style>

@section('body')
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-homepage') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">My Orders</p>
        </div>

    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center" style="flex: 1">
                    <a href="{{ route('user-homepage') }}" class="d-flex align-items-center link">
                        <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                        <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    </a>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">My Order</p>
                </div>
                <a href="{{ route('user-profile') }}" style="text-decoration: none;color:black">
                    <div class="d-flex align-items-center">
                        @if (!$user->profile_pic)
                            <img src="{{ asset('logo/profile-1.png') }}" style="height: 30px;border-radius: 50%"
                                alt="">
                        @else
                            <img src="{{ $user->profile_pic }}" style="height: 30px;border-radius: 50%" alt="">
                        @endif
                        <div>
                            <p class="mt-3 ms-4" style="font-size: 14px">Account</p>
                            <p class="ms-4" style="font-size: 14px;color:grey;margin-top: -15px;">{{ $user->first_name }}
                            </p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
        <hr>

    </div>
    <div class="container mt-4 mt-lg-0">
        <div class="row">
            <div class="col-12 d-lg-flex">
                <div class="d-flex align-items-center order-2 order-lg-1" style="flex: 1">
                    <div>
                        <p class=" " style="font-size: 14px;font-weight: 600">All Orders</p>
                        <p class="" style="font-size: 14px;color:grey;margin-top: -15px;">From Anytime</p>
                    </div>

                </div>
                <div class="col-12 col-lg-5 order-1 order-lg-2">
                    <div class="d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                <img src="{{ asset('logo/search.png') }}" alt="" height="18px">
                            </span>
                            <input type="text" id="search"
                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                class="form-control shadow-none" placeholder="Search in Order" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="ms-4">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="button btn button-background" style="width: 80px">Filter</button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div id="paginationdata" class="pagination-container">
                @include('User.Pages.myorderpagination')

            </div>
            <input type="hidden" id="hidden_page" name="hidden_page" value="1">

        </div>
    </div>



    {{-- //filter modal --}}
    <div class="modal fade" style="z-index: 999999" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="row">

                    <div class="col-12  ">
                        <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                            <div class="d-flex"
                                style="width: 100%;
                            align-items: center;
                            justify-content: space-between;">


                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                        <div class="modal-body" style="padding: 0px 40px">
                            <form method="POST" action="{{ route('user-order-filter') }}">
                                @csrf
                                <h6 class="modal-title mb-3" id="exampleModalLabel"
                                    style="color: #000000;font-weight: 600;">Filter Orders</h6>
                                <div style="font-size: 14px;">
                                    <label for="onway"
                                        style="display: flex;
                                        align-items: center;">
                                     
                                        <input type="radio" name="order" id="onway" value="1" class="me-3" @if($ordervalue == '1') checked @endif>
                                        On the Way
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="delivered"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="order" value="2" id="delivered" class="me-3" @if($ordervalue == '2') checked @endif>
                                        Delivered
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="Cancel"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="order" value="3" id="Cancel" class="me-3" @if($ordervalue == '3') checked @endif>
                                        Cancel
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="Refund"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="order" value="4" id="Refund" class="me-3" @if($ordervalue == '4') checked @endif>
                                        Return
                                    </label>
                                </div>
                                <hr>
                                <h6 class="modal-title mb-4" id="exampleModalLabel"
                                    style="color: #000000;font-weight: 600;flex:1">Time</h6>
                                <div style="font-size: 14px;">
                                    <label for="anytime"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="time" value="1" id="anytime" class="me-3"  @if($timevalue == '1') checked @endif>
                                        Any Time
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="30days"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="time" value="2" id="30days" class="me-3"  @if($timevalue == '2') checked @endif>
                                        Last 30 days
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="6month"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="time" value="3" id="6month" class="me-3"  @if($timevalue == '3') checked @endif>
                                        Last 6 Months
                                    </label>
                                </div>
                                <div style="font-size: 14px;" class="mt-3">
                                    <label for="lastyear"
                                        style="display: flex;
                                        align-items: center;">
                                        <input type="radio" name="time" value="4" id="lastyear" class="me-3"  @if($timevalue == '4') checked @endif>
                                        Last year
                                    </label>
                                </div>

                                <div class="d-flex row mt-3 mb-4">
                                    <div class="col-6">
                                        <a href="{{ route('user-order-filter',['time' => 0 ,'order' => 0]) }}" class="btn w-100"
                                            style="border: 1px solid grey;font-size:13px;background: white;padding: 5px;font-weight: 600;text-decoration: none;width:100%">Clear
                                            Filter</a>
                                    </div>
                                    <div class="col-6">
                                        <button class="w-100 text-light" type="submit"
                                            style="border: 1px solid rgb(255, 255, 255);font-size:13px;background: #FF4545;padding: 5px;font-weight: 600">Apply</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- footer section --}}
    @include('User.bin.footer.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <script>
        $(document).ready(function() {
            const fetch_data = (page, search) => {

                if (search === undefined) {
                    search = "";
                }
                
                $.ajax({
                    url: "{{ route('user-order-search') }}" + "/?page=" + page + "&search=" + search ,
                    success: function(data) {
                        // console.log(data)
                        $('#paginationdata').html('');
                        $('#paginationdata').html(data);
                    }
                })
            }

            $('#search').on('keyup', function() {
                var search = $('#search').val();
                var page = $('#hidden_page').val();
                fetch_data(page, search);
            });

            $('body').on('click', '.page-item a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var search = $('#search').val();
                fetch_data(page, search);
            });
        });
    </script>
@endsection
