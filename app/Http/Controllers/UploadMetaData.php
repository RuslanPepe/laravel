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
      $allPathFile = [];
      $type = [];
      for ($i = 0; $i < count($_FILES['metadata']['name']); $i++) {
        $files = $_FILES['metadata'];
        $content = $files['tmp_name'][$i];
        $dir = 'metadataUpload/'.basename($files['name'][$i]);
        move_uploaded_file($content, $dir);
        $typeFile = explode('/', $files['type'][$i]);
        $allPathFile[$i] = [$typeFile[0] => '/'.$dir];
      }
      return response()->json($allPathFile);
    }
}
