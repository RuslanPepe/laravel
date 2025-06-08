<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateOrderController extends Controller{
    public function writeDb(Request $request){
      $order = Order::create($request->only([
        'typeOrder',
        'typeRoom',
        'adressOrder',
        'yearCreate',
        'typeHouse',
        'roomCount',
        'areaRoom',
        'areaLifeRoom',
        'areaKitchenRoom',
        'floor',
        'floorAllHouse',
        'typeState',
        'numApart',
        'image',
        'video',
        'balconyRoom',
        'loggiaRoom',
        'viewWindow',
        'bathroomCombinedRoom',
        'bathroomSeparateRoom',
        'finishing',
        'technic',
        'parking',
        'elevatorCountPassenger',
        'elevatorCountFreight',
        'furniture',
        'conveniences',
        'bathType',
        'connectionNetwork',
        'price',
        'communalServices',
        'prepayment',
        'deposit',
        'countMonthRental',
        'conditions',
        'selfEmployed',
        'inn',
        'numberPhone',
        'communicationMethod',
        'title',
        'description'
      ]));

      return response()->json($order, 201);
    }
}


