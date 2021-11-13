<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content1 extends Model
{
    protected $table = 'content1';
    protected $fillable = [
        'name',
         'image'
        
    ];
}
