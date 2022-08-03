<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
      'categories_id',
      'users_id',
      'name',
      'slug',
      'description',
      'price',
    ];

    protected $hidden = [

    ];

    public function gallery() {
      return $this->hasMany(Gallery::class, 'products_id', 'id');
    }

    public function user() {
      return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function category() {
      return $this->belongsTo( Category::class, 'categories_id', 'id');
    } 
}