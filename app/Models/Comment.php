<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}