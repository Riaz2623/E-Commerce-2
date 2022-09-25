<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class profileController extends Controller
{
    public function profile()
    {
        $admin=Admin::all();
       return view('editProfile.profile',compact('admin'));
    }
    public function vewiProfile()
    {
        return view('editProfile.viewProfile');
    }
}
