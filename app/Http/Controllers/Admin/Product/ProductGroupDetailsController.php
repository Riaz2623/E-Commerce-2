<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGroupDetail;
use App\Models\ProductGroup;
use Illuminate\Http\Request;

class ProductGroupDetailsController extends Controller
{
    public function index()
    {
        $this->products = Product::all();
        $this->productgroups = ProductGroup::all();
        return view('admin.productgroup.productgroupdetails.add', [
            'products' => $this->products,
            'productgroups' => $this->productgroups
        ]);
    }
    public function create(Request $request)
    {
        ProductGroupDetail::newProductGroupDetail($request);
        return redirect()->back()->with('message', 'Product Group Details info create successfully');
    }
    public function manage()
    {
        $this->productgroupdetails = ProductGroupDetail::OrderBy('id', 'desc')->get();
        return view('admin.productgroup.productgroupdetails.manage', ['productgroupdetails' => $this->productgroupdetails]);
    }
    public function edit($id)
    {
        $this->products = Product::all();
        $this->productgroups = ProductGroup::all();
        $this->productgroupdetail = ProductGroupDetail::find($id);
        return view(
            'admin.productgroup.productgroupdetails.edit',
            [
                'productgroupdetail' => $this->productgroupdetail,
                'products' => $this->products,
                'productgroups' => $this->productgroups
            ]
        );
    }
    public function update(Request $request, $id)
    {
        ProductGroupDetail::updateProductGroupDetail($request, $id);
        return redirect('/productgroupdetails.manage')->with('message', 'Product Group Details Review Update Info Successfully');
    }
    public function productgroupdetails_delete($id)
    {
        $this->productgroupdetail = ProductGroupDetail::find($id);
        $this->productgroupdetail->delete();
        return redirect('/productgroupdetails.manage')->with('manage', 'Product Group Details info delete successfully');
    }

    public function details($id)
    {
        $this->products = Product::find($id);
        $this->productgroups = ProductGroup::find($id);
        $this->productgroupdetail = ProductGroupDetail::find($id);
        return view(
            'admin.productgroup.productgroupdetails.details',
            [
                'products' => $this->products,
                'productgroups' => $this->productgroups,
                'productgroupdetail' => $this->productgroupdetail

            ]
        );
    }
}
