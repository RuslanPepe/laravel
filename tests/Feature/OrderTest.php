<?php

test('Order test create', function () {

  $this->withoutExceptionHandling();

  $response = $this->postJson('/DBcreateOrder', [
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
    "image" => json_encode(["/metadataUpload/5e399975-0fc4-4563-808b-8fc5f6846769.jpeg"]),
    "video" => json_encode([]),
    "balconyRoom" => 1,
    "loggiaRoom" => 1,
    "viewWindow" => "На улицу",
    "bathroomCombinedRoom" => 1,
    "bathroomSeparateRoom" => 1,
    "finishing" => "Дизайнерский",
    "elevatorCountPassenger" => 1,
    "elevatorCountFreight" => 1,
    "conveniences" => json_encode([ "ramp", "garbageСhute" ]),
    "parking" => "multiLevel",
    "furniture" => json_encode(["unFurniture", "kitchen", "rooms"]),
    "bathType" => json_encode(["bath", "showerCabin"]),
    "technic" => json_encode(["AirConditioning", "Refrigerator", "TV", "Dishwasher", "WashingMachine"]),
    "connectionNetwork" => json_encode(["network", "telephone"]),
    "price" => "150000",
    "communalServices" => "Собственник",
    "prepayment" => "3",
    "deposit" => "150000",
    "countMonthRental" => "Несколько месяцев",
    "conditions" => json_encode(["kids", "pets"]),
    "selfEmployed" => "Да",
    "inn" => "012345678901",
    "numberPhone" => "+7978 579 94-34",
    "communicationMethod" => "callMessage",
    "title" => 'Хата в центре Москвы',
    "description" => 'ЖК "Пресня сити"'
  ]);

  $response->assertStatus(201);

  $response->dump();
});
