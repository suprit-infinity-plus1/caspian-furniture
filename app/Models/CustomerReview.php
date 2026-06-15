<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerReview extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'reviewer_name',
        'reviewer_image',
        'rating',
        'review_text',
        'is_active',
        'sort_order',
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
