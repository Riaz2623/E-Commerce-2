<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransactionTypes;
use Illuminate\Http\Request;

class TransactionTypesController extends Controller
{
    public function index()
    {
        return view('admin.transaction.add');
    }
    public function create(Request $request)
    {
     TransactionTypes::newTransaction($request);
     return redirect()->back()->with('message' , 'Transaction info create successfully');
    }
    public function manage()
    {
        $this->transactiontypes =TransactionTypes::orderBy('id','desc')->get();
        return view('admin.transaction.manage',['transactiontypes'=>$this->transactiontypes]);
    }
    public function edit($id)
    {
        $this->transactiontype = TransactionTypes::find($id);
        return view('admin.transaction.edit',['transactiontype'=>$this->transactiontype]);
    }
    public function update(Request $request, $id)
    {
        TransactionTypes::updateTransaction($request , $id);
        return redirect('/transaction.manage')->with('message','Section Review Update Info Successfully');
    }
    public function transaction_delete($id)
    {
        $this->transactiontypes =TransactionTypes::find($id);
        $this->transactiontypes->delete();
        return redirect('/transaction.manage')->with('manage','Section info delete successfully');
    }
}
