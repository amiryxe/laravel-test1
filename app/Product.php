<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

//    protected $hidden = ['name'];

    public static function filteredProducts(){
        return self::where('name', 'like', '%P%' )->get();
    }
}
