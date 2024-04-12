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
                <img src="{{ asset('logo/faq.png') }}" class="w-100" height="200px" style="position: absolute">
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
                <h2 style="color: #FF4545" class="mmt-3">Frequently Asked Question</h2>

            </div>

        </div>
    </div>

    <div class="container  mb-5">
        <div class="row">
            <div class="col-lg-10 col-11 mx-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">1. What does MEXXiSS specialize in?</h5>
                        <p style="font-size: 13px">MEXXiSS specializes in steel manufacturing and machinery production. We
                            offer a diverse range of steel products, including plates, sheets, bars, pipes, and tubes.
                            Additionally, we provide cutting-edge machinery solutions, custom fabrication services, and
                            more.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">2. How can I place an order for your products?</h5>
                        <p style="font-size: 13px">Placing an order with MEXXiSS is easy. Simply browse our product
                            categories, select the items you need, and add them to your cart. Follow the checkout process,
                            and our team will handle the rest. For custom orders or assistance, feel free to contact our
                            customer support team at [support@yourcompany.com].</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">3. What industries does MEXXiSS serve?</h5>
                        <p style="font-size: 13px">MEXXiSS serves a wide range of industries, including construction,
                            automotive, aerospace, and energy. Our products and machinery solutions are designed to meet the
                            diverse needs of these sectors.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">4. Can I request custom fabrication for specific projects?
                        </h5>
                        <p style="font-size: 13px">Yes, MEXXiSS offers custom fabrication services. We understand that every
                            project is unique, and our team is ready to work with you to provide tailored solutions. Contact
                            our team here to discuss your specific requirements.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">5. How do I track my order?</h5>
                        <p style="font-size: 13px">Once your order is processed, you will receive a confirmation email with
                            tracking information. You can also log in to your account on our website to track the status of
                            your order. If you encounter any issues, please contact our support team for assistance.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">6. What is your return policy?</h5>
                        <p style="font-size: 13px">Our return policy is outlined in detail on our Terms and Conditions page.
                            We encourage you to review this information to understand our policies regarding returns,
                            exchanges, and refunds.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">7. Are your products environmentally friendly?</h5>
                        <p style="font-size: 13px">MEXXiSS is committed to sustainability. We prioritize responsible
                            sourcing and eco-friendly manufacturing processes. For more details on our environmental
                            initiatives, please visit our Environmental Sustainability page.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">8. How can I get in touch with your support team?</h5>
                        <p style="font-size: 13px">For any questions, concerns, or assistance, you can contact our support
                            team through the following channels:</p>
                        <p style="font-size: 13px" class="d-flex"><span style="font-weight: 700" class="ms-2 me-2">Email:
                            </span> support@yourcompany.com</a> </p>
                        <p style="font-size: 13px;margin-top: -12px;" class="d-flex"><span style="font-weight: 700"
                                class="ms-2 me-2">Phone: </span> [Your Contact Number]</a> </p>
                        <p style="font-size: 13px;margin-top: -12px;" class="d-flex"><span style="font-weight: 700"
                                class="ms-2 me-2">Live Chat: </span>Available [Specify Days and Hours]</a> </p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">9. Do you ship internationally?</h5>
                        <p style="font-size: 13px">Yes, MEXXiSS offers international shipping. We have a global logistics
                            network to ensure that our products reach customers worldwide. Shipping costs and delivery times
                            may vary based on your location.</p>
                    </div>
                </div>
                <div class="card border-0" style="margin-top: -20px">
                    <div class="card-body">
                        <h5 class="mb-3" style="color: #FF4545">10. Where can I find information about job opportunities
                            at MEXXiSS?</h5>
                        <p style="font-size: 13px">For information about career opportunities and job openings at MEXXiSS,
                            please visit our Careers page. We regularly update this section with new opportunities.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
