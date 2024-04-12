<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUpload extends Controller
{
    public function uploadImage($storage, $path, $image)
    {
        if (count(array($image)) > 0) {
            $new_name_of_profile_photo = uniqid('', true) . "." . $image->getClientOriginalExtension();
            $image->move($storage, $new_name_of_profile_photo);
            return $path . '/' . $new_name_of_profile_photo;
        } else {
        }

        return null;
    }
}
