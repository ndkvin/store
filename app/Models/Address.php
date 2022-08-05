<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $table = 'address';

    protected $fillable = [
      'users_id',
      'address_one',
      'address_two',
      'provinces_id',
      'regencies_id',
      'phone_number',
      'zip_code',
      'country'
    ];
  
    protected $hidden = [
  
    ];

    public function user() {
      return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
