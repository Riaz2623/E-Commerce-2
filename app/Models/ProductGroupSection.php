<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroupSection extends Model
{
    use HasFactory;
    public static $productgroupsections;
    public static function newProductGroupSection($request)
    {
        self::$productgroupsections = new ProductGroupSection();
        self::$productgroupsections->name =$request->name;
        self::$productgroupsections->save();

    }
    public static function updateProductGroupSection($request,$id)
    {
        self::$productgroupsections= ProductGroupSection::find($id);
        
        self::$productgroupsections->name =$request->name;
        self::$productgroupsections->save();
    }
}
