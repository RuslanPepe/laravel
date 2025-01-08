<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function Pest\Laravel\json;

class UploadPhoto extends Controller
{
    public function uploadPhoto(Request $request){
      if ($_POST['key'] && $_POST['hash']){
        for ($i = 0; $i < count($_POST['key']); $i++) {
          $dir = 'imagesUpload/'. basename($_POST['key'][$i]);
          $content = $_POST['hash'][$i];
          $contents = substr($content, strpos($content, ',') + 1);
          $contents = base64_decode($contents);
          $fileHandler = fopen($dir, 'w');
          fwrite($fileHandler, $contents);
          fclose($fileHandler);
        }
      }
      return response()->json([$dir, $content]);
    }
}
