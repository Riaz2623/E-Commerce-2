<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacure;
use Illuminate\Http\Request;

class ManufacfuresController extends Controller
{
    public function index()
    {
        return view('admin.manufacfure.add');
    }
    public function create(Request $request)
    {
        Manufacure::newManufacure($request);
        return redirect()->back()->with('message' , 'Manufacure info create successfully');
    }
    public function manage()
    {
        $this->manufacures = Manufacure::orderBy('id','desc')->get();
        return view('admin.manufacfure.manage',['manufacures'=>$this->manufacures]);
    }
    public function edit($id)
    {
        $this->manufacure = Manufacure::find($id);
        return view('admin.manufacfure.edit',['manufacure'=>$this->manufacure]);
    }
    public function update(Request $request, $id)
    {
        Manufacure::updateManufacure($request , $id);
        return redirect('/manufacfure.manage')->with('message','Manufacure Review Update Info Successfully');
    }
    // public function manufacfure_delete($id)
    // // {
    // //     $this->manufacure =Manufacure::find($id);
    // //     $this->manufacure->delete();
    // //     return redirect('/manufacfure.manage')->with('manage','Manufacure info delete successfully');
    // // }
}
