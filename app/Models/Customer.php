<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public static $customers;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getimageURL($request){

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newCustomer($request){
        self::$customers = new Customer();
        self::$customers->name = $request->name;
    self::$customers->mobile = $request->mobile;
    self::$customers->email = $request->email;
    self::$customers->address = $request->address;
        self::$customers->image = self::getimageURL($request);
        self::$customers->save();
}
public static function updateCustomer($request,$id)
{
    self::$customers=Customer::find($id);
    if(self::$image= $request->file('image'))
    {
        if (file_exists(self::$customers->image));
        {
            unlink(self::$customers->image);
        }
        self::$imageUrl = self::getimageUrl($request);
    }
    else
    {
        self::$imageUrl = self::$customers->image;
    }
    self::$customers->name = $request->name;
    self::$customers->mobile = $request->mobile;
    self::$customers->email = $request->email;
    self::$customers->address = $request->address;
    self::$customers->image = self::$imageUrl;
    self::$customers->save();
}

}
