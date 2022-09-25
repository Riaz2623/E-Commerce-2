<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;
    public static $productgroups;
    public static function newProductGroup($request)
    {
        self::$productgroups = new ProductGroup();
        self::$productgroups->name =$request->name;
        self::$productgroups->product_group_section_id =$request->product_group_section_id;
        self::$productgroups->save();

    }
    public static function updateProductGroup($request,$id)
    {
        self::$productgroups= ProductGroup::find($id);
        self::$productgroups->name =$request->name;
        self::$productgroups->product_group_section_id =$request->product_group_section_id;
        self::$productgroups->save();
    }
}
