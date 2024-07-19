<?php

namespace App\Models\Product;

use App\Models\AttributeValue;
use App\Models\Brand;
use Attribute;
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

    public function items()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attributes');
    }
    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function getTest()
    {
        // $product = Product::with(['brand', 'items.attribute'])->firstWhere('slug', $slug);
        // $list = $this->items->attribute;
        dd($this->items);
        $attributes = collect($this->items)->unique('attribute_id')->values()->all();

        $data = collect([]);
        foreach ($attributes as $key => $item) {
            $attribute = [];
            $attribute['id'] = $item->attribute->id;
            $attribute['sort'] = $item->attribute->sort;
            $attribute['name'] = $item->attribute->name;
            $attribute['slug'] = $item->attribute->slug;
            $attribute['items'] = $list->where('attribute_id', $item->attribute->id)->select('id', 'name', 'slug', 'description')->sortBy(['id', 'asc'])->values()->all();
            $data[] = $attribute;
        }

    }
}
