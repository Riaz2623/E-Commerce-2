<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Manufacure;
use App\Models\Product;
use App\Models\Section;
use App\Models\UOM;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $this->sections = Section::all();
        $this->categorys = Category::all();
        $this->uoms = UOM::all();
        $this->brands = Brands::all();
        $this->manufacures = Manufacure::all();
        return view('admin.product.add',
        ['sections'=>$this->sections,
        'categorys'=>$this->categorys,
        'uoms'=>$this->uoms,
        'brands'=>$this->brands,
        'manufacures'=>$this->manufacures
    ]);
    }
    public function create(Request $request)
   {
    Product::newProduct($request);
    return redirect()->back()->with('message' , 'Product info create successfully');
   }
   public function manage()
   {
       $this->products =Product::orderBy('id','desc')->get();
       return view('admin.product.manage',['products'=>$this->products]);
   }
    public function edit($id)
    {
        $this->sections = Section::all();
        $this->categorys = Category::all();
        $this->uoms = UOM::all();
        $this->brands = Brands::all();
        $this->manufacures = Manufacure::all();
        $this->product = Product::find($id);
        return view('admin.product.edit',
            [
                'product'=>$this->product,
                'sections'=>$this->sections,
                'categorys'=>$this->categorys,
                'uoms'=>$this->uoms,
                'brands'=>$this->brands,
                'manufacures'=>$this->manufacures
            ]);


    }
    public function update(Request $request,$id)
    {

        Product::updateProduct($request,$id);
        return redirect('/product.manage')->with('message','Product info Update Successfully');

    }
    public function product_delete($id)
    {
        $this->product =Product::find($id);
        if(file_exists($this->product->photo))
        {
            unlink($this->product->photo);
        }
        $this->product->delete();
        return redirect('/product.manage')->with('manage','product info delete successfully');
    }
    public function details($id)
    {
        $this->product =Product::find($id);
        return view('admin.product.details',['product'=>$this->product]);
    }

}
