<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handlerGetRequest
{
  public function handlerRequest(Request $request)
  {
    $get = $_GET;
    return view('/handler', ['get' => $get]);
  }

}
