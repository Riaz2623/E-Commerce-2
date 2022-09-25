<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public static $suppliers;

    public static function newSupplier($request)
    {
    self::$suppliers = new Supplier();
    self::$suppliers->name =$request->name;
    self::$suppliers->mobile =$request->mobile;
    self::$suppliers->address =$request->address;
    self::$suppliers->email =$request->email;
    self::$suppliers->save();

    }
    public static function updateSupplier($request , $id)
    {
    self::$suppliers =Supplier::find($id);
    self::$suppliers->name =$request->name;
    self::$suppliers->mobile =$request->mobile;
    self::$suppliers->address =$request->address;
    self::$suppliers->email =$request->email;
    self::$suppliers->save();

    }
}
