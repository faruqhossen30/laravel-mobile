<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* `mobile`.`attribute_values` */
        $attribute_values = array(
            array('id' => '1', 'attribute_id' => '1', 'name' => '1 GB', 'slug' => '1-gb', 'description' => '1 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:18', 'updated_at' => '2024-06-20 05:24:18'),
            array('id' => '2', 'attribute_id' => '1', 'name' => '2 GB', 'slug' => '2-gb', 'description' => '2 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:21', 'updated_at' => '2024-06-20 05:24:21'),
            array('id' => '3', 'attribute_id' => '1', 'name' => '4 GB', 'slug' => '4-gb', 'description' => '4 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:25', 'updated_at' => '2024-06-20 05:24:25'),
            array('id' => '4', 'attribute_id' => '1', 'name' => '8 GB', 'slug' => '8-gb', 'description' => '8 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:29', 'updated_at' => '2024-06-20 05:24:29'),
            array('id' => '5', 'attribute_id' => '1', 'name' => '16 GB', 'slug' => '16-gb', 'description' => '16 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:34', 'updated_at' => '2024-06-20 05:24:34'),
            array('id' => '6', 'attribute_id' => '1', 'name' => '32 GB', 'slug' => '32-gb', 'description' => '32 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:38', 'updated_at' => '2024-06-20 05:24:38'),
            array('id' => '7', 'attribute_id' => '1', 'name' => '64 GB', 'slug' => '64-gb', 'description' => '64 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:43', 'updated_at' => '2024-06-20 05:24:43'),
            array('id' => '8', 'attribute_id' => '1', 'name' => '128 GB', 'slug' => '128-gb', 'description' => '128 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:52', 'updated_at' => '2024-06-20 05:24:52'),
            array('id' => '9', 'attribute_id' => '1', 'name' => '256 GB', 'slug' => '256-gb', 'description' => '256 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:24:59', 'updated_at' => '2024-06-20 05:24:59'),
            array('id' => '10', 'attribute_id' => '2', 'name' => '1 GB', 'slug' => '1-gb', 'description' => '1 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:14', 'updated_at' => '2024-06-20 05:25:14'),
            array('id' => '11', 'attribute_id' => '2', 'name' => '2 GB', 'slug' => '2-gb', 'description' => '2 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:16', 'updated_at' => '2024-06-20 05:25:16'),
            array('id' => '12', 'attribute_id' => '2', 'name' => '4 GB', 'slug' => '4-gb', 'description' => '4 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:19', 'updated_at' => '2024-06-20 05:25:19'),
            array('id' => '13', 'attribute_id' => '2', 'name' => '8 GB', 'slug' => '8-gb', 'description' => '8 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:25', 'updated_at' => '2024-06-20 05:25:25'),
            array('id' => '14', 'attribute_id' => '2', 'name' => '16 GB', 'slug' => '16-gb', 'description' => '16 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:29', 'updated_at' => '2024-06-20 05:25:29'),
            array('id' => '15', 'attribute_id' => '2', 'name' => '32 GB', 'slug' => '32-gb', 'description' => '32 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:33', 'updated_at' => '2024-06-20 05:25:33'),
            array('id' => '16', 'attribute_id' => '2', 'name' => '64 GB', 'slug' => '64-gb', 'description' => '64 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:37', 'updated_at' => '2024-06-20 05:25:37'),
            array('id' => '17', 'attribute_id' => '2', 'name' => '128 GB', 'slug' => '128-gb', 'description' => '128 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:41', 'updated_at' => '2024-06-20 05:25:41'),
            array('id' => '18', 'attribute_id' => '2', 'name' => '256 GB', 'slug' => '256-gb', 'description' => '256 GB', 'author_id' => '1', 'created_at' => '2024-06-20 05:25:44', 'updated_at' => '2024-06-20 05:25:44'),
            array('id' => '19', 'attribute_id' => '3', 'name' => 'Mali-G720 MP12', 'slug' => 'mali-g720-mp12', 'description' => 'Mali-G720 MP12', 'author_id' => '1', 'created_at' => '2024-06-20 05:28:42', 'updated_at' => '2024-06-20 05:28:42'),
            array('id' => '20', 'attribute_id' => '3', 'name' => 'Adreno 750', 'slug' => 'adreno-750', 'description' => 'Adreno 750', 'author_id' => '1', 'created_at' => '2024-06-20 05:28:49', 'updated_at' => '2024-06-20 05:28:49'),
            array('id' => '21', 'attribute_id' => '3', 'name' => 'Samsung Xclipse 940', 'slug' => 'samsung-xclipse-940', 'description' => 'Samsung Xclipse 940', 'author_id' => '1', 'created_at' => '2024-06-20 05:28:57', 'updated_at' => '2024-06-20 05:28:57'),
            array('id' => '22', 'attribute_id' => '3', 'name' => 'Mali-G77 MP9', 'slug' => 'mali-g77-mp9', 'description' => 'Mali-G77 MP9', 'author_id' => '1', 'created_at' => '2024-06-20 05:29:27', 'updated_at' => '2024-06-20 05:29:27'),
            array('id' => '23', 'attribute_id' => '4', 'name' => '3250 MHz', 'slug' => '3250-mhz', 'description' => '3250 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:17', 'updated_at' => '2024-06-20 05:30:17'),
            array('id' => '24', 'attribute_id' => '4', 'name' => '3300 MHz', 'slug' => '3300-mhz', 'description' => '3300 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:27', 'updated_at' => '2024-06-20 05:30:27'),
            array('id' => '25', 'attribute_id' => '4', 'name' => '3000 MHz', 'slug' => '3000-mhz', 'description' => '3000 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:38', 'updated_at' => '2024-06-20 05:30:38'),
            array('id' => '26', 'attribute_id' => '4', 'name' => '3200 MHz', 'slug' => '3200-mhz', 'description' => '3200 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:48', 'updated_at' => '2024-06-20 05:30:48'),
            array('id' => '27', 'attribute_id' => '4', 'name' => '2800 MHz', 'slug' => '2800-mhz', 'description' => '2800 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:30:57', 'updated_at' => '2024-06-20 05:30:57'),
            array('id' => '28', 'attribute_id' => '4', 'name' => '2910 MHz', 'slug' => '2910-mhz', 'description' => '2910 MHz', 'author_id' => '1', 'created_at' => '2024-06-20 05:31:08', 'updated_at' => '2024-06-20 05:31:08'),
            array('id' => '29', 'attribute_id' => '5', 'name' => '1000', 'slug' => '1000', 'description' => '1000', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:04', 'updated_at' => '2024-06-20 05:32:04'),
            array('id' => '30', 'attribute_id' => '5', 'name' => '2000', 'slug' => '2000', 'description' => '2000', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:06', 'updated_at' => '2024-06-20 05:32:06'),
            array('id' => '31', 'attribute_id' => '5', 'name' => '2400', 'slug' => '2400', 'description' => '2400', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:10', 'updated_at' => '2024-06-20 05:32:10'),
            array('id' => '32', 'attribute_id' => '5', 'name' => '3000', 'slug' => '3000', 'description' => '3000', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:13', 'updated_at' => '2024-06-20 05:32:13'),
            array('id' => '33', 'attribute_id' => '5', 'name' => '4000', 'slug' => '4000', 'description' => '4000', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:17', 'updated_at' => '2024-06-20 05:32:17'),
            array('id' => '34', 'attribute_id' => '5', 'name' => '4200', 'slug' => '4200', 'description' => '4200', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:22', 'updated_at' => '2024-06-20 05:32:22'),
            array('id' => '35', 'attribute_id' => '5', 'name' => '5000', 'slug' => '5000', 'description' => '5000', 'author_id' => '1', 'created_at' => '2024-06-20 05:32:26', 'updated_at' => '2024-06-20 05:32:26'),
            array('id' => '36', 'attribute_id' => '6', 'name' => 'Accelerometer', 'slug' => 'accelerometer', 'description' => 'Accelerometer', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:18', 'updated_at' => '2024-06-20 05:33:18'),
            array('id' => '37', 'attribute_id' => '6', 'name' => 'Ambient temperature', 'slug' => 'ambient-temperature', 'description' => 'Ambient temperature', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:26', 'updated_at' => '2024-06-20 05:33:26'),
            array('id' => '38', 'attribute_id' => '6', 'name' => 'Magnetic field', 'slug' => 'magnetic-field', 'description' => 'Magnetic field', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:37', 'updated_at' => '2024-06-20 05:33:37'),
            array('id' => '39', 'attribute_id' => '6', 'name' => 'Gyroscope', 'slug' => 'gyroscope', 'description' => 'Gyroscope', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:49', 'updated_at' => '2024-06-20 05:33:49'),
            array('id' => '40', 'attribute_id' => '6', 'name' => 'Light', 'slug' => 'light', 'description' => 'Light', 'author_id' => '1', 'created_at' => '2024-06-20 05:33:56', 'updated_at' => '2024-06-20 05:33:56'),
            array('id' => '41', 'attribute_id' => '6', 'name' => 'Proximity', 'slug' => 'proximity', 'description' => 'Proximity', 'author_id' => '1', 'created_at' => '2024-06-20 05:34:01', 'updated_at' => '2024-06-20 05:34:01')
        );

        AttributeValue::insert($attribute_values);
    }
}
