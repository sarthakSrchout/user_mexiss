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
                <img src="{{ $term->banner_image }}" class="w-100" height="200px" style="position: absolute">
                <h6 class="termandcondition">
                    {{ $term->page_title }}</h6>
            </div>
        </div>
    </div>
    @foreach ($term->section as $item)
        @if (sizeof($item->item) <= 0)
            <div class="container-fluid mb-5" style="background: #FDEFED">
                <div class="row p-3 p-lg-5">
                    <div class="col-lg-1 d-none d-lg-block"></div>
                    <div class="col-lg-5 col-12 order-2 order-lg-1 mx-auto">
                        <h3 style="color: #FF4545" class="mb-4 mt-3">{{ $item->section_title }}</h3>
                        <p style="font-size: 14px">{!! $item->section_description !!}
                    </div>
                    <div class="col-lg-6 col-11 order-1 order-lg-2 mx-auto" style="justify-content: center;display:flex">
                        @if ($item->section_image != null)
                            <div class="col-12 col-lg-6 mx-auto order-1 order-lg-2"
                                style="justify-content: center;display:flex">
                                <div>
                                    <img src="{{ $item->section_image }}" class="aboutusimage img-fluid"
                                        style="align-items: center" alt="">

                                </div>
                                {{-- <div style="">
                <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

            </div> --}}
                            </div>
                        @endif
                        {{-- <div style="">
                        <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

                    </div> --}}
                    </div>
                </div>
            </div>
        @else
            <div class="container mt-2 mb-5">
                <div class="row">
                    <div class="col-12 col-lg-11 mx-auto">
                        @foreach ($item->item as $i)
                            <div class="card border-0">
                                <div class="card-body">
                                    <h6 class="mb-3">{{ $i->title }}</h6>
                                    <p style="font-size: 13px">{!! $i->description !!}</p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif
    @endforeach







    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
