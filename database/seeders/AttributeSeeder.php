<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* `mobile`.`attributes` */
        $attributes = array(
            array('id' => '1', 'name' => 'RAM', 'slug' => 'ram', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:12', 'updated_at' => '2024-06-20 05:24:12'),
            array('id' => '2', 'name' => 'ROM', 'slug' => 'rom', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:08', 'updated_at' => '2024-06-20 05:25:08'),
            array('id' => '3', 'name' => 'GPU', 'slug' => 'gpu', 'author_id' => '1', 'created_at' => '2024-06-20 05:28:32', 'updated_at' => '2024-06-20 05:28:32'),
            array('id' => '4', 'name' => 'Clock Speed', 'slug' => 'clock-speed', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:02', 'updated_at' => '2024-06-20 05:30:02'),
            array('id' => '5', 'name' => 'Battery', 'slug' => 'battery', 'author_id' => '1', 'created_at' => '2024-06-20 05:31:46', 'updated_at' => '2024-06-20 05:31:46'),
            array('id' => '6', 'name' => 'Sensor', 'slug' => 'sensor', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:14', 'updated_at' => '2024-06-20 05:33:14')
        );

        Attribute::insert($attributes);

    }
}
