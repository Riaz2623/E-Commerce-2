<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public static $persons;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getimageURL($request){

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'person-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newPerson($request){
        self::$persons = new Person();
        self::$persons->name = $request->name;
        self::$persons->possion_id = $request->possion_id;
        self::$persons->gender = $request->gender;
        self::$persons->email = $request->email;
        self::$persons->mobile = $request->mobile;
        self::$persons->address = $request->address;
        self::$persons->date = $request->date;
        self::$persons->image = self::getimageURL($request);
        self::$persons->save();
}
public static function updatePerson($request,$id)
{
    self::$persons=Person::find($id);
    if(self::$image= $request->file('image'))
    {
        if (file_exists(self::$persons->image));
        {
            unlink(self::$persons->image);
        }
        self::$imageUrl = self::getimageUrl($request);
    }
    else
    {
        self::$imageUrl = self::$persons->image;
    }
    self::$persons->name = $request->name;
    self::$persons->possion_id = $request->possion_id;
    self::$persons->gender = $request->gender;
    self::$persons->email = $request->email;
    self::$persons->mobile = $request->mobile;
    self::$persons->address = $request->address;
    self::$persons->date = $request->date;
    self::$persons->image = self::$imageUrl;
    self::$persons->save();
}


}
