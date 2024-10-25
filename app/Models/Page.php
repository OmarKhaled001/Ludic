<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table   = 'pages';

    protected $fillable =
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
