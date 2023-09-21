<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function upload(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('admins/assets/tinymce/tinymce-image/', $imageName);

        return response()->json(['location' => asset('admins/assets/tinymce/tinymce-image/' . $imageName)]);
    }
}
