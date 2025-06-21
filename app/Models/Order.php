<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Order extends Model{
  use HasFactory;
  protected $fillable = ['typeOrder', 'typeRoom', 'adressOrder', 'location', 'lat', 'lon', 'yearCreate', 'typeHouse', 'roomCount', 'areaRoom', 'areaLifeRoom', 'areaKitchenRoom', 'floor', 'floorAllHouse', 'typeState', 'numApart', 'image', 'video', 'balconyRoom', 'loggiaRoom', 'viewWindow', 'bathroomCombinedRoom', 'bathroomSeparateRoom', 'finishing', 'elevatorCountPassenger', 'elevatorCountFreight', 'conveniences', 'parking', 'furniture', 'bathType', 'technic', 'connectionNetwork', 'price', 'communalServices', 'prepayment', 'deposit', 'countMonthRental', 'conditions', 'selfEmployed', 'inn', 'numberPhone', 'communicationMethod', 'title', 'description'];
  protected $casts = ['image' => 'array', 'video' => 'array', 'conveniences' => 'array', 'furniture' => 'array', 'bathType' => 'array', 'technic' => 'array', 'connectionNetwork' => 'array', 'conditions' => 'array',];

  public function scopeFilter($query, $request, $key){
    if ($request->filled($key)) {
      $query->wherein($key, $request->input($key));
    }
    return $query;
  }
  public function scopeFilterPrice($query, $request){
    if ($request->filled('price')){
      $query->whereBetween('price', [
        $request->price[0] ?? 0,
        $request->price[1] ?? PHP_INT_MAX,
      ]);
    }
    return $query;
  }
  public function scopeRadius($query, $lat, $lon, $radiuskm){
    $earthRadius = 6371;

    $latDelta = rad2deg($radiuskm / $earthRadius);
    $lonDelta = rad2deg($radiuskm / $earthRadius / cos(deg2rad($lat)));

    $minLat = $lat - $latDelta;
    $maxLat = $lat + $latDelta;
    $minLon = $lon - $lonDelta;
    $maxLon = $lon + $lonDelta;

    $query
      ->whereBetween('lat', [$minLat, $maxLat])
      ->whereBetween('lon', [$minLon, $maxLon]);

    return $query;
  }
}
