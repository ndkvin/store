<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;


    protected $fillable = [
      'products_id',
      'file_name',
    ];

    protected $hidden = [

    ];

    public function product() {
      return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
