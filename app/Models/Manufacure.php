<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacure extends Model
{
    use HasFactory;
    public static $manufacure;

    public static function newManufacure($request)
    {
    self::$manufacure = new Manufacure();
    self::$manufacure->name =$request->name;
    self::$manufacure->mobile =$request->mobile;
    self::$manufacure->address =$request->address;
    self::$manufacure->email =$request->email;
    self::$manufacure->save();

    }
    public static function updateManufacure($request , $id)
    {
    self::$manufacure =Manufacure::find($id);
    self::$manufacure->name =$request->name;
    self::$manufacure->mobile =$request->mobile;
    self::$manufacure->address =$request->address;
    self::$manufacure->email =$request->email;
    self::$manufacure->save();

    }
}
