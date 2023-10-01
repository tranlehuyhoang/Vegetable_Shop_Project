<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $fillable = [
        'code',
        'user',
        'payment',

    ];
    public static function getAllOrders()
    {
        return Order::orderByDesc('id')->get();
    }
}
