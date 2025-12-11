<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'sport',
        'size',
        'color',
        'price',
        'image_url',
        'description',
        'in_stock',
        'stock_quantity',
        'material'
    ];

    protected $casts = [
        'in_stock' => 'boolean',
        'price' => 'decimal:2',
        'stock_quantity' => 'integer'
    ];
}