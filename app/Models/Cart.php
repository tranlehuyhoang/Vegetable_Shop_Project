<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected $fillable = [
        'product',
        'status',
        'user',
        'quantity',


    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }
}
