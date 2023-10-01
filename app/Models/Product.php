<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'name',
        'image',
        'category',
        'price',


    ];
    public function categorys()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
