<?php

test('example', function () {
    $response = $this->postJson('/authLogin', [
      'login' => 'Ruslan',
      'password' => '123'
    ]);

    $response->assertStatus(200);
});
