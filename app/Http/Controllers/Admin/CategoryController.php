<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $this->sections = Section::all();
        return view('admin.category.add',['sections'=>$this->sections]);
    }
    public function create(Request $request)
   {
    Category::newCategory($request);
    return redirect()->back()->with('message' , 'Category info create successfully');
   }
   public function manage()
   {
    $this->categorys =Category::orderBy('id','desc')->get();
    return view('admin.category.manage',['categorys'=>$this->categorys]);
   }
   public function edit($id)
   {
       $this->sections = Section::all();
       $this->category = Category::find($id);
       return view('admin.category.edit',['category'=>$this->category,'sections'=>$this->sections]);
   }
   public function update(Request $request, $id)
   {
       Category::updateCategory($request , $id);
       return redirect('/category.manage')->with('message','Category Review Update Info Successfully');
   }
//    public function category_delete($id)
//    {
//        $this->category =Category::find($id);
//        $this->category->delete();
//     //    $product = DB::select("delete from products where section_id= {$id}");
       
//        return redirect('/category.manage')->with('manage','Category info delete successfully');
//    }
}
