<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductGroup;
use App\Models\ProductGroupSection;
use Illuminate\Http\Request;

class ProductGroupsController extends Controller
{
    public function index()
    {
        $this->productgroupsections = ProductGroupSection::all();
        return view('admin.productgroup.productgroups.add',['productgroupsections'=>$this->productgroupsections]);
    }
    public function create(Request $request)
    {
   
    ProductGroup::newProductGroup($request);
     return redirect()->back()->with('message' , 'Product Group info create successfully');
    }
    public function manage()
    {
        $this->productgroups = ProductGroup::OrderBy('id','desc')->get();
        return view('admin.productgroup.productgroups.manage',['productgroups'=>$this->productgroups]);
    }
    public function edit($id)
    {
        $this->productgroupsections = ProductGroupSection::all();
        $this->productgroup = ProductGroup::find($id);
        return view('admin.productgroup.productgroups.edit',
        ['productgroup'=>$this->productgroup,
        'productgroupsections'=>$this->productgroupsections,
    ]);
    }
    public function update(Request $request, $id)
    {
        ProductGroup::updateProductGroup($request , $id);
        return redirect('/productgroups.manage')->with('message','Product Groups Review Update Info Successfully');
    }
    public function productgroups_delete($id)
    {
        $this->productgroup =ProductGroup::find($id);
        $this->productgroup->delete();
        return redirect('/productgroups.manage')->with('manage','Product Groups info delete successfully');
    }
}
