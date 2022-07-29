<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Iluminate\Database\Eqoquent\SoftDelete;

class Category extends Model
{
    use HasFactory;
    use SoftDelete;

    protected $filable = [
      'name',
      'image',
      'slug',
    ];

    protected $hidden = [

    ];
}
