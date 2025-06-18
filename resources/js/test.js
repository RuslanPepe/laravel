
let count = [
    "typeOrder",
    "typeRoom",
    "adressOrder",
    "yearCreate",
    "typeHouse",
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
    "balconyRoom",
    "loggiaRoom",
    "viewWindow",
    "bathroomCombinedRoom",
    "bathroomSeparateRoom",
    "finishing",
    "technic",
    "elevatorCountPassenger",
    "elevatorCountFreight",
    "conveniences",
    "bathType",
    "connectionNetwork",
    "price",
    "network",
    "prepayment",
    "deposit",
    "countMonthRental",
    "conditions",
    "selfEmployed",
    "inn",
    "numberPhone",
    "communicationMethod",
  ]

  for (let i = 0; i < count.length; i++) {
    console.log("$table->string('"+count[i]+"')->nullable();")
  }


// requestData: {
//   typeOrder: "Продажа"
//   typeRoom: "apartament",
//     adressOrder: "Москва, Россия, Ходынская улица, 2с1",
//     yearCreate: "2024",
//     typeHouse: "panel",
//     roomCount: "3",
//     areaRoom: "131",
//     areaLifeRoom: "91",
//     areaKitchenRoom: "15",
//     floor: "18",
//     floorAllHouse: "44",
//     typeState: "flat",
//     numApart: "232",
//     image: [
//     ["/storage/uploads/eblOomuZhP1ogM4rug4m1llgY2aHUH8FtlkPr4OJ.png"],
//     ["/storage/uploads/HN4DqVqiaxKojdpvFXcHOh0YKBk7ozdzyDTFzo1S.png"],
//     ["storage/uploads/oVVNKmBWrrBaxQYajLjJC78jrCyM5yKRm6bwsmd8.jpg"],
//   ],
//     video: [],
//     balconyRoom: 1,
//     loggiaRoom: 1,
//     viewWindow: "На улицу",
//     bathroomCombinedRoom: 1,
//     bathroomSeparateRoom: 1,
//     finishing: "Дизайнерский",
//     elevatorCountPassenger: 1,
//     elevatorCountFreight: 1,
//     conveniences: ['Пандус', 'Мусоропровод'],
//     parking: "multiLevel",
//     furniture: ["Без мебели", "На кухне", "В комнатах"],
//     bathType: ['Ванна', 'Душевая кабина'],
//     technic: ['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина'],
//     connectionNetwork: ["Интернет", "Телефон"],
//     price: "15000000",
//     communalServices: "Собственник",
//     prepayment: "3",
//     deposit: "150000",
//     countMonthRental: "Несколько месяцев",
//     conditions: ["Дети", "Питомцы"],
//     selfEmployed: "Да",
//     inn: "012345678901",
//     numberPhone: "+7978 579 94-34",
//     communicationMethod: "Звонки",
//     title: "Хата в центре Москвы",
//     description: "ЖК 'Пресня сити'"
// }




// "typeOrder": "rental", "typeRoom": "apartament", "adressOrder": "Москва, Россия, Ходынская улица, 2с1", "yearCreate": "2024", "typeHouse": "panel", "roomCount": "3", "areaRoom": "131", "areaLifeRoom": "91", "areaKitchenRoom": "15", "floor": "18", "floorAllHouse": "44", "typeState": "flat", "numApart": "232", "image": [ "/metadataUpload/5e399975-0fc4-4563-808b-8fc5f6846769.jpeg" ], "video": [], "balconyRoom": 1, "loggiaRoom": 1, "viewWindow": "На улицу", "bathroomCombinedRoom": 1, "bathroomSeparateRoom": 1, "finishing": "Дизайнерский", "elevatorCountPassenger": 1, "elevatorCountFreight": 1, "conveniences": [ "ramp", "garbageСhute" ], "parking": "multiLevel", "furniture": [ "unFurniture", "kitchen", "rooms" ], "bathType": [ "bath", "showerCabin" ], "technic": [ "AirConditioning", "Refrigerator", "TV", "Dishwasher", "WashingMachine" ], "connectionNetwork": [ "network", "telephone" ], "price": "150 000", "network": "Собственник", "prepayment": "3", "deposit": "150 000", "countMonthRental": "Несколько месяцев", "conditions": [ "kids", "pets" ], "selfEmployed": "Да", "inn": "012345678901", "numberPhone": "+7978 579 94-34", "communicationMethod": "callMessage" }
