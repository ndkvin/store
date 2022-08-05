<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  use HasFactory;

  protected $fillable = [
    'users_id',
    'insurence_price',
    'status',
    'total_price',
    'shipping_price',
    'code',
  ];

  protected $hidden = [

  ];
}
