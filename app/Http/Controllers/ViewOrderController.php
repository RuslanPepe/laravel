<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewOrderController extends Controller{
  public function ViewOrder($id){
    return Inertia::render('Order-id', ['data' => Order::find($id)]);
  }
}
