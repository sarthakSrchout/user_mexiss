@extends('User.bin.upper')
@section('title')
    Product Details
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
    </style>
    @include('User.bin.navBar.navBar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
        style="top: 0;position:sticky;z-index:101001">

        <div class="d-flex align-items-center" style="height: 80px">
            <a href="{{ route('user-help') }}">
                <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

            </a>
            <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600">FAQ</p>
        </div>


    </nav>
    <div class="container largescreen">
        <div class="row mt-2 mb-2">
            <div class="col-12 d-flex">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                    <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                    <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                    <p class="mt-3 ms-1" style="font-size: 14px;color:#FF4545;flex:1">FAQ</p>
                </div>

            </div>
        </div>

    </div>
    <div class="container-fluid" style="margin-bottom: 15%">
        <div class="row p-0">
            <div class="col-12 p-0">
                <img src="{{ $faq->banner_image }}" class="w-100" height="200px" style="position: absolute">
                {{-- <h6
                    style="z-index: 100;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin-top: 6%;
                color: white;
                font-size: 30px;">
                    Terms & Conditions</h6> --}}
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-12 text-center mx-auto">
                <h2 style="color: #FF4545" class="mmt-3">{{ $faq->page_title }}</h2>

            </div>

        </div>
    </div>

    <div class="container  mb-5">
        <div class="row">
            <div class="col-lg-10 col-11 mx-auto">
                @foreach ($faq->section  as $i)
                   @foreach ($i->item as $it)
                   <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">{{ $it->title }}</h5>
                        <p style="font-size: 13px">{!! $it->description !!}</p>
                    </div>
                </div>
                   @endforeach
                @endforeach

            </div>
        </div>
    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
