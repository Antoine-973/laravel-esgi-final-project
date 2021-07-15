<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'amount',
        'seller_part',
        'pokebay_part',
        'email'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
