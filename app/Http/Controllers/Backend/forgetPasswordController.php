<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class forgetPasswordController extends Controller
{
    public function forgetPassView()
    {
        return view('auth.forgetPassword');
    }
    
    public function forgetPasslink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $token = Str::random(64);
       // echo $token;

        DB::table('password_resets')->insert(
            ['email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
            ]
        );

        Mail::send('email-forgot', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
       
           return back()->with('success', 'We have e-mailed your password reset link');


       
    }

    public function showResetForm($token)
    {
        return view('auth.reset',['token'=>$token]);
    }

    public function updatePass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
      
        ]);

        $updatePassword = DB::table('password_resets')
        ->where(['email' => $request->email, 'token' => $request->token])
        ->first();

        if(!$updatePassword)
      return back()->withInput()->with('error', 'Invalid token!');

    $user = Admin::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

    DB::table('password_resets')->where(['email'=> $request->email])->delete();

    return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
