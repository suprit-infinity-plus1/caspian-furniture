<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'thumbnail',
        'description',
        'short_description',
        'price',
        'sale_price',
        'on_sale',
        'stock_quantity',
        'in_stock',
        'is_featured',
        'is_new_arrival',
        'is_active',
        'material',
        'dimensions',
        'weight',
        'color',
        'gallery_images',
        'tags',
        'sort_order',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'price'          => 'decimal:2',
        'sale_price'     => 'decimal:2',
        'on_sale'        => 'boolean',
        'in_stock'       => 'boolean',
        'is_featured'    => 'boolean',
        'is_new_arrival' => 'boolean',
        'is_active'      => 'boolean',
        'gallery_images' => 'array',
        'tags'           => 'array',
        'meta_keywords'  => 'array',
    ];

    /**
     * Auto-generate slug from name before saving.
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Product $product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    /**
     * The category this product belongs to.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the effective price (sale price if on sale, otherwise regular price).
     */
    public function getEffectivePriceAttribute(): string
    {
        return $this->on_sale && $this->sale_price
            ? $this->sale_price
            : $this->price;
    }

    /**
     * Scope: Only active products.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: Featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope: New arrivals.
     */
    public function scopeNewArrivals($query)
    {
        return $query->where('is_new_arrival', true);
    }

    /**
     * Scope: Products currently on sale.
     */
    public function scopeOnSale($query)
    {
        return $query->where('on_sale', true)->whereNotNull('sale_price');
    }

    /**
     * Scope: In-stock products only.
     */
    public function scopeInStock($query)
    {
        return $query->where('in_stock', true);
    }
}
