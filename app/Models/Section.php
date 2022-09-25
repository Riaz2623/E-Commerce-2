<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public static $sections;
    public static function newSection($request)
    {
        self::$sections = new Section();
        self::$sections->name =$request->name;
        self::$sections->save();

    }
    public static function updateSection($request,$id)
    {
        self::$sections= Section::find($id);
        
        self::$sections->name =$request->name;
        self::$sections->save();
    }
}
