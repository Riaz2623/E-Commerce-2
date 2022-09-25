<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionTypes extends Model
{
    use HasFactory;
    public static $transaction;
    public static function newTransaction($request)
    {
        self::$transaction = new TransactionTypes();
        self::$transaction->name =$request->name;
        self::$transaction->save();

    }
    public static function updateTransaction($request,$id)
    {
        self::$transaction= TransactionTypes::find($id);
        
        self::$transaction->name =$request->name;
        self::$transaction->save();
    }
}
