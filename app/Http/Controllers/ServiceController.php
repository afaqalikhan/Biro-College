<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function ielts(){

        Alert::info('Contact to college', 'you need to contact to college for all courses');

        //    return view('home.userpage');
             return redirect()->back();
  
       }

       public function short(){

        Alert::info('Contact to college', 'you need to contact to college for all courses');
    
        //    return view('home.userpage');
             return redirect()->back();
    
    }

}