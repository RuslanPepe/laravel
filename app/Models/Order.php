<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model{
  use HasFactory;
  protected $fillable = [
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
    'elevatorCountPassenger',
    'elevatorCountFreight',
    'conveniences',
    'parking',
    'furniture',
    'bathType',
    'technic',
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
  ];

  protected $casts = [
    'image' => 'array',
    'video' => 'array',
    'conveniences' => 'array',
    'furniture' => 'array',
    'bathType' => 'array',
    'technic' => 'array',
    'connectionNetwork' => 'array',
    'conditions' => 'array',
  ];

}
