<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeBanner extends Model
{
    use SoftDeletes,HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button_text',
        'button_url',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['image'] ? asset('storage/' . $attributes['image']) : null,
        );
    }
}
