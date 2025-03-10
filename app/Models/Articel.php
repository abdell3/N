<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    /** @use HasFactory<\Database\Factories\ArticelFactory> */
    use HasFactory;


    protected $fillables = ['title', 'images', 'content'];

    public function category(){

        return $this->hasMany(Category::class)  ;
    }
    
}
