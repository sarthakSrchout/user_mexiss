@foreach ($order as $item)
<div class="col-12 mx-auto mt-3">
    <div class="card" style="border-radius: 0px">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto mb-4">
                    <div class="d-flex">
                        <div
                            style="width: 45px;height:45px;border-radius:50%;background: black;align-items: center;
                    justify-content: center;
                    display: flex;">
                            <img src="{{ asset('logo/package.png') }}" height="30px" alt="">
                            <div class="tickposition" style=" ">
                                <img src="{{ asset('logo/tick.png') }}" height="18px" alt="">

                            </div>
                        </div>
                        <div class="ms-lg-5 ms-4">
                            @if ($item->order_status == '0')
                            <h6 class="text-warning">Order Placed</h6>
                            @elseif($item->order_status == '1')
                            <h6 class="text-success">Order Confirmed</h6>
                            @elseif($item->order_status == '2')
                            <h6 class="text-danger">Cancelled By Seller</h6>
                            @elseif($item->order_status == '3')
                            <h6 class="text-danger">Cancelled By User</h6>

                            @endif
                            <p style="font-size: 12px">Ordered On {{ $item->created_at->format('l, F jS, Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="card " style="border: 0;border-radius: 0;background: #F4F4F4">
                        <div class="card-body ordercardpadding mt-2 mt-lg-0" style="">
                            <img src="{{ $item->product->product_images[0] }}" class="imageheight"
                                alt="">
                            <div class="ms-3 ms-lg-5" style="flex: 1">
                                <h6 class="prdtitle">{{ $item->product->product_name }}</h6>
                                <p style="font-size: 13px;color:black;font-weight:500" class="mt-lg-3 ">Rs
                                    {{ $item->payable_amount }}
                                </p>
                                <p style="font-size: 13px;color:black;margin-top:-13px">Seller : {{ $item->seller->name }}
                                </p>

                                <div class="d-flex mt-lg-2">
                                    {{-- <button class="returnbutton" style="">Exchange</button> --}}
                                    @if ($item->order_status == '6')
                                    <button class=" returnbutton">Return</button>

                                    @else
                                    <button class="returnbutton">Cancel</button>

                                    @endif
                                    <a href="{{ route('user-contactus') }}" class="ms-3 returnbutton text-dark" style="text-decoration: none">Reach Us?</a>

                                </div>
                                <div class="d-flex mt-lg-3 mt-2">
                                    <img src="{{ asset('logo/got.png') }}" height="10px" class="mt-1"
                                        alt="">
                                    <p class="ms-2 returntext">Exchange/ Return
                                        available till 29th December.</p>
                                </div>

                                <p class="" style="font-size: 13px;color:black;margin-top: -5px;">
                                    Rate the product <img src="{{ asset('logo/stars.png') }}"
                                        height="20px" alt="">
                                </p>

                            </div>
                            <div class="largeflexscreen"
                                style="align-items: center;
                            justify-content: center;
                            display: flex;
                                ">
                                <button
                                    style="height: 35px;width: 35px;border-radius:50%;border:0;background: #FF4545;align-items: center;
                        justify-content: center;
                        display: flex;">
                                    <img src="{{ asset('logo/arrow-1.png') }}" alt=""
                                        class="ms-1"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="mt-2 float-end pagination">
    {!! $order->links('pagination::bootstrap-4') !!}

</div>
