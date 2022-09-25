<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductGroupSection;
use Illuminate\Http\Request;

class ProductGroupSectionController extends Controller
{
    public function index()
    {
        return view('admin.productgroup.groupsection.add');
    }
    public function create(Request $request)
    {
        ProductGroupSection::newProductGroupSection($request);
     return redirect()->back()->with('message' , 'Product Group Section info create successfully');
    }
    public function manage()
    {
        $this->productgroupsections =ProductGroupSection::orderBy('id','desc')->get();
        return view('admin.productgroup.groupsection.manage',['productgroupsections'=>$this->productgroupsections]);
    }
    public function edit($id)
    {
        $this->productgroupsection = ProductGroupSection::find($id);
        return view('admin.productgroup.groupsection.edit',['productgroupsection'=>$this->productgroupsection]);
    }
    public function update(Request $request, $id)
    {
        ProductGroupSection::updateProductGroupSection($request , $id);
        return redirect('/productgroupsection.manage')->with('message','Product Group Section Review Update Info Successfully');
    }
    // public function productgroupsection_delete($id)
    // {
    //     $this->productgroupsection =ProductGroupSection::find($id);
    //     $this->productgroupsection->delete();
    //     return redirect('/productgroupsection.manage')->with('manage','Product Group Section info delete successfully');
    // }
}
