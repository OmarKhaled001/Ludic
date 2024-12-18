<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
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
