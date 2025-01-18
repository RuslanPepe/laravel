<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Number;
use function Laravel\Prompts\error;
use function Pest\Laravel\json;

class UploadMetaData extends Controller
{
    public function uploadMetaData(Request $request){
      $file = $_FILES['video'];
//    for ($j = 0; $j < count($_FILES['video']); $j++) {
//      if ($_FILES['video'][$j]){
//        $file = $_FILES['video'][$j];
//        $dir = 'imagesUpload/'.basename($file['name']);
//        $content = $file['tmp_name'];
//        $fileHandler = fopen($dir, 'w');
//        fwrite($fileHandler, $content);
//        fclose($fileHandler);
//      }
//    }

//      if ($_POST['key'] && $_POST['hash']){
//        for ($i = 0; $i < count($_POST['key']); $i++) {
//          $dir = 'imagesUpload/'.basename($_POST['key'][$i]);
//          $content = $_POST['hash'][$i];
//          $contents = substr($content, strpos($content, ',') + 1);
//          $contents = base64_decode($contents);
//          $fileHandler = fopen($dir, 'w');
//          fwrite($fileHandler, $contents);
//          fclose($fileHandler);
//        }
//      }
//      return response()->json([$dir, $content]);
      return response()->json($file);
    }
}
