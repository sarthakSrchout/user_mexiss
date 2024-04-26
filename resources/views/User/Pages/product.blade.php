    @extends('User.bin.upper')
    @section('title')
        Product
    @endsection


    @section('body')
        <style>
            .price-range-slider {
                width: 100%;
                float: left;
                padding: 10px 20px;
            }

            .price-range-slider .range-value {
                margin: 0;
            }

            .price-range-slider .range-value input {
                width: 100%;
                background: none;
                color: #000;
                font-size: 16px;
                font-weight: initial;
                box-shadow: none;
                border: none;
                margin: 20px 0 20px 0;
            }

            .price-range-slider .range-bar {
                background: #ffffff;
                height: 5px;
                width: 96%;
                margin-left: 8px;
                box-shadow: 0px 0px 20px 0px rgb(216, 216, 216)
            }

            .price-range-slider .range-bar .ui-slider-range {
                background: #FF4545;
            }

            .price-range-slider .range-bar .ui-slider-handle {
                border: none;
                border-radius: 25px;
                background: #fff;
                border: 2px solid #FF4545;
                height: 17px;
                width: 17px;
                top: -0.52em;
                cursor: pointer;
            }

            .price-range-slider .range-bar .ui-slider-handle+span {
                background: #FF4545;
            }

            /*--- /.price-range-slider ---*/
        </style>

        <div id="maindivproduct" style="display: block">
            @include('User.bin.navBar.navBar')
            <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color p-0 shadow smallscreen"
                style="top: 0;position:sticky;z-index:101001;">

                <div class="d-flex align-items-center" style="height: 80px">
                    <a href="{{ route('user-homepage') }}">
                        <img src="{{ asset('logo/whitearrow.png') }}" height="9.5px" alt="" class="ms-4">

                    </a>
                    <p class="mt-3 ms-3" style="font-size: 14.5px;color:#ffffff;font-weight:600;flex:1">Products </p>
                    <a href="">
                        <img src="{{ asset('logo/search1.png') }}" alt="">

                    </a>
                    <a href="{{ route('user-cart') }}" class="ms-3 me-4">
                        <img src="{{ asset('logo/cart1.png') }}" alt="">

                    </a>
                </div>


            </nav>
            <div class="container">
                <div class="row mt-4 largescreen">
                    <div class="col-12 d-flex align-items-center ">
                        <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
                        <p class="mt-3 ms-4" style="font-size: 14px">Home</p>
                        <img class="ms-1" src="{{ asset('logo/greater.png') }}" height="15px" alt="">
                        <p class="mt-3 ms-" style="font-size: 14px;color:#FF4545;flex:1">Products</p>
                        <div class="col-4">
                            <div class="input-group">

                                <input type="text" class="form-control shadow-none"
                                    aria-label="Text input with segmented dropdown button" id="search"
                                    placeholder="Enter Product/Service Name" style="border-radius: 0px;font-size:12px">
                                <button id="searchbutton" class="btn homeparagraph text-light button-background"
                                    style="border-radius: 0px;" type="button">Search</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3 largescreen">
                        <div class="card shadow me-4" style="border-radius: 0px;border:0;height:420px">
                            <div class="card-body p-4">
                                <h5>Categories</h5>
                                <div class="mb-4" style="border: 2px solid red;border-radius: 10px; "></div>
                                <style>
                                    .hidescrollbar::-webkit-scrollbar {
                                        width: 0;
                                    }

                                    .accordion-button:focus {
                                        box-shadow: none !important;
                                    }
                                 
                                </style>

                                <div class="hidescrollbar" style="height: 300px;overflow:hidden;overflow-y: auto;">

                                    @foreach ($cat as $outer)
                                        <div class="accordion" id="categoryAccordion{{ $outer->outCid }}">
                                            <div class="accordion-item" style="border: 0">
                                                <h2 class="accordion-header" id="headingOne{{ $outer->outCid }}"
                                                    style="border-bottom: .1px solid rgb(234, 234, 234)">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne{{ $outer->outCid }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseOne{{ $outer->outCid }}"
                                                        style="display: flex; padding: 10px; border: 0px; background: transparent">
                                                        <div class="d-flex align-items-center">
                                                            <a href="{{ route('user-categoryfilter', ['outer_id' => $outer->outCid]) }}"
                                                                style="text-decoration: none">
                                                                <div
                                                                    @if ($selected && $selected->outCid && $selected->outCid == $outer->outCid) style="font-size: 15px; color: #f54;" @else style="font-size: 15px; color: rgb(0, 0, 0);" @endif>
                                                                    {{ Str::ucfirst($outer->outer_Category_name) }}
                                                                </div>
                                                            </a>
                                                            <div style="flex: 1"></div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                {{-- category accordion --}}
                                                @foreach ($outer->activecategory as $category)
                                                    <div id="collapseOne{{ $outer->outCid }}"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#categoryAccordion{{ $category->cid }}">
                                                        <div class="accordion-body" style="border:none;padding:0px">
                                                            <div class="subcataccordion"
                                                                id="subcataccordion{{ $category->cid }}"
                                                                style="margin-left: 20px; padding: 7px;">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsesubCategory{{ $category->cid }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapsesubCategory{{ $category->cid }}"
                                                                    style="display: flex; padding: 0px; border: 0px; background: transparent;border-bottom: .1px solid rgb(234, 234, 234)">
                                                                    <div class="d-flex align-items-center">
                                                                        <a href="{{ route('user-categoryfilter', ['cat_id' => $category->cid]) }}"
                                                                            style="text-decoration: none">
                                                                            <div
                                                                                @if ($selected && $selected->cid && $selected->cid == $category->cid) style="font-size: 15px; color: #f54;" @else style="font-size: 15px; color: rgb(0, 0, 0);" @endif>
                                                                                {{ Str::ucfirst($category->category_name) }}
                                                                            </div>
                                                                        </a>
                                                                        <div style="flex: 1"></div>
                                                                    </div>
                                                                </button>
                                                                {{-- subcategory accordion --}}
                                                                @foreach ($category->activesubcategory as $item)
                                                                    <div id="collapsesubCategory{{ $category->cid }}"
                                                                        class="accordion-collapse collapse"
                                                                        data-bs-parent="#subcataccordion{{ $category->cid }}">
                                                                        <div class="d-flex align-items-center"
                                                                            style="margin-left: 16px; margin-top: 5px;">
                                                                            <a href="{{ route('user-categoryfilter', ['sub_id' => $item->scid]) }}"
                                                                                style="text-decoration: none">
                                                                                <div
                                                                                    @if ($selected && $selected->scid && $selected->scid == $item->scid) style="font-size: 15px; color: #f54;" @else style="font-size: 15px; color: rgb(93, 93, 93);" @endif>

                                                                                    {{ Str::ucfirst($item->sub_category_name) }}

                                                                                </div>
                                                                            </a>
                                                                            <div style="flex: 1"></div>

                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                        </div>


                        <div class="card shadow mt-2 me-4 p-2" style="border-radius: 0px;border:0;">
                            <div class="card-body p-4">
                                <h5>Price</h5>
                                <div class="d-flex" style="align-items: center;text-align: center">
                                    <div class="" style="border: 2px solid red;border-radius: 10px;width:100px ">
                                    </div>
                                    <div style="flex: 1"></div>
                                    <a style="color: #FF4545;text-decoration: none;font-size:14px"
                                        href="">Clear</a>
                                </div>

                                <div class="price-range-slider mt-4">
                                    <div id="slider-range" class="range-bar"></div>
                                </div>
                                <div class="mt-2 ms-5">
                                    <input type="text" id="amount" readonly
                                        style="border:0; color:#ff4545;border:none; font-weight:bold;width: -webkit-fill-available;">
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="d-flex largeflexscreen"
                            style="justify-content: space-between;font-size:13px;
                            align-items: center;">
                            <div class="ms-5">{{ count($product) }} Items</div>
                            <div c>
                                Sort By:
                                <select name="sortby" id="sortby" style="padding: 2px">
                                    <option value="" selected disabled>Sort By</option>
                                    <option value="1">Price -Low to High</option>
                                    <option value="2">Price -High to Low</option>
                                    <option value="3">Z to A</option>
                                    <option value="6">A to Z</option>
                                    <option value="4">Newest</option>
                                    <option value="5">Oldest</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-4" id="paginationdata">
                            @include('User.Pages.productpagiantion')

                        </div>
                        <input type="hidden" id="hidden_page" name="hidden_page" value="1">

                    </div>

                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 secondary-color p-0 shadow smallscreen"
                id="navbar"
                style="bottom: 0; position: fixed; z-index: 101001; background: #FF4545 !important;display:block">

                <div class="row p-2 mt-1">
                    <div class="col-6 d-flex align-items-center" onclick="toggleSort()"
                        style="align-items: center; justify-content: center; border-right: 3px solid rgb(232, 232, 232); cursor: pointer;">

                        <h6 class="text-light"><img src="{{ asset('logo/sort.png') }}" alt=""
                                class="me-2">Sort
                        </h6>
                    </div>
                    <div class="col-6 d-flex" style="align-items: center; justify-content: center;cursor: pointer;"
                        onclick="toggleFilter()">
                        <h6 class="text-light"><img src="{{ asset('logo/filter.png') }}" alt=""
                                class="me-2">Filter
                        </h6>

                    </div>
                </div>

            </nav>
            <div id="sortDiv" class="p-3"
                style="display: none; position: fixed; bottom: 45px; left: 0; width: 100%; background: #fff; border-top: 1px solid #ccc;">
                <!-- Add your sorting options here -->
                <ul style="list-style: none">
                    <li style="color: grey;font-weight:600">Sort By</li>
                    <hr>
                    <li style="font-size: 13px" class="mt-2">What's New</li>
                    <li style="font-size: 13px" class="mt-2">Price- High to Low</li>
                    <li style="font-size: 13px" class="mt-2">Price- Low to High</li>
                    <li style="font-size: 13px" class="mt-2">Popularity</li>
                    <li style="font-size: 13px" class="mt-2">Customer Ratings</li>
                    <!-- Add more options as needed -->
                </ul>
            </div>
        </div>

        <div class="largescreen" style="margin-top: 6%">
            <hr>
        </div>

        @include('User.Pages.recommendation')

        {{-- footer section --}}
        <div class="largescreen">
            @include('User.bin.footer.footer')

        </div>

        {{-- FilterScreen --}}
        <div id="filterscreen" style="display: none;width: 100%">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-12 p-0 m-0">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary secondary-color w-100 p-0 shadow smallscreen"
                            style="position:fixed; top:0; z-index:1021321321001; background:white!important">
                            <div class="d-flex align-items-center" style="height: 60px">
                                <p class="mt-3 ms-3" style="font-size: 14.5px;color:#000000;font-weight:600;flex:1">
                                    Filters
                                </p>
                                <a href="" style="color: #ff4545;font-size:12px;font-weight:600" class="me-3">
                                    CLEAR ALL
                                </a>
                            </div>
                        </nav>

                    </div>
                    <div class="row p-0 " style="margin-top: 60px">
                        <div class="col-4" style="background: #fbf2f2;min-height:100vh;max-height: fit-content">
                            <ul style="list-style: none;margin-left:-23px" class="mt-3">
                                <li class="p-2 w-100"
                                    style="font-size: 13px;color:#ffffff;font-weight:600;background: #FF4545">Brand</li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Categories
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Price Range
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Discount</li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">Delivery Time
                                </li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <ul style="list-style: none;margin-left:-28px" class="mt-3">

                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="categoryCheckbox" name="categoryCheckbox">
                                    <label for="categoryCheckbox" class="ms-2">Categories</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="priceRangeCheckbox" name="priceRangeCheckbox">
                                    <label for="priceRangeCheckbox" class="ms-2">Price Range</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="discountCheckbox" name="discountCheckbox">
                                    <label for="discountCheckbox" class="ms-2">Discount</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="deliveryTimeCheckbox" name="deliveryTimeCheckbox">
                                    <label for="deliveryTimeCheckbox" class="ms-2">Delivery Time</label>
                                </li>
                                <li class="p-2 w-100" style="font-size: 13px;color:#000000;font-weight:600;">
                                    <input type="checkbox" id="brandCheckbox" name="brandCheckbox">
                                    <label for="brandCheckbox" class="ms-2">Brand</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 secondary-color p-0 shadow smallscreen"
                style="bottom: 0; position: fixed; z-index: 101001; background: #FF4545 !important">

                <div class="row p-2" style="height: 50px">
                    <div class="col-6 d-flex align-items-center" onclick="toggleFilter()"
                        style="align-items: center; justify-content: center; border-right: 3px solid rgb(232, 232, 232); cursor: pointer;">

                        <h6 class="text-light">Close
                        </h6>
                    </div>
                    <div class="col-6 d-flex" style="align-items: center; justify-content: center;cursor: pointer;">
                        <h6 class="text-light">Apply
                        </h6>

                    </div>
                </div>

            </nav>
        </div>
        <script>
            function toggleSort() {
                var sortDiv = document.getElementById('sortDiv');
                sortDiv.style.display = sortDiv.style.display === 'none' ? 'block' : 'none';


            }
        </script>
        <script>
            function toggleFilter() {
                var sortDiv = document.getElementById('filterscreen');
                sortDiv.style.display = sortDiv.style.display === 'none' ? 'block' : 'none';

                var maindivproduct = document.getElementById('maindivproduct');
                maindivproduct.style.display = maindivproduct.style.display === 'none' ? 'block' : 'none';

            }
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 10000,
                    values: [0, 10000],
                    slide: function(event, ui) {
                        $("#amount").val("Rs. " + ui.values[0] + " - Rs. " + ui.values[1]);
                    },
                    stop: function (event, ui) {
                    fetchFilteredData();
                }
                });
                $("#amount").val("Rs. " + $("#slider-range").slider("values", 0) +
                    " - Rs. " + $("#slider-range").slider("values", 1));
             
            });

            $("#sortby").change(function() {
                
                fetchFilteredData();
            });

            // Function to fetch filtered data based on price range and sort option
            function fetchFilteredData() {
                var minPrice = $("#slider-range").slider("values", 0);
                var maxPrice = $("#slider-range").slider("values", 1);
                var sortBy = $("#sortby").val();
                // Make AJAX request to fetch filtered data
                console.log(sortBy)
                $.ajax({
                    url: "{{ route('user-productfilter') }}",
                    method: "GET",
                    data: {
                        min_price: minPrice,
                        max_price: maxPrice,
                        sort_by: sortBy
                    },
                    success: function(response) {
                        $("#paginationdata").html('');
                        $("#paginationdata").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        </script>
        <script>
            $(document).ready(function() {
                const fetch_data = (page, search) => {

                    if (search === undefined) {
                        search = "";
                    }

                    $.ajax({
                        url: "{{ route('product-search') }}" + "/?page=" + page + "&search=" +
                            search,
                        success: function(data) {
                            // console.log(data)
                            $('#paginationdata').html('');
                            $('#paginationdata').html(data);
                        }
                    })
                }

                $('#searchbutton').on('click', function() {
                    var search = $('#search').val();
                    var page = $('#hidden_page').val();
                    fetch_data(page, search);
                });

                $('body').on('click', '.page-item a', function(event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $('#hidden_page').val(page);
                    var search = $('#search').val();
                    fetch_data(page, search);
                });
            });
        </script>
    @endsection
