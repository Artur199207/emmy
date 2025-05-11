<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiping extends Model
{
    use HasFactory;
    protected $table = 'table_shiping';
    protected $fillable = [
        'titleRu',
        'titleEn',
        'descriptionRu',
        'descriptionEn',
        'image',
    ];
}
