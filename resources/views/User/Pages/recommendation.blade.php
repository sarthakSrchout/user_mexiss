<style>
    /* Style for tabs */
    .recommendation-tab,
    .recently-viewed-tab {
        cursor: pointer;
    }

    .recommendation-active,
    .recently-viewed-active {
        color: #FF4545;
        border-bottom: 3.5px solid #FF4545;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        padding: 10px
    }

    .recommendation-deactive,
    .recently-viewed-deactive {
        color: #949494;
        border-bottom: 3.5px solid #949494;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        padding: 10px
    }


</style>


<div class="container largescreen" style="margin-bottom: 8%">
    <div class="row">
        <div class="col-lg-4 col-10 mx-auto">
            <div class="row">
                <div class="col-6 recently-viewed-tab recently-viewed-active ">
                    RECENTLY VIEWED</div>
                <div class="col-6 recommendation-tab recommendation-deactive ">
                    RECOMMENDATION</div>
            
            </div>

        </div>
    </div>
    <div class="row mt-4">

        <div class="slider recommendation-slider d-none">
            @foreach ($recommendate as $item)
                <div class="col-2 mt-3 mb-4  ms-4">
                    <div class="card productCardData" style="border-radius: 0px">
                        <div class="card-body">
                            <img src="{{ $item->product_images[0] }}" class="card-img-top "
                                style="border-radius:0px;height:150px" alt="">
                            <h6 style="font-size: .85rem" class="mt-2">{{ $item->product_name }}</h6>
                            <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->discounted_price }}</h6>
                            <div class="d-flex">
                                <div style="display: flex;align-items: center">
                                    <div class="star-ratings">
                                        <div class="fill-ratings" style="width: {{ $item->average_percentage }}%;">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>

                                    </div>
                                    <span style="font-size: .8rem"
                                        class="text-bold ms-1">({{ $item->average_rating ? $item->average_rating : 0 }})</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('user-productdetails', ['product_id' => $item->id]) }}"
                                    class="button mt-2 button-background d-flex"
                                    style="align-items:center;align-items: center;
                                width: 50%;
                                justify-content: center;
                                display: flex
                                height:32px;font-size:10px">
                                    View Details

                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="9px"
                                        alt="">
                                </a>
                                <a href="{{ route('user-contactus') }}" class="button secondary-color  mt-2 ms-2"
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
        <div class="slider recently-viewed-slider">
            @foreach ($recently as $item)
                <div class="col-2 mt-3 mb-4  ms-4">
                    <div class="card productCardData" style="border-radius: 0px">
                        <div class="card-body">
                            <img src="{{ $item->product->product_images[0] }}" class="card-img-top "
                                style="border-radius:0px;height:150px" alt="">
                            <h6 style="font-size: .85rem" class="mt-2">{{ $item->product->product_name }}</h6>
                            <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->product->discounted_price }}
                            </h6>
                            <div class="d-flex">
                                <div style="display: flex;align-items: center">
                                    <div class="star-ratings">
                                        <div class="fill-ratings"
                                            style="width: {{ $item->product->average_percentage }}%;">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>

                                    </div>
                                    <span style="font-size: .8rem"
                                        class="text-bold ms-1">({{ $item->product->average_rating ? $item->product->average_rating : 0 }})</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('user-productdetails', ['product_id' => $item->product->id]) }}"
                                    class="button mt-2 button-background d-flex"
                                    style="align-items:center;align-items: center;
                                width: 50%;
                                justify-content: center;
                                display: flex
                                height:32px;font-size:10px">
                                    View Details

                                    <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="9px"
                                        alt="">
                                </a>
                                <a href="{{ route('user-contactus') }}" class="button secondary-color  mt-2 ms-2"
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
<!-- Slick Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize slick sliders for both tabs
        $('.recommendation-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 3,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $('.recently-viewed-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 3,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
        })
      
        // Click event for Recommendation tab
        $('.recommendation-tab').click(function() {
            // Show overlay and loader
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('loader-container').style.display = 'block';

            // Show recommendation slider and hide recently viewed slider
            $('.recommendation-slider').removeClass('d-none');
            $('.recently-viewed-slider').addClass('d-none');

            // Activate recommendation tab and deactivate recently viewed tab
            $('.recommendation-tab').addClass('recommendation-active');
            $('.recommendation-tab').removeClass('recommendation-deactive');
            $('.recently-viewed-tab').removeClass('recently-viewed-active');
            $('.recently-viewed-tab').addClass('recently-viewed-deactive');

            // Hide overlay and loader after content has loaded
            setTimeout(function() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('loader-container').style.display = 'none';
            }, 2000); // Adjust the timeout value as needed
        });

        // Click event for Recently Viewed tab
        $('.recently-viewed-tab').click(function() {
            // Show overlay and loader
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('loader-container').style.display = 'block';

            // Show recently viewed slider and hide recommendation slider
            $('.recently-viewed-slider').removeClass('d-none');
            $('.recommendation-slider').addClass('d-none');

            // Activate recently viewed tab and deactivate recommendation tab
            $('.recommendation-tab').addClass('recommendation-deactive');
            $('.recommendation-tab').removeClass('recommendation-active');
            $('.recently-viewed-tab').removeClass('recently-viewed-deactive');
            $('.recently-viewed-tab').addClass('recently-viewed-active');

            // Hide overlay and loader after content has loaded
            setTimeout(function() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('loader-container').style.display = 'none';
            }, 2000); // Adjust the timeout value as needed
        });

    });
</script>
