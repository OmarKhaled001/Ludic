<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;
    
    protected $table   = 'services';

    protected $fillable =
    [
        'name',
        'subtitle',
        'slug',
        'details',
        'title',
        'description',
        'keywords',
        'is_active',
    ];

    public $timestamps = true;


    public function products( ){ 

        return $this->hasMany(Product::class); 
    }

    public function contacts( ){ 

        return $this->hasMany(Contact::class); 
    }
    
    protected $casts = [
        'tags' => 'keywords',
    ];
    
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('cover')
              ->width(2880)
              ->height(1600)
              ;
    }
}
