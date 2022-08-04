<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
      'users_id',
      'categories_id',
      'name',
      'is_open',
    ];

    protected $hidden = [

    ];

    public function user() {
      return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function category() {
      return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
