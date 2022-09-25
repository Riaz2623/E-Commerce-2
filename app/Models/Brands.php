<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    public static $brand;
    public static function newBrands($request)
    {
        self::$brand = new Brands();
        self::$brand->name =$request->name;
        self::$brand->save();

    }
    public static function updateBrands($request,$id)
    {
        self::$brand= Brands::find($id);
        
        self::$brand->name =$request->name;
        self::$brand->save();
    }
}
