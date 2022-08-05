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

    public function product(){
      return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function transaction(){
        return $this->hasOne(Transaction::class, 'id', 'transaction_id');
    }
}
