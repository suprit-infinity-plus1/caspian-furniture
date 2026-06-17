<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'), // Add password since firstOrCreate won't use factory defaults automatically if we specify it manually or we can use factory
            ]
        );

        \App\Models\Lead::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'subject' => 'Inquiry about modern sofa',
            'message' => 'I would like to know if the modern sofa is available in blue color.',
        ]);

        $category = \App\Models\Category::create([
            'name' => 'Living Room',
            'slug' => 'living-room',
            'description' => 'Furniture for your living room',
            'is_active' => true,
        ]);

        \App\Models\Product::create([
            'category_id' => $category->id,
            'name' => 'Modern Sofa',
            'slug' => 'modern-sofa',
            'sku' => 'SOFA-001',
            'price' => 599.99,
            'description' => 'A very comfortable modern sofa.',
            'short_description' => 'Comfortable modern sofa',
            'is_active' => true,
            'in_stock' => true,
            'stock_quantity' => 10,
        ]);

        \App\Models\CustomerReview::create([
            'reviewer_name' => 'Jane Smith',
            'rating' => 5,
            'review_text' => 'Absolutely love this furniture! Great quality and service.',
            'is_active' => true,
        ]);

        \App\Models\HomeBanner::create([
            'title' => 'Summer Sale',
            'subtitle' => 'Up to 50% off on all living room furniture',
            'image' => 'banners/summer-sale.jpg',
            'button_text' => 'Shop Now',
            'button_url' => '/shop',
            'is_active' => true,
        ]);

        \App\Models\PageSetting::create([
            'site_title' => 'Caspian Furniture',
            'phone_number' => '+1-800-FURNITURE',
            'email' => 'contact@caspianfurniture.com',
            'address' => '123 Furniture Street, NY, USA',
        ]);
    }
}
