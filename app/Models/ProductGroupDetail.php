<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroupDetail extends Model
{
    use HasFactory;
    public static $productgroupdetail;
    public static function newProductGroupDetail($request)
    {
        self::$productgroupdetail = new ProductGroupDetail();
        self::$productgroupdetail->productgroups_id =$request->productgroups_id;
        self::$productgroupdetail->product_id =$request->product_id;
        self::$productgroupdetail->save();

    }
    public static function updateProductGroupDetail($request,$id)
    {
        self::$productgroupdetail= ProductGroupDetail::find($id);
        self::$productgroupdetail->productgroups_id =$request->productgroups_id;
        self::$productgroupdetail->product_id =$request->product_id;
        self::$productgroupdetail->save();
    }
}
