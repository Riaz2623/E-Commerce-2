<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Departmen;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('admin.hr.departmen.add');
    }
    public function create(Request $request)
    {
     Departmen::newDepartmen($request);
     return redirect()->back()->with('message' , 'Departmen info create successfully');
    }
    public function manage()
    {
        $this->departmens =Departmen::orderBy('id','desc')->get();
        return view('admin.hr.departmen.manage',['departmens'=>$this->departmens]);
    }
    public function edit($id)
    {
        $this->departmens =Departmen::find($id);
        return view('admin.hr.departmen.edit',['departmens'=>$this->departmens]);
    }
    public function update(Request $request, $id)
    {
        Departmen::updateDepartmen($request , $id);
        return redirect('/department.manage')->with('message','Departmen Review Update Info Successfully');
    }
    public function department_delete($id)
    {
        $this->departmens =Departmen::find($id);
        $this->departmens->delete();
        return redirect('/department.manage')->with('manage','Departmen info delete successfully');
    }
}
