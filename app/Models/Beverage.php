<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverag extends Model
{
   // use HasFactory;
   protected $table="beverages";
   protected $fillable = [
       'title',
       'content',
       'price',
       'published',
       'special',
       'image',
       'category',
      
   ];


   public function getActiveStatus()
   {
       return $this->Published ? 'Yes' : 'No';
       return $this->Special  ? 'Yes' : 'No';
      
   
   
    }   
    
}
