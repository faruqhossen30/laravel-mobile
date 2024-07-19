<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting\WebsiteSetting;
use Attribute;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            PermissionSeeder::class,
            SiteSetting::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            BrandSeeder::class,
        ]);
        // \App\Models\User::factory(50)->create();
    }
}
