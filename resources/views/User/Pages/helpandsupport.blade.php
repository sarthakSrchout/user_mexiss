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
                <img src="{{ $help->banner_image }}" class="w-100 bannerheight" style="position: absolute">
                <h6 class="helpandsupp">
                    {{ $help->page_title }}</h6>
            </div>
        </div>
    </div>

    @foreach ($help->section as $item)
        <div class="container-fluid ">
            <div class="row p-lg-5 p-3">
                <div class="col-12 text-center">
                    <h3 style="color: #FF4545" class="mb-4 mt-3 welcomefont">{{ $item->section_title }}
                    </h3>

                </div>
                <div class="col-lg-10 col-11 mx-auto">
                    <p style="font-size: 13.5px" class="textcenter">{{ $item->section_description }}</p>
                </div>
                <div class="col-6 mx-auto mt-3" style="justify-content: center;display:flex">
                    <img src="{{ $item->section_image }}" class="img-fluid" style="align-items: center" alt="">

                    {{-- <div style="">
                    <img src="{{ asset('logo/aboutus2.png') }}" style="align-items: center" height="140px" alt="">

                </div> --}}
                </div>
            </div>
        </div>
        @if (sizeof($item?->item) > 0)
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-10 col-11 mx-auto">
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
