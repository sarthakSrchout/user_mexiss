<div class="card shadow me-4 border-0" style="border-radius: 0px">
    <div class="card-body p-4">
        <h5>My Profile</h5>
        <div class="mb-4" style="border: 2px solid red;border-radius: 10px; "></div>
        <style>
            .hidescrollbar::-webkit-scrollbar {
                width: 0;
            }
        </style>

        <div>
            <div class="d-flex align-items-center mt-2" style="">
                @if (request()->is('user/profile'))
                    <a href="{{ route('user-profile') }}" class="text-decoration-none"
                        style=" background-image: linear-gradient(to left, #ff4545, #fe574f, #fd6659, #fc7363, #fa806e) !important;
                        padding: 8px 30px;
                        font-size: 13px;
                        color: white;
                        font-weight: 500">
                        My Profile
                    </a>
                @else
                    <a href="{{ route('user-profile') }}" class="text-decoration-none"
                        style="
                    padding: 8px 30px;
                    font-size: 13px;
                    color: rgb(0, 0, 0);
                    font-weight: 500">
                        My Profile
                    </a>
                @endif

            </div>
            <div class="d-flex align-items-center mt-2">
                <a href="{{ route('user-myorrders') }}" class="text-decoration-none"
                    style="
                        padding: 8px 30px;
                        font-size: 13px;
                        color: rgb(0, 0, 0);
                        font-weight: 500">
                    My Order
                </a>

            </div>
            <div class="d-flex align-items-center mt-2">

            @if (request()->is('my/address'))
                <a href="{{ route('user-myaddress') }}" class="text-decoration-none"
                    style=" background-image: linear-gradient(to left, #ff4545, #fe574f, #fd6659, #fc7363, #fa806e) !important;
                        padding: 8px 30px;
                        font-size: 13px;
                        color: white;
                        font-weight: 500">
                    Manage Address
                </a>
            @else
                <a href="{{ route('user-myaddress') }}" class="text-decoration-none"
                    style="
                    padding: 8px 30px;
                    font-size: 13px;
                    color: rgb(0, 0, 0);
                    font-weight: 500">
                    Manage Address
                </a>
            @endif
            </div>
            <div class="d-flex align-items-center mt-2">
                <a href="{{ route('user-faq') }}" class="text-decoration-none"
                    style="
                        padding: 8px 30px;
                        font-size: 13px;
                        color: rgb(0, 0, 0);
                        font-weight: 500">
                    FAQ
                </a>

            </div>

            <div class="d-flex align-items-center mt-2">
                <a href="{{ route('user-term') }}" class="text-decoration-none"
                    style="
                        padding: 8px 30px;
                        font-size: 13px;
                        color: rgb(0, 0, 0);
                        font-weight: 500">
                    Terms and Conditions
                </a>

            </div>
            <div class="d-flex align-items-center mt-2">
                <a href="" class="text-decoration-none"
                    style="
                        padding: 8px 30px;
                        font-size: 13px;
                        color: rgb(0, 0, 0);
                        font-weight: 500">
                    Logout
                </a>

            </div>

        </div>
    </div>
</div>
