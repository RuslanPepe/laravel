let favorite_list = document.getElementById('favorite')
let room_order_id = document.getElementById('3')

if (document.getElementById('3')){room_order_id.addEventListener('click', function () {window.open('order-id', '_blank')})}
favorite_list.addEventListener('click' , function (){window.open('/favorite', '_blank')})

function clickStyle(num1,num2) {
  let btn_rental1 = document.getElementById('btn-rental-'+num1)
  let btn_rental2 = document.getElementById('btn-rental-'+num2)
  let type_rental = document.getElementById('type-rental-'+num1)
  type_rental.click()
  btn_rental1.className = 'type-btn'
  btn_rental2.className = 'type-btn-default'
  // console.log('Первый- '+type_rental1.checked+' Второй- '+type_rental2.checked)
}

function clickBtn(num) {
  document.getElementById('type-rental-'+num).click()
}

function styleChange() {
  //в аргументе преведенны все используеммые элементы
  for (let i = 0; i < styleChange.arguments.length; i++) {
    let stChange_btn = document.getElementById('btn-rental-'+styleChange.arguments[i])
    let stChange_type = document.getElementById('type-rental-'+styleChange.arguments[i])
    if (stChange_type.checked){
      stChange_btn.className = 'type-btn';
      // console.log('1')
    }
    else {
      stChange_btn.className = 'type-btn-default';
      // console.log('2')
    }
  }
}

function hiddenForm(num1, num2) {
  document.getElementsByClassName('type-'+num1)[0].style.display = 'none';
  document.getElementsByClassName('type-'+num2)[0].style.display = 'block';
}


