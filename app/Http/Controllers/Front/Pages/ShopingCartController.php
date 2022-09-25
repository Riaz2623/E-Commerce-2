<?php

namespace App\Http\Controllers\Front\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ShopingCartController extends Controller
{
    public function index()
    {

        $ss = session()->getId();
        $peoduct =  DB::select("SELECT * FROM carts INNER JOIN products ON carts.product_id = products.id WHERE carts.s_id = '$ss'");
        $counts_id = DB::table('carts')->where('s_id', '=', $ss)->count();
        if ($counts_id > 0) {
            return view('front.pages.cart', compact('peoduct'));
        } else {
            return redirect('/shop');
        }
    }


    public function cart_delete($id)
    {
        $id;
        $session_id  = session()->getId();
        DB::select("DELETE FROM `carts` WHERE product_id='$id' AND s_id='$session_id'");
        return redirect()->back()->with('manage', 'Carts info delete successfully');
    }
    public function update_cart(Request $request)
    {
        $session_id  = session()->getId();
        $product_id = $request->product_id;
        $up_qty = $request->up_qty;
       DB::select("UPDATE `carts` SET quantity ='$up_qty'  WHERE `product_id`='$product_id' AND `s_id`='$session_id'");


       //print_r($cost);

     return redirect()->back()->with('manage', 'Quantity info successfully');
        //return redirect()->back(["cost"=>$cost]);
    }
   
}
