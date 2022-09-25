<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public static $cart;
    public static function newCart($request)
    {
        self::$cart = new Cart();
        self::$cart->product_id =$request->product_id;
        self::$cart->s_id =$request->s_id;
        self::$cart->save();

    }
    // public static function updateCart($request,$id)
    // {
    //     self::$cart= Cart::find($id);
        
    //     self::$cart->product_id =$request->product_id;
    //     self::$cart->s_id =$request->s_id;
    //     self::$cart->save();
    // }
}
