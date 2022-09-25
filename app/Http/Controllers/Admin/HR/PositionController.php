<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Departmen;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $this->departmens =Departmen::all();
        return view('admin.hr.position.add',['departmens'=>$this->departmens]);
    }
    public function create(Request $request)
   {
    Position::newPosition($request);
    return redirect()->back()->with('message' , 'Position info create successfully');
   }
   public function manage()
   {
    $this->positions =Position::OrderBy('id','desc')->get();
    return view('admin.hr.position.manage',['positions'=>$this->positions]);
   }

   public function edit($id)
   {
       $this->departmens = Departmen::all();
       $this->position = Position::find($id);
       return view('admin.hr.position.edit',['position'=>$this->position,'departmens'=>$this->departmens]);
   }
   public function update(Request $request, $id)
   {
    Position::updatePosition($request , $id);
       return redirect('/position.manage')->with('message','Position Review Update Info Successfully');
   }
   public function position_delete($id)
   {
       $this->position =Position::find($id);
       $this->position->delete();
       return redirect('/position.manage')->with('manage','Position info delete successfully');
   }
}
