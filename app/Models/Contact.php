<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table   = 'contacts';

    protected $fillable =
    [
        'service_id',
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'seen',
    ];
    
    
    public $timestamps = true;

    public function service( ){ 

        return $this->belongsTo(Service::class); 
    }
}
