<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCreateOrder extends Controller
{
    public function writeDb(Request $request){
      $data = $request;

      $data['image'] = json_encode($data['image']);
      $data['video'] = json_encode($data['video']);
      $data['conveniences'] = json_encode($data['conveniences']);
      $data['furniture'] = json_encode($data['furniture']);
      $data['bathType'] = json_encode($data['bathType']);
      $data['technic'] = json_encode($data['technic']);
      $data['connectionNetwork'] = json_encode($data['connectionNetwork']);
      $data['conditions'] = json_encode($data['conditions']);


      DB::table('order_data')->insert($data->only([
        'typeOrder', 'typeRoom', 'adressOrder', 'yearCreate', 'typeHouse',
        'roomCount', 'areaRoom', 'areaLifeRoom', 'areaKitchenRoom', 'floor',
        'floorAllHouse', 'typeState', 'numApart', 'image', 'video', 'balconyRoom',
        'loggiaRoom', 'viewWindow', 'bathroomCombinedRoom', 'bathroomSeparateRoom',
        'finishing', 'technic','parking', 'elevatorCountPassenger', 'elevatorCountFreight',
        'conveniences', 'bathType', 'connectionNetwork', 'price', 'network',
        'prepayment', 'deposit', 'countMonthRental', 'conditions', 'selfEmployed',
        'inn', 'numberPhone', 'communicationMethod', 'title', 'description'
      ]));

      return response()->json();
    }
}


