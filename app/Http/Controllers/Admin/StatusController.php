<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('admin.status.add');
    }
    public function create(Request $request)
    {
     Status::newStatus($request);
     return redirect()->back()->with('message' , 'Status info create successfully');
    }
    public function manage()
    {
        $this->statuss =Status::orderBy('id','desc')->get();
        return view('admin.status.manage',['statuss'=>$this->statuss]);
    }
    public function edit($id)
    {
        $this->status =Status::find($id);
        return view('admin.status.edit',['status'=>$this->status]);
    }
    public function update(Request $request, $id)
    {
        Status::updateStatus($request , $id);
        return redirect('/status.manage')->with('message','Status Review Update Info Successfully');
    }
    // public function status_delete($id)
    // {
    //     $this->status =Status::find($id);
    //     $this->status->delete();
    //     return redirect('/status.manage')->with('manage','Status info delete successfully');
    // }
}
