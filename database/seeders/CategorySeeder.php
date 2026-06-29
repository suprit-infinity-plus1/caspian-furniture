<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Storage Solutions', 'image' => 'collections-banner.jpg', 'sort_order' => 1],
            ['name' => 'Lighting', 'image' => 'collections-banner-1.jpg', 'sort_order' => 2],
            ['name' => 'Office Chairs', 'image' => 'collections-banner-2.jpg', 'sort_order' => 3],
            ['name' => 'Accessories', 'image' => 'collections-banner-3.jpg', 'sort_order' => 4],
            ['name' => 'Decor Office', 'image' => 'collections-banner-4.jpg', 'sort_order' => 5],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => \Illuminate\Support\Str::slug($category['name']),
                'image' => $category['image'],
                'sort_order' => $category['sort_order'],
                'is_active' => true,
            ]);
        }
    }
}
