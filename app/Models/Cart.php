<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    protected $fillable = [
      'products_id',
      'users_id',
    ];

    protected $hidden = [

    ];

    public function product() {
      return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function users() {
      return $this->belongsTo(Product::class, 'users_id', 'id');
    }
}
