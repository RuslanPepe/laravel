<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use function Termwind\render;

class UserController
{
  public function viewPage($page){
    return view($page);
  }

  public function showVuejs(){
    $data = ['type_room' => 'Новостройка'];
    return Inertia::render('Order-id', ['data' => $data]);
  }

}
