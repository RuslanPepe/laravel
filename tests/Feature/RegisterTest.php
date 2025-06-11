<?php


test('Auth Register Test', function () {
    $response = $this->postJson('/authReg', [
      'login' => 'Ruslan',
      'password' => '123'
    ]);

  $response->assertStatus(201);


  $response->dump();

});
