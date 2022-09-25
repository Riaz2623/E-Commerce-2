<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    public static $positions;
    public static function newPosition($request)
    {
        self::$positions = new Position();
        self::$positions->name =$request->name;
        self::$positions->department_id =$request->department_id;
        self::$positions->save();

    }
    
    
    public static function updatePosition($request,$id)
    {
        self::$positions= Position::find($id);
        
        self::$positions->name =$request->name;
        self::$positions->department_id =$request->department_id;
        self::$positions->save();
    }
}
