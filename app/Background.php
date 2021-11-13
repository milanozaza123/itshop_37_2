<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $table = 'background';
    protected $fillable = [
        'name',
        
        'image',
        'status'
        
    ];
}
