<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
  
  public function index() // perfect code
  {
    if(Auth::user())
    {
      return view('result.index');
    }
    else
    {
      return view('auth.login');
    }
  }

  public function show(Request $request)
  {
      $rollNumber = $request->input('roll_number');
      $student = Student::where('roll_number', $rollNumber)->first();

      return view('result.show', ['student' => $student]);
  }





                              // Admin code {show Certificate Genrator file}

  public function CertificateGenrator(){
    if(Gate::allows('isAdmin'))
    {
      return view('admin.CertificateGenrator');
    }
    else
    {
      return view('auth.login');
    }
   
}

                           // Admin code {show submit Certificate Genrator form}

      public function SubmitCertificationForm(Request $request){
               $request->validate([
                'name' => 'required|string|max:255',
                'roll_number' => 'required|string|max:255',
                'college' => 'required|string|max:255',
                'course' => 'required|string|max:255',
                'date' => 'required|date',
                 ]);

                 // Create a new record in the database student table
                  student::create($request->all());     
                 // Redirect or return a response
                  return redirect()->back()->with('success' , 'Data Saved Succesfully');
      }

                              // Admin code { fetch all data of Certified Students }

      public function CertifiedStudents(){
        $CertifiedStudents = student::all(); // Fetch all student records from the database

        if(Gate::allows('isAdmin'))
        {
          return view('admin.CertifiedStudents' , compact('CertifiedStudents')); // Pass the data to the view
        }
        else
        {
           return view('auth.login');
        }
      
     }

     public function CountStudent(){
         $CountStudent = Student::count();
         if(Gate::allows('isAdmin'))
         {
          return view('admin.AdminPannel' , compact('CountStudent'));
         }
         else
         {
            return view('auth.login');
         }
         
     }

  
}
 