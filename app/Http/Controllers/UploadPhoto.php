<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function Pest\Laravel\json;

class UploadPhoto extends Controller
{
    public function uploadPhoto(Request $request){

      if ($request->file('image')) {
        $imageName = $_FILES['image']['name'];
        $request->image->move(public_path('imagesUpload'), $imageName);

        return response()->json(['success' => 'Upload', 'image' => $imageName,]);
      }
      return response()->json(['error' => 'failed']);
    }
}
