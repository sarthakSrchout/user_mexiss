<div class="container largescreen" style="margin-bottom: 8%">
    <div class="row">
        <div class="col-lg-4 col-10 mx-auto">
            <div class="row">
                <div class="col-6"
                    style="border-bottom: 3.5px solid #FF4545;font-size:14px;font-weight:500;text-align:center;padding:10px">
                    RECOMMENDATION</div>
                <div class="col-6"
                    style="border-bottom: 3.5px solid #949494;font-size:14px;font-weight:500;text-align:center;padding:10px">
                    RECENTLY VIEWED</div>
            </div>

        </div>
    </div>
    <div class="row mt-4">

        <div class="slider ">
            @foreach ($recommendate as $item)
                <div class="col-2 mt-3 mb-4  ms-4">
                    <div class="card productCardData" style="border-radius: 0px">
                        <div class="card-body">
                            <img src="{{ $item->product_images[0] }}" class="card-img-top "
                                style="border-radius:0px;height:150px" alt="">
                            <h6 style="font-size: .85rem" class="mt-2">{{ $item->product_name }}</h6>
                            <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->discounted_price }}</h6>
                            <div class="d-flex">
                                <img src="{{ asset('logo/stars.png') }}" alt=""><span style="font-size: .7rem"
                                    class="text-bold ms-1">(5)</span>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('user-productdetails',['product_id' => $item->id]) }}" class="button mt-2 button-background d-flex"
                                    style="align-items:center;align-items: center;
                                width: 50%;
                                justify-content: center;
                                display: flex
                                height:32px;font-size:10px">
                                    View Details

                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="9px"
                                        alt="">
                                </a>
                                <a href="" class="button secondary-color  mt-2 ms-2"
                                    style="align-items:center;align-items: center;
                                width: 50%;
                                justify-content: center;
                                display: flex;
                                height:32px;font-size:10px">
                                    Contact Us
                                    <img src="{{ asset('logo/call.png') }}" class="ms-1" height="11px"
                                        alt="">

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        $('.slider').slick({
            // Slick settings go here
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 3,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
            // Add more settings as needed
        });
    });
</script>
