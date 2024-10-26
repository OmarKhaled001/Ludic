<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $table   = 'reviews';

    protected $fillable =
    [
        'author',
        'position',
        'review',
    ];
}
