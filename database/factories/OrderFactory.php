<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          "typeOrder" => "Продажа",
          "typeRoom" => "apartament",
          "adressOrder" => "Москва, Россия, Ходынская улица, 2с1",
          "lat" => rand(30.10000, 89.999999),
          "lon" => rand(30.10000, 89.999999),
          "yearCreate" => "2024",
          "typeHouse" => "panel",
          "roomCount" => "3",
          "areaRoom" => "131",
          "areaLifeRoom" => "91",
          "areaKitchenRoom" => "15",
          "floor" => "18",
          "floorAllHouse" => "44",
          "typeState" => "flat",
          "numApart" => "232",
          "image" => $this->faker->randomElement([
            ["/storage/uploads/eblOomuZhP1ogM4rug4m1llgY2aHUH8FtlkPr4OJ.png"],
            ["/storage/uploads/HN4DqVqiaxKojdpvFXcHOh0YKBk7ozdzyDTFzo1S.png"],
            ["storage/uploads/oVVNKmBWrrBaxQYajLjJC78jrCyM5yKRm6bwsmd8.jpg"],
          ]),
          "video" => [],
          "balconyRoom" => 1,
          "loggiaRoom" => 1,
          "viewWindow" => "На улицу",
          "bathroomCombinedRoom" => 1,
          "bathroomSeparateRoom" => 1,
          "finishing" => "Дизайнерский",
          "elevatorCountPassenger" => 1,
          "elevatorCountFreight" => 1,
          "conveniences" => ['Пандус', 'Мусоропровод'],
          "parking" => "multiLevel",
          "furniture" => ["Без мебели", "На кухне", "В комнатах"],
          "bathType" => ['Ванна', 'Душевая кабина'],
          "technic" => ['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина'],
          "connectionNetwork" => ["Интернет", "Телефон"],
          "price" => "15000000",
          "communalServices" => "Собственник",
          "prepayment" => "3",
          "deposit" => "150000",
          "countMonthRental" => "Несколько месяцев",
          "conditions" => ["Дети", "Питомцы"],
          "selfEmployed" => "Да",
          "inn" => "012345678901",
          "numberPhone" => "+7978 579 94-34",
          "communicationMethod" => "Звонки",
          "title" => "Хата в центре Москвы",
          "description" => "ЖК 'Пресня сити'",
      ];
    }
}
