<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class UserController extends Controller
{

    public function AllRegisterUsers(){
        $AllRegisterUsers = User::all();
        if(Gate::allows('isAdmin'))
        {
          return view('admin.AllRegisterUsers' , compact('AllRegisterUsers'));
        }
        else
        {
             return view('auth.login'); // login file
        }
     }

}
