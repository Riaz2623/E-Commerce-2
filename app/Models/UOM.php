<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UOM extends Model
{
    use HasFactory;
    public static $uoms;
    public static function newUOM($request)
    {
        self::$uoms = new UOM();
        self::$uoms->name =$request->name;
        self::$uoms->save();

    }
    public static function updateUOM($request,$id)
    {
        self::$uoms= UOM::find($id);
        
        self::$uoms->name =$request->name;
        self::$uoms->save();
    }
}
