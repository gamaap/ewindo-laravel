<?php

namespace App\Models;

use App\Models\Newsroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsroomCategory extends Model
{
    /** @use HasFactory<\Database\Factories\NewsroomCategoryFactory> */
    use HasFactory;

    public function newsrooms(): BelongsTo
    {
        return $this->belongsTo(NewsroomCategory::class);
    }
}
