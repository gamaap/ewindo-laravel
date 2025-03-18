<?php

namespace App\Models;

use App\Models\Newsroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsroomCategory extends Model
{
    /** @use HasFactory<\Database\Factories\NewsroomCategoryFactory> */
    use HasFactory;
    public function newsrooms(): HasMany
    {
        return $this->hasMany(Newsroom::class,'category_id');
    }
}
