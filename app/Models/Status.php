<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public static $statuses;
    public static function newStatus($request)
    {
        self::$statuses = new Status();
        self::$statuses->name =$request->name;
        self::$statuses->save();

    }
    public static function updateStatus($request,$id)
    {
        self::$statuses= Status::find($id);
        
        self::$statuses->name =$request->name;
        self::$statuses->save();
    }
}
