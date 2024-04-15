<?php

use Illuminate\Support\Facades\Auth;
    // dd("ASD");
if (!function_exists('authcheck')) {
    function authcheck(){
        // dd("ASda");
        return Auth::check();
    }
}
