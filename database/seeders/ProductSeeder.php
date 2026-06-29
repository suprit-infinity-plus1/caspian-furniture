<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        $categoryId = $category ? $category->id : null;

        $products = [
            ['name' => 'Ergonomic Chair Pro', 'price' => 79.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-1.jpg', 'gallery_images' => ['product-1.1.jpg']],
            ['name' => 'Open Box - Adjustable Laptop Stand', 'price' => 98.00, 'sale_price' => 79.99, 'on_sale' => true, 'thumbnail' => 'product-2.jpg', 'gallery_images' => ['product-2.1.jpg']],
            ['name' => 'Laptop Stand', 'price' => 98.00, 'sale_price' => 89.99, 'on_sale' => true, 'thumbnail' => 'product-3.3.jpg', 'gallery_images' => ['product-3.1.jpg']],
            ['name' => 'Double Standing Desk', 'price' => 69.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-4.jpg', 'gallery_images' => ['product-4.1.jpg']],
            ['name' => 'Wireless Charging Dock', 'price' => 98.00, 'sale_price' => 89.99, 'on_sale' => true, 'thumbnail' => 'product-5.jpg', 'gallery_images' => ['product-5.1.jpg']],
            ['name' => 'Ergonomic Headrest', 'price' => 79.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-6.jpg', 'gallery_images' => ['product-6.1.jpg']],
            ['name' => 'Hybrid Laptop Sleeve', 'price' => 98.00, 'sale_price' => 79.99, 'on_sale' => true, 'thumbnail' => 'product-7.jpg', 'gallery_images' => ['product-7.1.jpg']],
            ['name' => 'Wireless Charging Tray', 'price' => 69.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-8.jpg', 'gallery_images' => ['product-8.1.jpg']],
            ['name' => 'Softside Chair', 'price' => 79.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-9.jpg', 'gallery_images' => ['product-9.1.jpg']],
            ['name' => 'Softside Chair - Sale', 'price' => 98.00, 'sale_price' => 79.99, 'on_sale' => true, 'thumbnail' => 'product-10.jpg', 'gallery_images' => ['product-10.1.jpg']],
            ['name' => 'Double Standing Desk - Sale', 'price' => 98.00, 'sale_price' => 89.99, 'on_sale' => true, 'thumbnail' => 'product-11.jpg', 'gallery_images' => ['product-11.1.jpg']],
            ['name' => 'Duo Standing Desk', 'price' => 69.99, 'sale_price' => null, 'on_sale' => false, 'thumbnail' => 'product-12.jpg', 'gallery_images' => ['product-12.1.jpg']],
            ['name' => 'Alumina Lamp', 'price' => 98.00, 'sale_price' => 79.99, 'on_sale' => true, 'thumbnail' => 'product-1.jpg', 'gallery_images' => ['product-1.1.jpg']],
        ];

        $sortOrder = 1;
        foreach ($products as $prod) {
            Product::create([
                'category_id' => $categoryId,
                'name' => $prod['name'],
                'slug' => Str::slug($prod['name']) . '-' . $sortOrder,
                'price' => $prod['price'],
                'sale_price' => $prod['sale_price'],
                'on_sale' => $prod['on_sale'],
                'thumbnail' => $prod['thumbnail'],
                'gallery_images' => $prod['gallery_images'],
                'sku' => 'SKU-' . str_pad($sortOrder, 4, '0', STR_PAD_LEFT),
                'stock_quantity' => 100,
                'in_stock' => true,
                'is_active' => true,
                'sort_order' => $sortOrder,
            ]);
            $sortOrder++;
        }
    }
}
