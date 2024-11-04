<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $table   = 'clients';

    protected $fillable =
    [
        'name',
        'email',
        'phone',
        'description',

    ];
}
