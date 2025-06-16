<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller{
  public function save(Request $request){
    if ($request->hasFile('files')){
      $path = [];

      foreach ($request->file('files') as $file){
        $path = $file->store('uploads', 'public');

        $paths[] = asset('storage/'.$path);
      }
      return response()->json($paths);
    }
    return response()->json(['error' => 'Файлы не найдены'], 400);
  }
}
