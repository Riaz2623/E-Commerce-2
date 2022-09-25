<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:4|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $admin = new Admin;
         $admin->name= $request->name;
         $admin->email=$request->email;
         $admin->password=Hash::make($request->password);

         if($request->hasfile('photo')){
            $file= $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('upload/register/',$filename);
            $admin->photo=$filename;
        }


         $save=$admin->save();

         if($save)
         {
            return redirect('/login')->with('success','New user has been addes to database succussfullly');
         }
         else{
            return back()->with('fail','went something wrong,try again');
         }
       
    }

    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:4|max:15',
        ]);

        
       

        $user= Admin::where('email','=',$request->email)->first();
    

         if(!$user)
         {

             return back()->with('fail','We do not recognize your email address');
         }
         else{
             if(Hash::check($request->password, $user->password)){
                  $request->session()->put('LoggedUser', $user->id);
                 // $request->session()->put('email', $user->email);
                    return redirect('/home');
                // echo "You have logged In";
                

        //     }else{
        //         return back()->with('fail','Incorrect password');
        //     }
        // echo  " ok";
         }

    

    }
}


        public function signout()
        {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('/login');
            }
        
        }

        public function update(Request $request,$id)
        {
         $admin =  Admin::find($id);
         $admin->name= $request->name;
         $admin->email= $request->email;
         if($request->hasfile('photo')){
            $file= $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('upload/register/',$filename);
           
            $admin->photo=$filename;

            
            
        }
         $admin->update();
         return redirect('/editProfile')->with('status','Profile updated successfully');
        // echo $id;
       
        }
    
}
