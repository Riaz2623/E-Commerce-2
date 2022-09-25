<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        return view ('admin.brand.add');
    }
    public function create(Request $request)
    {
     Brands::newBrands($request);
     return redirect()->back()->with('message' , 'Brands info create successfully');
    }
    public function manage()
    {
        $this->brands =Brands::orderBy('id','desc')->get();
        return view('admin.brand.manage',['brands'=>$this->brands]);
    }
    public function edit($id)
    {
        $this->brand = Brands::find($id);
        return view('admin.brand.edit',['brand'=>$this->brand]);
    }
    public function update(Request $request, $id)
    {
        Brands::updateBrands($request , $id);
        return redirect('/brand.manage')->with('message','Brands Review Update Info Successfully');
    }
    // public function brand_delete($id)
    // {
    //     $this->brand =Brands::find($id);
    //     $this->brand->delete();
    //     return redirect('/brand.manage')->with('manage','Brands info delete successfully');
    // }
}
