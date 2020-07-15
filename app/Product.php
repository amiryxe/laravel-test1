<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function searchText(){
        return self::where('name', 'like', '%P%' )->get();
    }
}
