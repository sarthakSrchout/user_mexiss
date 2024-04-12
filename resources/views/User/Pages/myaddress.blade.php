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
                                <div class="card-body p-2 d-flex" style="align-items: center">
                                    <img src="{{ asset('logo/plus.png') }}" class="ms-5" alt="">
                                    <h6 class="ms-4 mt-2" style="color: #f45545;font-weight:700;font-size:13px">ADD A NEW
                                        ADDRESS</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
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
                        </div>
                        <div class="mt-2">
                            <div class="card" style="border-radius: 0px">
                                <div class="card-body" style="flex-direction: column">
                                    <div class="d-flex">
                                        <div class="badge bg-secondary ">
                                            Home
                                        </div>
                                        <div class="" style="flex: 1"></div>
                                        <div class="btn-group">
                                            <img src="{{ asset('logo/threedot.png') }}" class="dropdown-toggle" data-bs-toggle="dropdown" style="cursor: pointer" height="15px" alt="">

                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/edit.png') }}" class="me-3" alt="">Edit</a></li>
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/delete.png') }}" class="me-3" alt="">Delete</a></li>
                                           
                                            </ul>
                                          </div>
                                    </div>
                                  <div style="font-size: 13.5px;font-weight:600" class="mt-2 d-flex">
                                    Adarsh Patel
                                    <span class="ms-4">3456754567</span>
                                  </div>
                                  <div style="font-size: 13.5px;" class="mt-2 d-flex">
                                    Rohini Nagar, Near  Ram Temple, Delhi,    Pin-887655                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="card" style="border-radius: 0px">
                                <div class="card-body" style="flex-direction: column">
                                    <div class="d-flex">
                                        <div class="badge bg-secondary ">
                                            Home
                                        </div>
                                        <div class="" style="flex: 1"></div>
                                        <div class="btn-group">
                                            <img src="{{ asset('logo/threedot.png') }}" class="dropdown-toggle" data-bs-toggle="dropdown" style="cursor: pointer" height="15px" alt="">

                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/edit.png') }}" class="me-3" alt="">Edit</a></li>
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/delete.png') }}" class="me-3" alt="">Delete</a></li>
                                           
                                            </ul>
                                          </div>
                                    </div>
                                  <div style="font-size: 13.5px;font-weight:600" class="mt-2 d-flex">
                                    Adarsh Patel
                                    <span class="ms-4">3456754567</span>
                                  </div>
                                  <div style="font-size: 13.5px;" class="mt-2 d-flex">
                                    Rohini Nagar, Near  Ram Temple, Delhi,    Pin-887655                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="card" style="border-radius: 0px">
                                <div class="card-body" style="flex-direction: column">
                                    <div class="d-flex">
                                        <div class="badge bg-secondary ">
                                            Home
                                        </div>
                                        <div class="" style="flex: 1"></div>
                                        <div class="btn-group">
                                            <img src="{{ asset('logo/threedot.png') }}" class="dropdown-toggle" data-bs-toggle="dropdown" style="cursor: pointer" height="15px" alt="">

                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/edit.png') }}" class="me-3" alt="">Edit</a></li>
                                              <li><a class="dropdown-item" href="#" style="font-size: 13px"><img src="{{ asset('logo/delete.png') }}" class="me-3" alt="">Delete</a></li>
                                           
                                            </ul>
                                          </div>
                                    </div>
                                  <div style="font-size: 13.5px;font-weight:600" class="mt-2 d-flex">
                                    Adarsh Patel
                                    <span class="ms-4">3456754567</span>
                                  </div>
                                  <div style="font-size: 13.5px;" class="mt-2 d-flex">
                                    Rohini Nagar, Near  Ram Temple, Delhi,    Pin-887655                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>





    {{-- footer section --}}
    @include('User.bin.footer.footer')
@endsection
