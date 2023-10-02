<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';

    protected $fillable = [
        'user',
        'rate',
        'product',
        'description',

    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
