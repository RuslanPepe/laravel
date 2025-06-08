<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
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
          "typeOrder" => "rental",
          "typeRoom" => "apartament",
          "adressOrder" => "Москва, Россия, Ходынская улица, 2с1",
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
          "image" => ["/metadataUpload/5e399975-0fc4-4563-808b-8fc5f6846769.jpeg"],
          "video" => [],
          "balconyRoom" => 1,
          "loggiaRoom" => 1,
          "viewWindow" => "На улицу",
          "bathroomCombinedRoom" => 1,
          "bathroomSeparateRoom" => 1,
          "finishing" => "Дизайнерский",
          "elevatorCountPassenger" => 1,
          "elevatorCountFreight" => 1,
          "conveniences" => [ "ramp", "garbageСhute" ],
          "parking" => "multiLevel",
          "furniture" => ["unFurniture", "kitchen", "rooms"],
          "bathType" => ["bath", "showerCabin"],
          "technic" => ["AirConditioning", "Refrigerator", "TV", "Dishwasher", "WashingMachine"],
          "connectionNetwork" => ["network", "telephone"],
          "price" => "150000",
          "communalServices" => "Собственник",
          "prepayment" => "3",
          "deposit" => "150000",
          "countMonthRental" => "Несколько месяцев",
          "conditions" => ["kids", "pets"],
          "selfEmployed" => "Да",
          "inn" => "012345678901",
          "numberPhone" => "+7978 579 94-34",
          "communicationMethod" => "callMessage",
          "title" => 'Хата в центре Москвы',
          "description" => 'ЖК "Пресня сити"'
        ];
    }
}
