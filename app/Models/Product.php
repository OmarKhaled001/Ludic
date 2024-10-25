<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $table   = 'products';

    protected $fillable =
    [
        'service_id',
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

    public function service( ){ 

        return $this->belongsTo(Service::class); 
    }
    
    protected $casts = [
        'tags' => 'keywords',
    ];


}

