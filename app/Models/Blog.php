<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = [
        'image',
        'dataRu',
        'dataEn',
        'titleRu',
        'titleEn',
        'descriptionRu',
        'descriptionEn',
        'informationRu',
        'informationEn',
    ];
}
