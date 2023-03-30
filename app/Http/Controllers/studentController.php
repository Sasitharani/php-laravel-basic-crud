<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;



class studentController extends Controller
{
    // -----------------------------------------------CREATE*********INSERT-------------------------------------------------
    
    public function insert(Request $request)
    {
        
        //print_r($_REQUEST);


        $name = $request->input('name');
        $rNo = $request->input('Rno');


        $student = new Student;
        $student->Name = $request->input('name');
        $student->Roll = $request->input('Rno');
        $student->save();
        $studentsView = Student::all();
        return view('view', compact('studentsView'));
    }

 // -----------------------------------------------READ*********VIEW-------------------------------------------------

    public function view(Request $request)
    {

        $studentsView = Student::all();
        return view('view', compact('studentsView'));
    }

 // -----------------------------------------------UPDATE*********EDIT-------------------------------------------------

    public function edit(Request $request, $id)
    {
        $flag = "yes";
        $student = Student::find($id);
        return view('edit', compact('student', 'flag'));
    }



    public function change(Request $request, $id)
    {
        print($id);
         $student = Student::find($id);
   
        $student->Name = $request->input('name');
        $student->Roll = $request->input('roll');
        $student->save();

        $studentsView = Student::all();
        return view('view', compact('studentsView'));
    }



 // -----------------------------------------------**********DELETE********-------------------------------------------------

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->route('students.index')->with('success', 'Student deleted successfully');
        } else {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    }
}
