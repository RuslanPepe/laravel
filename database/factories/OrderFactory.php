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
          "image" => $this->faker->randomElement([
            ["/metadataUpload/2bdd31ca-8185-4da1-a345-cd12e4d19739.png"],
            ["/metadataUpload/e08b5b1e-bf7e-4963-aa0c-bdd0e587a32a.png"],
            ["/metadataUpload/f838fb82-9302-4e17-8d1b-7f9d28daca40.jpeg"],
            ["/metadataUpload/92f2b30d-c7b3-4da8-9485-055d32e94005.jpeg"],
            ["/metadataUpload/2703f8ed-5bab-4117-955a-91ddef73ddd6.jpeg"],
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
