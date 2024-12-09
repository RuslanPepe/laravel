<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = [
          'type_room' => 'Новостройка',
          'area_room' => '91',
          'area_life_room' => '40',
          'area_kitchen_room' => '15',
          'wall_height_room' => '3,9',
          'bathroom_combined_room' => '3',
          'bathroom_separate_room' => '2',
          'balcony_room' => '1',
          'loggia_room' => '2',
          'view_window' => 'На улицу',
          'finishing' => 'Чистовая',
          'elevator_count_passenger' => '2',
          'elevator_count_freight' => '1',
          'type_house' => 'Монолитный',
          'type_parking' => 'Подземная',
          'developAuthor' => 'MR Group',
          'yearCreate' => '2019',
          'houseFinishingCount' => '156',
          'houseFinishingCountLCD' => '172',
          'houseBuildingCount' => '190',
          'houseBuildingCountLCD' => '172',
          'procentHouseBuilding' => '97',
          'descriptionDeveloperLCD' => 'Жилой комплекс бизнес-класса «Пресня Сити» компаний MR Group, Coalco, при финансовой поддержке Банка ВТБ возведен на участке 15 га в историческом месте Москвы (м. «Улица 1905 года», Ходынская ул., 2). В составе комплекса три 44-этажных башни, а также реконструируемое историческое здание начала 30-х годов — хлебозавод имени В. П. Зотова.',
          'titleOrder' => 'Продается кв 3 гм.',
          'metro1' => 'Арбатская',
          'metro2' => 'Смоленская',
          'metro3' => 'Алекс.сад',
          'metro_time1' => '7',
          'metro_time2' => '5',
          'metro_time3' => '10',
          'adressOrder' => 'Москва, Крестовоздвиженский переулок, 4',
          'priceOrder' => '142 500 000',
          'priceOrderQuadro' => '1 560 000',
          'roomCount' => '3',
          'yearComplete' => '2024',
          'houseComplete' => 'Сдан'
      ];
      return json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
