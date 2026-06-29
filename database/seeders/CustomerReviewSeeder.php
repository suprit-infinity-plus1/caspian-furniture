<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerReview;

class CustomerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'reviewer_name' => 'Jane Smith',
                'rating' => 5,
                'review_text' => 'Absolutely love this furniture! Great quality and service.',
                'reviewer_image' => 'testimonials-item-1.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'reviewer_name' => 'John Doe',
                'rating' => 5,
                'review_text' => 'The ergonomic chair is exactly what I needed for my home office.',
                'reviewer_image' => 'testimonials-item-2.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'reviewer_name' => 'Sarah Johnson',
                'rating' => 4,
                'review_text' => 'Very stylish and comfortable. Delivery was a bit slow, but worth the wait.',
                'reviewer_image' => 'testimonials-item-3.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($reviews as $review) {
            CustomerReview::create($review);
        }
    }
}
