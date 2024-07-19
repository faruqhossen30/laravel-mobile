<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\Review\ReviewType;
use App\Models\Category;
use Illuminate\Database\Seeder;


use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* `mobile`.`categories` */
        $categories = array(
            array('id' => '1', 'name' => 'Android', 'slug' => 'android', 'thumbnail' => NULL, 'author_id' => '1', 'status' => '1', 'created_at' => NULL, 'updated_at' => '2024-07-11 17:20:51'),
            array('id' => '2', 'name' => 'Button', 'slug' => 'button', 'thumbnail' => NULL, 'author_id' => '1', 'status' => '1', 'created_at' => NULL, 'updated_at' => '2024-07-11 17:21:54'),
            array('id' => '3', 'name' => 'Folding', 'slug' => 'folding', 'thumbnail' => NULL, 'author_id' => '1', 'status' => '1', 'created_at' => NULL, 'updated_at' => '2024-07-11 17:21:47'),
            array('id' => '4', 'name' => 'IPhone', 'slug' => 'iphone', 'thumbnail' => NULL, 'author_id' => '1', 'status' => '1', 'created_at' => NULL, 'updated_at' => '2024-07-11 17:22:07')
        );




        Category::insert($categories);
    }
}
