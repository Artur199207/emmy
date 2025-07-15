<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skins extends Model
{
    use HasFactory;
    protected $table = 'skins';
     protected $fillable = [
        'available',
        'titleRu',
        'titleEn',
        'priceRu',
        'articleRu',
        'articleEn',
        'descriptionRu',
        'descriptionEn',
        'DeliveryRu',
        'DeliveryEn',
        'informationRu',
        'informationEn',
        'payRu',
        'payEn',
        'image',
        'color',
        'sizeRu',
        'images',
        'shape1',
        'shape2',
        'annotationRu',
        'annotationEn',
    ];

    protected $casts = [
        'available' => 'boolean',
        'color' => 'array',
        'sizeRu' => 'array',
        'images' => 'array',
        'shape1' => 'boolean',
        'shape2' => 'boolean',
    ];
}
