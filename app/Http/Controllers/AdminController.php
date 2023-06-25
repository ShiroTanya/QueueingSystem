<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

    public function new_password()
    {
        return view('admin.new_password');
    }
}
