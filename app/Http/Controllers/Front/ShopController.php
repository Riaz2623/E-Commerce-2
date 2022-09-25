<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function index()
    {
        $this->products = Product::Paginate(6);
        return view('front.shop', ['products' => $this->products]);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $this->products = Product::Paginate(6);
            return view('front.shop', ['products' => $this->products]);
        }
        $products = product::where('name', 'Like', '%' . $search . '%')->get();
        return view('front.shop', compact('products'));
    }
    public function addcart(Request $request,$id)
    {
     $id;
   
     $session_id  = session()->getId();
       $counts_id =DB ::table('carts')->where('s_id', '=', $session_id )->where('product_id', '=', $id)->count();
        if($counts_id>0){
            return redirect()->back()->with('message_cart' , 'This product all ready exist..!!');
        }else{
            Cart::insert([
                'product_id' => $id,
                's_id' => $session_id
              
            ]);
        }
     return redirect()->back()->with('message' , 'Cart info create successfully');
       
    }
    
}
