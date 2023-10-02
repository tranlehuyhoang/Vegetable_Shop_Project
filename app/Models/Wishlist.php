<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';

    protected $fillable = [
        'product',
        'user',

    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }
}
