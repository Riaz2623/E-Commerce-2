<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Position;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $this->positions =Position::all();
        return view('admin.hr.person.add',['positions'=>$this->positions]);
    }
    public function create(Request $request)
    {
     Person::newPerson($request);
     return redirect()->back()->with('message' , 'Product info create successfully');
    }
    public function manage()
    {
        $this->persons=Person::OrderBy('id','desc')->get();
        return view('admin.hr.person.manage',['persons'=>$this->persons]);
    }
    //////////////////====================Active & inactive================//////////////
    public function updateStatus($id)
    {
        $this->person = Person::find($id);
        if($this->person->status == 1)
        {
            $this->person->status = 0;
            $this->message ="Person info inactive Successfully.";
        }
        else
        {
            $this->person->status = 1;
            $this->message ="Person info Active Successfully.";
        }
        $this->person->save();
        return redirect()->back()->with('message',$this->message);

    }
    //////////////////====================Active & inactive END================//////////////
    public function edit($id)
    {
        $this->positions =Position::all();
        $this->person = Person::find($id);
        return view('admin.hr.person.edit',['person'=>$this->person,'positions'=>$this->positions]);

    }
    public function update(Request $request,$id)
    {

        Person::updatePerson($request,$id);
        return redirect('/person.manage')->with('message','Product info Update Successfully');

    }
    public function person_delete($id)
    {
        $this->person =Person::find($id);
        if(file_exists($this->person->image))
        {
            unlink($this->person->image);
        }
        $this->person->delete();
        return redirect('/person.manage')->with('manage','person info delete successfully');
    }
    public function details($id)
    {
        $this->person = Person::find($id);
        return view('admin.hr.person.details',['person'=>$this->person]);

    }
}
