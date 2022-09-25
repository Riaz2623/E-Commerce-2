<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $categors;
    public static function newCategory($request)
    {
        self::$categors = new Category();
        self::$categors->name =$request->name;
        self::$categors->section_id =$request->section_id;
        self::$categors->save();

    }
    
    
    public static function updateCategory($request,$id)
    {
        self::$categors= Category::find($id);
        
        self::$categors->name =$request->name;
        self::$categors->section_id =$request->section_id;
        self::$categors->save();
    }
}
