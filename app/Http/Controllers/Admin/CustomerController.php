<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.add');
    }
    public function create(Request $request)
    {
        Customer::newCustomer($request);
        return redirect()->back()->with('message' , 'Customer info create successfully');
    }
    public function manage()
    {
        $this->customers = Customer::orderBy('id','desc')->get();
        return view('admin.customer.manage',['customers'=>$this->customers]);
    }
   
    public function customer_delete($id)
    {
        $this->customer =Customer::find($id);
        $this->customer->delete();
        return redirect('/customer.manage')->with('manage','Customer info delete successfully');
    }
}
