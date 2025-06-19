<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bath extends Model
{
    use HasFactory;
        protected $table = 'bath';
    protected $fillable = [
        'available', 'titleRu', 'titleEn', 'priceRu', 'articleRu', 'articleEn',
        'descriptionRu', 'descriptionEn', 'DeliveryRu', 'DeliveryEn',
        'informationRu', 'informationEn', 'payRu', 'payEn', 'image',
        'color', 'sizeRu', 'images',
    ];

    protected $casts = [
        'available' => 'boolean',
        'color' => 'array',
        'sizeRu' => 'array',
        'images' => 'array',
    ];
}
