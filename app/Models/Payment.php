<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'amount',
        'seller_part',
        'pokebay_part',
        'email'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
