<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateOrderdb extends Model
{
  /**
   * @var mixed|string
   */

  use HasFactory;
  protected $fillable = [
  "orderId",
  "typeOrder",
  "typeRoom",
  "adressOrder",
  "typeHouse",
  "yearCreate",
  "roomCount",
  "areaRoom",
  "areaLifeRoom",
  "areaKitchenRoom",
  "floor",
  "floorAllHouse",
  "typeState",
  "numApart",
  "image",
  "video",
  "loggiaRoom",
  "balconyRoom",
  "viewWindow",
  "bathroomCombinedRoom",
  "bathroomSeparateRoom",
  "finishing",
  "elevatorCountPassenger",
  "elevatorCountFreight",
  "ramp",
  "garbageСhute",
  "parking",
  "rooms",
  "kitchen",
  "unFurniture",
  "bath",
  "showerCabin",
  "AirConditioning",
  "Refrigerator",
  "TV",
  "WashingMachine",
  "Dishwasher",
  "network",
  "telephone",
  "prepayment",
  "price",
  "deposit",
  "countMonthRental",
  "kids",
  "pets",
  "selfEmployed",
  "inn",
  "numberPhone",
  "communicationMethod",
  ];
}
