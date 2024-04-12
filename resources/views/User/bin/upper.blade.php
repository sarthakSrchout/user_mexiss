<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <style>
        .border-warning-4x {
            border: 8px solid #ffc107 !important
        }


        .primary-color {
            background: #FF4545 !important;
        }

        .secondary-color {
            background: #212121 !important;
        }
    </style>
    <style>
        .button-background {
            background-image: linear-gradient(to left, #ff4545, #fe574f, #fd6659, #fc7363, #fa806e) !important;
        }



        .footer-test {
            width: 100%;
            height: 350px;
            background-size: cover;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('logo/footer-email.png') }}');
            position: relative;
        }

        .homeparagraph {
            font-size: 14px;
            color: #fff;
            font-weight: 400;
            word-spacing: 0px
        }

        .blurred {
            position: relative;
            border-radius: 3px;
            padding: 5px 16px;
            background: #FFFFFF4D;
            border: none;
            box-shadow: 0 20px 50px -10px rgba(0, 0, 0, .5);
            overflow: hidden;
            width: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 17%;

        }

        .button {
            border: none;
            background: #FF4545;
            font-size: 12px;
            border-radius: 2px;
            font-weight: 500;
            color: white;
            text-decoration: none
        }

        .productCard {
            width: 22%
        }



        .categoryFirstCard {
            width: 22.5%;
            height: 220px;

        }

        .categoryCard::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(82 82 82 / 50%);
            /* Adjust the alpha value for transparency */
            z-index: 0;
            /* Place the overlay below the content */
        }


        .productCardData {
            border: 0px;
            transition: box-shadow 0.5s ease;
            /* Add transition property */

        }

        .productCardData:hover {
            box-shadow: 0px 0px 10px 0px #9a9a9a;
        }



        .whyuscard:hover {
            border: 1px solid rgb(105, 105, 105)
        }

        .categoryImage {
            height: 220px;
        }

        @media only screen and (max-width: 991px) {}

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {}

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (max-width: 991px) {
            .smallscreen {
                display: block !important
            }

            .smallflexscreen {
                display: flex !important
            }

            .largescreen {
                display: none !important
            }

            .largeflexscreen {
                display: none !important
            }

            .marginmodaltop {
                margin-top: -40px;
            }

            .blurred {
                margin-top: 0%;

            }

            .test {
                width: 100%;
                height: 400px;
                background-size: cover;
                background-image: url('{{ asset('logo/homepagebanner.png') }}');
                position: relative;
                position: relative;
            }

            .whyuscard {
                border-radius: 0px;
                border: 1px solid transparent;
                background: transparent;
                height: 250px;
                transition: border 0.5s ease;

            }

            .categoryCard {
                height: 170px;
                position: relative;
                overflow: hidden;
            }

            .categoryImageTitle {
                background: #212121;
                height: 55px;
                width: 100%;
                margin-top: -100px;
                position: relative;
                z-index: 1893;
                position: relative;
                padding: 6px;
                /* Ensure the overlay is positioned relative to this container */
            }

            .smallscreenffootertext {
                font-size: 15px
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .largescreen {
                display: block !important;
            }

            .largeflexscreen {
                display: flex !important;
            }

            .smallflexscreen {
                display: none !important
            }

            .smallscreen {
                display: none !important;
            }

            .marginmodaltop {
                margin-top: auto;
            }

            .blurred {
                margin-top: 17%;

            }

            .test {
                width: 100%;
                height: 500px;
                background-size: cover;
                background-image: url('{{ asset('logo/homepagebanner.png') }}');
                position: relative;
            }

            .whyuscard {
                border-radius: 0px;
                border: 1px solid transparent;
                background: transparent;
                height: 211px;
                transition: border 0.5s ease;

            }

            .categoryCard {
                height: 220px;
                position: relative;
                overflow: hidden;
            }

            .categoryImageTitle {
                background: #212121;
                height: 55px;
                width: 90%;
                margin: 0px 12px;
                margin-top: -68px;
                position: relative;
                z-index: 1893;
                position: relative;
                padding: 8px 13px
                    /* Ensure the overlay is positioned relative to this container */
            }

        }


        .hide-arrow::-webkit-outer-spin-button,
        .hide-arrow::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        .hide-arrow[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body style="min-height:100vh;">


    @section('body')
    @show
    @if (Session::has('error'))
        <div class="p-2 py-3 box-sizing-border-box w-50 w-md-20 border font-weight-bold border-right-0 border-top-0 border-bottom-0 border-danger transition-1  alert-danger load"
            style="right:-100%;position:fixed;top:110px;border-width:3px !important">
            {{ Session::get('error') }}
            <i class="fa fa-times font-weight-bold float-right Aa291120201710rt_ cursor-pointer"></i>
        </div>
    @endif

    {{-- @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="p-2 py-3 box-sizing-border-box w-50 w-md-20 border font-weight-bold border-right-0 border-top-0 border-bottom-0 border-danger transition-1  alert-danger load"
                style="right:-100%;position:fixed;top:110px;border-width:3px !important">
                {{ $error }}
                <i class="fa fa-times font-weight-bold float-right Aa291120201710rt_ cursor-pointer"></i>
            </div>
        @endforeach
    @endif --}}
    @if (Session::has('success'))
        <div class="p-2 py-3 box-sizing-border-box w-50 w-md-20 border font-weight-bold border-right-0 border-top-0 border-bottom-0 border-success transition-1  alert-success load"
            style="right:-100%;position:fixed;top:110px;border-width:3px !important">
            {{ Session::get('success') }}
            <i class="fa fa-times font-weight-bold float-right Aa291120201710rt_ cursor-pointer"></i>
        </div>
    @endif
    @if (Session::has('warning'))
        <div class="p-2 py-3 box-sizing-border-box w-50 w-md-20 border font-weight-bold border-right-0 border-top-0 border-bottom-0 border-warning transition-1  alert-warning load"
            style="right:-100%;position:fixed;top:110px;border-width:3px !important">
            {{ Session::get('warning') }}
            <i class="fa fa-times font-weight-bold float-right Aa291120201710rt_ cursor-pointer"></i>
        </div>
    @endif
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        $(document).ready(function() {
            $(".load").css('right', '0px');

        });
        $(".Aa291120201710rt_").click(function() {
            $(this).parent().hide();
        });

        $(document).ready(function() {
            setTimeout(function() {
                $('.modalRegister').click();
            }, 5000);
        });
        $(document).ready(function() {
            $('.openbtn').click(function() {
                $('.sidebar').css('width', '15%');
                $('body').addClass('bodyStyling');
            });
            $('.closebtn').click(function() {
                $('.sidebar').css('width', '7%');
                $('body').removeClass('bodyStyling');
            });
            $('.openbtn').click(function() {
                $('.closebtn').prop('hidden', false);
                $('.openbtn').prop('hidden', true);
            });
            $('.closebtn').click(function() {
                $('.closebtn').prop('hidden', true);
                $('.openbtn').prop('hidden', false);
            });
        });
    </script>
    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</body>

</html>
