<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Channel extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
