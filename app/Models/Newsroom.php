<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsroom extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'user' , 'slug' , 'body'];
    
    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function newsroom_category(): HasMany
    {
        return $this->hasMany(NewsroomCategory::class);
    }

    public function newsroom_image(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
