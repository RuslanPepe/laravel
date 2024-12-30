<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
  public function OrderCreate(Request $request){

    $typeOrder = '';
    $typeRoom =  '';
    $areaRoom = '';
    $areaLifeRoom = '';
    $areaKitchenRoom = '';
    $wallHeightRoom = '';
    $bathroomCombinedRoom = '';
    $bathroomSeparateRoom = '';
    $balconyRoom = '';
    $loggiaRoom = '';
    $viewWindow = '';
    $finishing = '';
    $elevatorCountPassenger = '';
    $elevatorCountFreight = '';
    $typeHouse = '';
    $typeParking = '';
    $developAuthor = '';
    $yearCreate = '';
    $houseFinishingCount = '';
    $houseFinishingCountLCD = '';
    $houseBuildingCount = '';
    $houseBuildingCountLCD = '';
    $procentHouseBuilding = '';
    $descriptionDeveloperLCD = '';
    $titleOrder = '';
    $metro = '';
    $metro_time = '';
    $adressOrder = '';
    $priceOrder = '';
    $priceOrderQuadro = '';
    $roomCount = '';
    $yearComplete = '';
    $houseComplete = '';
    $typeState = '';
    $numApart = '';
    $floor = '';
    $floorAllHouse = '';

    if ($request->input('typeOrder')){$typeOrder = $request->input('typeOrder');}
    if ($request->input('typeRoom')){$typeRoom = $request->input('typeRoom');}
    if ($request->input('areaRoom')){$areaRoom = $request->input('areaRoom');}
    if ($request->input('areaLifeRoom')){$areaLifeRoom = $request->input('areaLifeRoom');}
    if ($request->input('areaKitchenRoom')){$areaKitchenRoom = $request->input('areaKitchenRoom');}
    if ($request->input('wallHeightRoom')){$wallHeightRoom = $request->input('wallHeightRoom');}
    if ($request->input('bathroomCombinedRoom')){$bathroomCombinedRoom = $request->input('bathroomCombinedRoom');}
    if ($request->input('bathroomSeparateRoom')){$bathroomSeparateRoom = $request->input('bathroomSeparateRoom');}
    if ($request->input('balconyRoom')){$balconyRoom = $request->input('balconyRoom');}
    if ($request->input('loggiaRoom')){$loggiaRoom = $request->input('loggiaRoom');}
    if ($request->input('viewWindow')){$viewWindow = $request->input('viewWindow');}
    if ($request->input('finishing')){$finishing = $request->input('finishing');}
    if ($request->input('elevatorCountPassenger')){$elevatorCountPassenger = $request->input('elevatorCountPassenger');}
    if ($request->input('elevatorCountFreight')){$elevatorCountFreight = $request->input('elevatorCountFreight');}
    if ($request->input('typeHouse')){$typeHouse = $request->input('typeHouse');}
    if ($request->input('typeParking')){$typeParking = $request->input('typeParking');}
    if ($request->input('developAuthor')){$developAuthor = $request->input('developAuthor');}
    if ($request->input('yearCreate')){$yearCreate = $request->input('yearCreate');}
    if ($request->input('houseFinishingCount')){$houseFinishingCount = $request->input('houseFinishingCount');}
    if ($request->input('houseFinishingCountLCD')){$houseFinishingCountLCD = $request->input('houseFinishingCountLCD');}
    if ($request->input('houseBuildingCount')){$houseBuildingCount = $request->input('houseBuildingCount');}
    if ($request->input('houseBuildingCountLCD')){$houseBuildingCountLCD = $request->input('houseBuildingCountLCD');}
    if ($request->input('procentHouseBuilding')){$procentHouseBuilding = $request->input('procentHouseBuilding');}
    if ($request->input('descriptionDeveloperLCD')){$descriptionDeveloperLCD = $request->input('descriptionDeveloperLCD');}
    if ($request->input('titleOrder')){$titleOrder = $request->input('titleOrder');}
    if ($request->input('metro')){$metro = $request->input('metro');}
    if ($request->input('metro_time')){$metro_time = $request->input('metro_time');}
    if ($request->input('adressOrder')){$adressOrder = $request->input('adressOrder');}
    if ($request->input('priceOrder')){$priceOrder = $request->input('priceOrder');}
    if ($request->input('priceOrderQuadro')){$priceOrderQuadro = $request->input('priceOrderQuadro');}
    if ($request->input('roomCount')){$roomCount = $request->input('roomCount');}
    if ($request->input('yearComplete')){$yearComplete = $request->input('yearComplete');}
    if ($request->input('houseComplete')){$houseComplete = $request->input('houseComplete');}
    if ($request->input('typeState')){$typeState = $request->input('typeState');}
    if ($request->input('numApart')){$numApart = $request->input('numApart');}
    if ($request->input('floor')){$floor = $request->input('floor');}
    if ($request->input('floorAllHouse')){$floorAllHouse = $request->input('floorAllHouse');}

  DB::table('order_data')->insert([
    'typeOrder' => $typeOrder,
    'typeRoom' => $typeRoom,
    'areaRoom' => $areaRoom,
    'areaLifeRoom' => $areaLifeRoom,
    'areaKitchenRoom' => $areaKitchenRoom,
    'wallHeightRoom' => $wallHeightRoom,
    'bathroomCombinedRoom' => $bathroomCombinedRoom,
    'bathroomSeparateRoom' => $bathroomSeparateRoom,
    'balconyRoom' => $balconyRoom,
    'loggiaRoom' => $loggiaRoom,
    'viewWindow' => $viewWindow,
    'finishing' => $finishing,
    'elevatorCountPassenger' => $elevatorCountPassenger,
    'elevatorCountFreight' => $elevatorCountFreight,
    'typeParking' => $typeParking,
    'typeHouse' => $typeHouse,
    'developAuthor' => $developAuthor,
    'yearCreate' => $yearCreate,
    'houseFinishingCount' => $houseFinishingCount,
    'houseFinishingCountLCD' => $houseFinishingCountLCD,
    'houseBuildingCount' => $houseBuildingCount,
    'houseBuildingCountLCD' => $houseBuildingCountLCD,
    'procentHouseBuilding' => $procentHouseBuilding,
    'descriptionDeveloperLCD' => $descriptionDeveloperLCD,
    'titleOrder' => $titleOrder,
    'metro' => $metro,
    'metro_time' => $metro_time,
    'adressOrder' => $adressOrder,
    'priceOrder' => $priceOrder,
    'priceOrderQuadro' => $priceOrderQuadro,
    'roomCount' => $roomCount,
    'yearComplete' => $yearComplete,
    'houseComplete' => $houseComplete,
    'typeState' => $typeState,
    'numApart' => $numApart,
    'floor' => $floor,
    'floorAllHouse' => $floorAllHouse,
  ]);
  }
}
