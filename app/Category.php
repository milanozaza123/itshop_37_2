<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = 'categories';
   // protected $fillable = 'name';
   protected $primaryKey ='category_id';

   public function product(){
       return $this->hasMany(Product::class,'category_id');
   }
}
