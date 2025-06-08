<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model{
  use HasFactory;
  protected $casts = [
    'image' => 'array',
    'video' => 'array',
    'conveniences' => 'array',
    'furniture' => 'array',
    'bathType' => 'array',
    'technic' => 'array',
    'connectionNetwork' => 'array',
    'conditions' => 'array',
  ];

}
