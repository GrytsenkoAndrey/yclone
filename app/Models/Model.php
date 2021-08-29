<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;

class Model extends BaseModel
{
    use HasFactory;

    /**
     * @var bool
     */
    public $incrementing = false;

    protected static function boot(): void
    {
        parent::boot();

        static::creating(fn ($model) => $model->{$model->getKeyName()} = (string) Str::uuid());
    }
}
