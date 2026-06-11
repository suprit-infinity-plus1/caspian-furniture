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
        'position',
        'status',
        'button_text',
        'button_url',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['image'] ? asset('storage/' . $attributes['image']) : null,
        );
    }
}
