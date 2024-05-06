<div class="container-fluid secondary-color">
    <footer class="row  py-5  ms-lg-5 ms-3  " style="justify-content: space-around">


        <div class="col mb-3 mt-lg-5 mt-2">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <img src="{{ asset('logo/logo.png') }}" height="30px" alt="">
            </a>
            <p class="text-light" style="font-size: 15px">MEXXISS TECHNOLOGIES PRIVATE LIMITED</p>
            </p>
        </div>


        <div class="col mb-3 mt-5 largescreen">
            <h5 class="text-light">Company</h5>
            <ul class="nav flex-column mt-3">
                <li class="nav-item mb-2"><a href="{{ route('user-aboutus') }}" class="nav-link p-0 "
                        style="font-size: 13px;color:grey">About Us</a></li>
                <li class="nav-item mb-2"><a href="{{ route('user-term') }}" class="nav-link p-0 "
                        style="font-size: 13px;color:grey">Terms and Conditions</a>
                </li>

            </ul>
        </div>

        <div class="col mb-3 mt-5 largescreen">
            <h5 class="text-light">Service and Support</h5>
            <ul class="nav flex-column mt-3">
                <li class="nav-item mb-2"><a href="{{ route('user-contactus') }}" class="nav-link p-0 "
                        style="font-size: 13px;color:grey">Contact</a></li>
                <li class="nav-item mb-2"><a href="{{ route('user-faq') }}" class="nav-link p-0 "
                        style="font-size: 13px;color:grey">FAQs</a></li>
            </ul>
        </div>
        <div class="row p-0 smallflexscreen">

            <div class="col-6 mb-3 mt-0 mt-lg-5">
                <h5 class="text-light smallscreenffootertext" >Company</h5>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="{{ route('user-aboutus') }}" class="nav-link p-0 "
                            style="font-size: 13px;color:grey">About Us</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('user-term') }}" class="nav-link p-0 "
                            style="font-size: 13px;color:grey">Terms and Conditions</a>
                    </li>

                </ul>
            </div>

            <div class="col-6 mb-3 mt-0 mt-lg-5">
                <h5 class="text-light smallscreenffootertext" >Service and Support</h5>
                <ul class="nav flex-column mt-3">
                
                    <li class="nav-item mb-2"><a href="{{ route('user-contactus') }}" class="nav-link p-0 "
                            style="font-size: 13px;color:grey">Contact</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('user-faq') }}" class="nav-link p-0 "
                            style="font-size: 13px;color:grey">FAQs</a></li>
                </ul>
            </div>
        </div>
        <div class="col mb-3 mt-lg-5 ">
            <h5 class="text-light smallscreenffootertext">Follow Us</h5>
            <ul class="nav flex-row mt-3">
                <li><img class="me-3" src="{{ asset('logo/instagram.png') }}" height="18px" alt=""></li>
                <li><img class="me-3" src="{{ asset('logo/linkedin.png') }}" height="18px" alt=""></li>
                <li><img class="me-3" src="{{ asset('logo/x.png') }}" height="18px" alt=""></li>
            </ul>
        </div>

        <div class="row p-0">
            <p class="text-light" style="font-size: 15px;">Copyright © 2023, All Right Reserved

        </div>

    </footer>
    {{-- <p>Copyright © 2023, All Right Reserved</p> --}}
</div>
