<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';
    
    protected $fillable = [
      'transaction_id',
      'product_id',
      'amount',
      'total_price',
      'resi',
      'shipping_status',
      'code'
    ];
  
    protected $hidden = [
  
    ];
}
