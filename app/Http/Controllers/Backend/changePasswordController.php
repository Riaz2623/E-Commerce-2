<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Admin as ModelsAdmin;
use Hash;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class changePasswordController extends Controller
{
    public function index() {
        return view('changePassword.changePass');
    }

    public function updatePass(Request $request)
    {
        $value = session()->get('LoggedUser');
        $data = Admin::find($value); 
       
 
        if (!(FacadesHash::check($request->get('old_password'), $data->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        
        //Change Password
        
        $data->password = bcrypt($request->get('new_password'));
        $data->update();

        return redirect('/home');
    }

}

