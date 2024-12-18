<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;
    use HasTranslations;

    protected $table   = 'settings';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'products_count',
        'suppliers_count',
        'cagr_count',
        'timezone',
    ];

    public $translatable = ['name'];
}
