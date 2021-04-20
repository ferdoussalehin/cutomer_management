<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function add_student(){

        $students = Student::all();       

    	return view('student/add_student', compact('students'));
    }

    public function insert_student(Request $request){

    	$student = new Student;

    	$student->name = $request->name;
    	$student->email = $request->email;
    	$student->phone = $request->phone;

    	$student->save();

        return redirect()->back()->with('message', 'Successfully Inserted!');

    	//return response()->json($student);
    }

    public function edit_student($id){

        $student = Student::findorfail($id);

        return view('student/edit_student', compact('student'));
    }

    public function update_student(Request $request, $id){

        $student = Student::findorfail($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();

        return redirect()->route('add_student')->with('message', 'Successfully Inserted!');

    }

    public function delete_student($id) {

        $student = Student::findorfail($id);
        $student->delete();

        return redirect()->back()->with('message', 'Successfully deleted!');

    }

    public function view_student($id) {

        $student = Student::findorfail($id);

        //echo "<pre>"; print_r($student);

        return view('student/view_student', compact('student'));

    }
}
