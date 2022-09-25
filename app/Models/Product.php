<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $products;
    private static $photo;
    private static $photoName;
    private static $photoUrl;
    private static $directory;

    public static function getphotoURL($request){

        self::$photo = $request->file('photo');
        self::$photoName = self::$photo->getClientOriginalName();
        self::$directory = 'product-photos/';
        self::$photo->move(self::$directory, self::$photoName);
        return self::$directory.self::$photoName;
    }
    public static function newProduct($request){
        self::$products = new Product();
        self::$products->name = $request->name;
        self::$products->offerprice = $request->offerprice;
        self::$products->regularprice = $request->regularprice;
        self::$products->eachfeature = $request->eachfeature;
        self::$products->description = $request->description;
        self::$products->weight = $request->weight;
        self::$products->bar_code = $request->bar_code;
        self::$products->offerdiscount = $request->offerdiscount;
        self::$products->category_id = $request->category_id;
        self::$products->section_id = $request->section_id;
        self::$products->brand_id = $request->brand_id;
        self::$products->manufacturer_id = $request->manufacturer_id;
        self::$products->uom_id = $request->uom_id;
        self::$products->photo = self::getphotoURL($request);
        self::$products->save();
}
public static function updateProduct($request,$id)
{
    self::$products=Product::find($id);
    if(self::$photo= $request->file('photo'))
    {
        if (file_exists(self::$products->photo));
        {
            unlink(self::$products->photo);
        }
        self::$photoUrl = self::getphotoUrl($request);
    }
    else
    {
        self::$photoUrl = self::$products->photo;
    }
    self::$products->name = $request->name;
    self::$products->offerprice = $request->offerprice;
    self::$products->regularprice = $request->regularprice;
    self::$products->eachfeature = $request->eachfeature;
    self::$products->description = $request->description;
    self::$products->weight = $request->weight;
    self::$products->bar_code = $request->bar_code;
    self::$products->offerdiscount = $request->offerdiscount;
    self::$products->category_id = $request->category_id;
    self::$products->section_id = $request->section_id;
    self::$products->brand_id = $request->brand_id;
    self::$products->manufacturer_id = $request->manufacturer_id;
    self::$products->uom_id = $request->uom_id;
    self::$products->photo = self::$photoUrl;
    self::$products->save();
}


}
