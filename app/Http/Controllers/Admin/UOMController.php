<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UOM;
use Illuminate\Http\Request;

class UOMController extends Controller
{
    public function index()
    {
        return view('admin.uom.add');
    }
    public function create(Request $request)
    {
     UOM::newUOM($request);
     return redirect()->back()->with('message' , 'UOM info create successfully');
    }
    public function manage()
    {
        $this->uoms = UOM::orderBy('id','desc')->get();
        return view('admin.uom.manage',['uoms'=>$this->uoms]);
    }
    public function edit($id)
    {
        $this->uom = UOM::find($id);
        return view('admin.uom.edit',['uom'=>$this->uom]);
    }
    public function update(Request $request, $id)
    {
        UOM::updateUOM($request , $id);
        return redirect('/uom.manage')->with('message','UOM Review Update Info Successfully');
    }
    public function uom_delete($id)
    {
        $this->uom =UOM::find($id);
        $this->uom->delete();
        return redirect('/uom.manage')->with('manage','UOM info delete successfully');
    }
}
