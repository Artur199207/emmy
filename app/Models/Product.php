<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'titleRu',
        'titleEn',
        'price',
        'image',
        'newPrice',
        'images',
        'spaceNameRu',
        'spaceNameEn',
        'descriptionRu',
        'descriptionEn',
        'categoryRu',
        'categoryEn',
        'weigthRu',
        'weigthEn',
        'BoxRu',
        'BoxEn',
        'informationRu',
        'informationEn',
        'payRu',
        'payEn',
        'sizeRu',
        'sizeEn',
        'DeliveryRu',
        'DeliveryEn',
    ];

    protected $casts = [
        'images' => 'array',
        'sizeRu' => 'array',
        'sizeEn' => 'array',
    ];
}
