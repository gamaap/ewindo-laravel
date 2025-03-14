<?php

namespace App\Models;

use App\Models\Newsroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    public function newsrooms(): HasMany
    {
        return $this->hasMany(Newsroom::class);
    }
}
