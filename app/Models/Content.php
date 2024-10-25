<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $table   = 'contents';

    protected $fillable =
    [
        'page_id',
        'section',
        'title',
        'subtitle',
        'description',
    ];
    
    
    public $timestamps = true;

    public function pages( ){ 

        return $this->belongsTo(Page::class); 
    }
}
