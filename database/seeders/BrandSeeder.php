<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = array("alcatel", "apple", "asus", "helio", "htc", "huawei", "infinix", "itel", "lava", "lenovo", "lg", "maximus", "micromax", "motorola", "mycell", "nokia", "okapia", "oneplus", "oppo", "realme", "samsung", "sony", "symphony", "tecno", "umidigi", "vivo", "walton", "we", "xiaomi");

        foreach ($brands as $key => $brand) {
            Brand::create([
                'name'      => $brand,
                'slug'      => Str::slug($brand),
                'author_id' => 1,
                'status'    => 1
            ]);
        }
    }
}
