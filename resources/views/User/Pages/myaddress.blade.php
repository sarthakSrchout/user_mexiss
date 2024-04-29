@extends('User.bin.upper')
@section('title')
    My Address
@endsection


@section('body')
    @include('User.bin.navBar.navBar')

    <div class="container mb-5">
        <div class="row mt-5 mb-2">
            <div class="col-1">
                <img src="{{ asset('logo/leftarrow.png') }}" height="9.5px" alt="">
            </div>
            <div class="col-3 ">
                @include('User.Pages.profilesidebar')
            </div>
            <div class="col-8  ">
                <div class="card" style="border: none">
                    <div class="card-body">
                        <h5>Manage Address</h5>
                        <div class="mt-4">
                            <div class="card" style="border-radius: 0px">
                                <button style="background: transparent;border:none" onclick="insertfunction()" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                    <div class="card-body p-2 d-flex" style="align-items: center">
                                        <img src="{{ asset('logo/plus.png') }}" class="ms-5" alt="">
                                        <h6 class="ms-4 mt-2" style="color: #f45545;font-weight:700;font-size:13px">ADD NEW
                                            ADDRESS</h6>
                                    </div>
                                </button>
                            </div>
                        </div>
                        {{-- <div class="mt-2">
                            <div class="card" style="border-radius: 0px">
                                <div class="card-body">
                                    <h6 class="mt-2 mb-3" style="color: #f45545;font-weight:700;font-size:13px">Add Address
                                    </h6>

                                    <form>
                                        <div class="row">


                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/person.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="text"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="Name"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/phone.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="tel"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="Phone"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>



                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/loc.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="tel"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="Locality"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/address.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="tel"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="Pincode"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inquiryinput">
                                                <span class="input-group-text"
                                                    style="background: transparent; border-radius: 0px">
                                                    <img src="{{ asset('logo/address2.png') }}" alt=""
                                                        height="18px">
                                                </span>
                                                <textarea style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                    class="form-control shadow-none" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/state.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="tel"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="State"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3 inquiryinput">
                                                    <span class="input-group-text"
                                                        style="background: transparent; border-radius: 0px">
                                                        <img src="{{ asset('logo/state.png') }}" alt=""
                                                            height="18px">
                                                    </span>
                                                    <input type="tel"
                                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                        class="form-control shadow-none" placeholder="City"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex mb-3">
                                                    <div style="font-size: 14px;" >
                                                        <label for=""
                                                            style="display: flex;
                                                            align-items: center;">
                                                            <input type="radio" name="payment" id="" class="me-3">
                                                            Home
                                                        </label>
                                                    </div>
                                                    <div style="font-size: 14px;" class="ms-4">
                                                        <label for=""
                                                            style="display: flex;
                                                            align-items: center;">
                                                            <input type="radio" name="payment" id="" class="me-3">
                                                            Work
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class=" mb-3 col-6 ">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    class="button btn mt-2 button-background w-100"
                                                    style="padding: 7px 10px!important;font-size:13px"> Save
                                                </a>
                                               
                                            </div>
                                            <div class="mb-3 col-6 ">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    class=" btn mt-2 w-100"
                                                    style="padding: 7px 10px!important;font-size:13px;border:1px solid"> Cancel
                                                </a>
                                               
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div> --}}
                     @foreach ($address as $item)
                     <div class="mt-2">
                        <div class="card" style="border-radius: 0px">
                            <div class="card-body" style="flex-direction: column">
                                <div class="d-flex">
                                @if ($item->address_type = '1')
                                <div class="badge bg-success ">
                                    Home
                                </div>
                                @else
                                <div class="badge bg-secondary ">
                                    Work
                                </div>
                                @endif
                                    <div class="" style="flex: 1"></div>
                                    <div class="btn-group">
                                        <img src="{{ asset('logo/threedot.png') }}" class="dropdown-toggle"
                                            data-bs-toggle="dropdown" style="cursor: pointer" height="15px"
                                            alt="">

                                        <ul class="dropdown-menu">
                                            <li><a onclick="editfunction({{ $item->id }})" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal" class="dropdown-item" href="#" style="font-size: 13px"><img
                                                        src="{{ asset('logo/edit.png') }}" class="me-3"
                                                        alt="">Edit</a></li>
                                            

                                        </ul>
                                    </div>
                                </div>
                                <div style="font-size: 13.5px;font-weight:600" class="mt-2 d-flex">
                                    {{ $item->full_name }}
                                    <span class="ms-4">{{ $item->phone_number }}</span>
                                </div>
                                <div style="font-size: 13.5px;" class="mt-2 d-flex">
                                   {{$item->building_no_or_name}},{{ $item->colony }},{{$item->state}}, {{ $item->city }}, Pin-{{ $item->pincode }}
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                     
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="modal fade @if (Session::has('addressformSubmitted')) show @endif" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999999999999999;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius:0px;">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        <img style="height: 100%" src="{{ asset('logo/modalimage.png') }}" class="img-fluid largescreen"
                            alt="">
                        <img style="" src="{{ asset('logo/longquiry.png') }}" class="img-fluid w-100 smallscreen"
                            alt="">
                    </div>
                    <div class="col-lg-9 col-12 p-3">
                        <div class="modal-header border-0" style="flex-direction: column;align-items: stretch">
                            <div class="d-flex"
                                style="width: 100%;
                    align-items: center;
                    justify-content: space-between;">
                                <h6 class="modal-title" id="addresstitle" style="color: #FF4545;font-weight: 600;flex:1">
                                    ADD NEW ADDRESS</h6>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('user-addresspostoperation') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3 inquiryinput">
                                            <span class="input-group-text"
                                                style="background: transparent; border-radius: 0px">
                                                <img src="{{ asset('logo/person.png') }}" alt="" height="18px">
                                            </span>
                                            <input type="text" required
                                                style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                                class="form-control shadow-none" placeholder="Full Name *" id="full_name"
                                                name="full_name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group d-flex mb-3">
                                        <select name="country_table_id" id="country_table_id"
                                            class="form-select shadow-none"
                                            style="width: 85px; font-size: 13.5px;border-radius:0">
                                            @foreach ($country as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->country_phone_code == '+91') selected @endif>
                                                    {{ $item->country_phone_code }} ( {{ $item->country_name }} )</option>
                                            @endforeach
                                            <!-- Add more options as needed -->
                                        </select>
                                        <input type="number" value="" required id="phone_number"
                                            style="border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            name="phone_number" class="form-control shadow-none ms-2"
                                            placeholder="Your Phone Number *">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/phone.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="number" value="" id="alt_phone_number"
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Alt Phone Number"
                                            aria-label="Username" name="alt_phone_number"
                                            aria-describedby="basic-addon1">
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="input-group mb-3 inquiryinput" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="state" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="State *" aria-label="Username"
                                            name="state" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput col-6" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="city" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="City *" aria-label="Username"
                                            name="city" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 inquiryinput col-6" style="width: 33%">
                                        <span class="input-group-text"
                                            style="background: transparent; border-radius: 0px">
                                            <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                        </span>
                                        <input type="text" value="" id="pincode" required
                                            style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                            class="form-control shadow-none" placeholder="Pincode *"
                                            aria-label="Username" name="pincode" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="building_no" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Building No/Name *"
                                        aria-label="Username" name="building_no" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="colony" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Colony *" aria-label="Username"
                                        name="colony" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <input type="text" value="" id="landmark"
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;"
                                        class="form-control shadow-none" placeholder="Landmark " aria-label="Username"
                                        name="landmark" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 inquiryinput col-6">
                                    <span class="input-group-text" style="background: transparent; border-radius: 0px">
                                        <img src="{{ asset('logo/address.png') }}" alt="" height="18px">
                                    </span>
                                    <select name="address_type" class="form-select" id="address_type" required
                                        style="border-left: 0px; border-radius: 0px; font-size: 13.5px; outline: none; box-shadow: none;">
                                        <option value="" selected disabled>Select a Address Type *</option>
                                        <option value="1">Home</option>
                                        <option value="0">Work</option>
                                    </select>

                                </div>
                                <div id="addressdiv"></div>
                                <div class="input-group mb-3 ">
                                    <button type="submit" id="addressubmitbutton"
                                        class="button btn mt-2 button-background w-100"
                                        style="padding: 7px 10px!important;font-size:13px"> ADD NEW ADDRESS
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

    <script>
        let currentpage = 'insert';

        function insertfunction() {
            event.preventDefault()
            currentpage = 'insert';
            document.getElementById('addresstitle').innerHTML = 'ADD NEW ADDRESS';
            document.getElementById('full_name').value = '';
            document.getElementById('phone_number').value = '';
            document.getElementById('alt_phone_number').value = '';
            document.getElementById('country_table_id').value = '76';
            document.getElementById('state').value = '';
            document.getElementById('city').value = '';
            document.getElementById('pincode').value = '';
            document.getElementById('building_no').value = '';
            document.getElementById('colony').value = '';
            document.getElementById('landmark').value = '';
            document.getElementById('address_type').value = '';
            document.getElementById('addressubmitbutton').innerHTML = 'ADD NEW ADDRESS';
            document.getElementById('addressdiv').innerHTML = ''
        }

        function editfunction(id) {
            event.preventDefault()

            jQuery.ajax({
                url: `{{ url('user/getaddressdetails') }}/${id}`,
                type: 'GET',
                success: function(response) {
                    // console.log(response)
                    currentpage = 'edit';
                    document.getElementById('addresstitle').innerHTML = 'EDIT ADDRESS';
                    document.getElementById('full_name').value = response.full_name;
                    document.getElementById('phone_number').value = response.phone_number;
                    document.getElementById('alt_phone_number').value = response.alt_phone_number;
                    document.getElementById('country_table_id').value = response.country_table_id;
                    document.getElementById('state').value = response.state;
                    document.getElementById('city').value = response.city;
                    document.getElementById('pincode').value = response.pincode;
                    document.getElementById('building_no').value = response.building_no_or_name;
                    document.getElementById('colony').value = response.colony;
                    document.getElementById('landmark').value = response.landmark;
                    document.getElementById('address_type').value = response.address_type;
                    document.getElementById('addressubmitbutton').innerHTML = 'SAVE ADDRESS';
                    document.getElementById('addressdiv').innerHTML =
                        '<input type="text" hidden value="' + response.id +
                        '" name="address_id" id="address_id" class="form-control">';

                },
            });

        }
    </script>




    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
