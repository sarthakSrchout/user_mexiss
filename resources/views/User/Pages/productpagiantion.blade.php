@foreach ($product as $item)
    <div class="col-lg-3 col-6 mt-3 ">
        <a href="{{ route('user-productdetails', ['product_id' => $item->id]) }}"
            style="text-decoration: none;color:black">
            <div class="card productCardData" style="border-radius: 0px">
                <div class="card-body">
                    <img src="{{ $item->product_images[0] }}" class="card-img-top " style="border-radius:0px;height:150px"
                        alt="">
                    <h6 style="font-size: .85rem" class="mt-2">{{ $item->product_name }}</h6>
                    <h6 style="font-size: .75rem" class="mt-1">Rs. {{ $item->discounted_price }}</h6>
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
                    <div class="d-flex">
                        <a href="{{ route('user-productdetails', ['product_id' => $item->id]) }}"
                            class="button mt-2 button-background d-flex"
                            style="align-items:center;align-items: center;
                width: 50%;
                justify-content: center;
                display: flex
                height:32px;font-size:10px">
                            View Details

                            <img src="{{ asset('logo/arrow-1.png') }}" class="ms-1" height="9px" alt="">
                        </a>
                        <a href="{{ route('user-contactus') }}" class="button secondary-color  mt-2 ms-2"
                            style="align-items:center;align-items: center;
                width: 50%;
                justify-content: center;
                display: flex;
                height:32px;font-size:10px">
                            Contact Us
                            <img src="{{ asset('logo/call.png') }}" class="ms-1" height="11px" alt="">

                        </a>

                    </div>

                </div>
            </div>
        </a>
    </div>
@endforeach


</style>
<div class="pagination-container d-flex justify-content-center mt-4 mb-5 mb-md-0">
    {!! $product->links('pagination::bootstrap-4') !!}
</div>


<script>
    productcount = {{ $productcount }}
    $(document).ready(function() {
        $("#productcount").html(productcount + " Items");

    })
</script>
