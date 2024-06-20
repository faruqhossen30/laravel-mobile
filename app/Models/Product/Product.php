<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'short_description',
        'price',
        'status',
        'thumbnail',
        'brand_id',
        'author_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
}
