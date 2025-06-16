<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function index(){
      return Order::paginate(10);
    }

    public function store(Request $request){

    }

    public function show(string $id){

    }

    public function update(Request $request, string $id){

    }

    public function destroy(string $id){

    }
}
