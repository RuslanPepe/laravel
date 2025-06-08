<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
  protected $guarded = ['id', 'created_at', 'updated_at'];

  // for authentification a login
  public function getAuthIdentifierName(){
    return 'login';
  }

  // Hash password
  public function setPasswordAttribute($password){
    $this->attributes['password'] = Hash::make($password);
  }
}
