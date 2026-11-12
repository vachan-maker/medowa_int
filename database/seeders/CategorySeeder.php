<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the categories with their images.
     */
    public function run(): void
    {
        $categories = [
            'iPhone' => 'images/categories/store-card-13-iphone-nav-202609.webp',
            'iMac' => 'images/categories/store-card-13-mac-nav-202610.webp',
            'Airpods' => 'images/categories/store-card-13-airpods-nav-202509.webp',
            'Airtags' => 'images/categories/store-card-13-airtags-nav-202601_GEO_IN.webp',
            'Accessories' => 'images/categories/store-card-13-accessories-nav-202609.webp',
            'Home' => 'images/categories/store-card-13-home-nav-202610.webp',
            'Apple Watch' => 'images/categories/store-card-13-watch-nav-202609_GEO_IN.webp',
        ];

        foreach ($categories as $name => $imageUrl) {
            Categories::updateOrCreate(
                ['name' => $name],
                ['image_url' => $imageUrl],
            );
        }
    }
}
