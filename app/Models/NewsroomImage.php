<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsroomImage extends Model
{
    /** @use HasFactory<\Database\Factories\NewsroomImageFactory> */
    use HasFactory;

    public function newsroom(): BelongsTo
    {
        return $this->belongsTo(Newsroom::class);
    }
}
