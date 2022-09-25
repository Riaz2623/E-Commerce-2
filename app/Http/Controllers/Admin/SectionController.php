<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    public function index()
    {
        return view('admin.section.add');
    }
    public function create(Request $request)
    {
        Section::newSection($request);
        return redirect()->back()->with('message', 'Section info create successfully');
    }
    public function manage()
    {
        $this->sections = Section::orderBy('id', 'desc')->get();
        return view('admin.section.manage', ['sections' => $this->sections]);
    }
    public function edit($id)
    {
        $this->section = Section::find($id);
        return view('admin.section.edit', ['section' => $this->section]);
    }
    public function update(Request $request, $id)
    {
        Section::updateSection($request, $id);
        return redirect('/section.manage')->with('message', 'Section Review Update Info Successfully');
    }
    // public function section_delete($id)
    // {
    //     $this->section = Section::find($id);
    //     $this->section->delete();


    //     $category = DB::select("delete from categories where section_id= {$id}");
    //     $product = DB::select("delete from products where section_id= {$id}");

    //     // print_r($category);

    //     // $this->$category->delete();

    //     return redirect('/section.manage')->with('manage', 'Section info delete successfully');
    // }
}
