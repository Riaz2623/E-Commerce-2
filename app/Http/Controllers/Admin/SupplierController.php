<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        return view('admin.supplier.add');
    }
    public function create(Request $request)
    {
        Supplier::newSupplier($request);
        return redirect()->back()->with('message' , 'Manufacure info create successfully');
    }
    public function manage()
    {
        $this->suppliers = Supplier::orderBy('id','desc')->get();
        return view('admin.supplier.manage',['suppliers'=>$this->suppliers]);
    }
    public function edit($id)
    {
        $this->supplier = Supplier::find($id);
        return view('admin.supplier.edit',['supplier'=>$this->supplier]);
    }
    public function update(Request $request, $id)
    {
        Supplier::updateSupplier($request , $id);
        return redirect('/supplier.manage')->with('message','Supplier Review Update Info Successfully');
    }
    public function supplier_delete($id)
    {
        $this->supplier =Supplier::find($id);
        $this->supplier->delete();
        return redirect('/supplier.manage')->with('manage','supplier info delete successfully');
    }
    
}
