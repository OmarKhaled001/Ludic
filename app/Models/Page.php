<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table   = 'pages';

    protected $fillable =
    [
        'name',
        'slug',
        'title',
        'description',
        'keywords',
    ];

    public $translatable =
    [
        'name',
        'slug',
        'title',
        'description',
        'keywords',
    ];
    
    protected $casts = [
        'tags' => 'keywords',
    ];
    
    public $timestamps = true;


    public function contents( ){ 

        return $this->hasMany(Content::class); 
    }
}
