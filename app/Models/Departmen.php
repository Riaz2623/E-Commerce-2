<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmen extends Model
{
    use HasFactory;
    public static $departmens;
    public static function newDepartmen($request)
    {
        self::$departmens = new Departmen();
        self::$departmens->name =$request->name;
        self::$departmens->save();

    }
    public static function updateDepartmen($request,$id)
    {
        self::$departmens= Departmen::find($id);
        
        self::$departmens->name =$request->name;
        self::$departmens->save();
    }
}
