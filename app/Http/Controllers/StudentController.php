<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function adding(Request $request)
    {
        $items=new Student();
        $items->name=$request->name;
        $items->age=$request->age;
        $items->address=$request->address;
        $items->course=$request->course;
        $items->subject=$request->subject;

        $items->save();

        return response()->json('Added Successfully');
    }

    public function edit(Request $request)
    {
        $items=Student::findorfail($request->id);

        $items->name=$request->name;
        $items->age=$request->age;
        $items->address=$request->address;
        $items->course=$request->course;
        $items->subject=$request->subject;

        $items->update();

        return response()->json('Updated Successfully');
    }

    public function delete(Request $request)
    {
        $items=Student::findorfail($request->id)->delete();

        return response()->json('Deleted Successfully');
    }

    public function getData()
    {
        $items = Student::all();

        return response()->json($items);
    }
}
