<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeBanner;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Ergonomic Chair Pro',
                'subtitle' => 'Get superior support and better posture with ergonomic chairs for long work hours',
                'button_text' => 'Explore Collection',
                'button_url' => 'shop-default.html',
                'image' => 'slider-1.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Wireless Charging Dock',
                'subtitle' => 'Get superior support and better posture with ergonomic chairs for long work hours',
                'button_text' => 'Explore Collection',
                'button_url' => 'shop-default.html',
                'image' => 'slider-2.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Ergonomic Chair Pro',
                'subtitle' => 'Get superior support and better posture with ergonomic chairs for long work hours',
                'button_text' => 'Explore Collection',
                'button_url' => 'shop-default.html',
                'image' => 'slider-3.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Ergonomic Duo Bundle',
                'subtitle' => 'Get superior support and better posture with ergonomic chairs for long work hours',
                'button_text' => 'Explore Collection',
                'button_url' => 'shop-default.html',
                'image' => 'slider-4.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($banners as $banner) {
            HomeBanner::create($banner);
        }
    }
}
