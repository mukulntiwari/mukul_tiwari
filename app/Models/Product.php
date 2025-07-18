<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // ✅ This allows mass assignment for these fields
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
}
