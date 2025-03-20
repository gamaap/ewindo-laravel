<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = ['images'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->type . '-' . $product->cable_type);
        });

        static::deleting(function ($product) {
            foreach ($product->images as $image) {
                Storage::delete('public/' . $image->image_path);
            }
            $product->images()->delete();
        });
    }

    public function product_group(): BelongsTo
    {
        return $this->belongsTo(ProductGroup::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function certificates(): BelongsToMany
    {
        return $this->belongsToMany(Certificate::class, 'product_certificate');
    }

    public function product_groups(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
