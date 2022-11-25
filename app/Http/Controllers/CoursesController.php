<?php


namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CoursesController extends Controller
{
    public function index() {
        $courses = Courses::all();
        return view('courses.index',compact('courses'));
    }
    public function indexs(){
        $courses = Courses::all();
        return view('courses.indexs',compact('courses'));
    }

    //function create is to view page where we need to write info about courses
    public function create() {
        return view('courses.create');
    }
    //after we view page create where we can add info and submit
    //after we click submit store function will run and store all values in DB
    //and return message that they are stored successfully.
    public function store(Request $request){
        $course = new courses;
        $course-> CourseName = $request->input('CourseName');
        $course-> Credits = $request->input('Credits');
        $course-> Semester = $request->input('Semester');
        $course-> CourseDisc = $request->input('CourseDisc');
        $course-> Image = $request->input('Image');

        if($request->hasfile('Image')){
            $file = $request->file("Image");
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/courses/',$filename);
            $course->Image = $filename;
        }
        $course->save();

        return redirect()->back()->with('status','courses are uploaded to the server Successfully');
    }


    public function edit($id){
        $courses = Courses::find($id);
        return view('courses.edit', compact('courses'));
    }


    public function update(Request $request , $id){
        $courses = Courses::find($id);
        $courses-> CourseName = $request->input('CourseName');
        $courses-> Credits = $request->input('Credits');
        $courses-> Semester = $request->input('Semester');
        $courses-> CourseDisc = $request->input('CourseDisc');

        if($request->hasfile('Image')){
            $distination = 'uploads/courses/'.$courses->Image;
            if(File::exists($distination))
            {
                File::delete($distination);
            }
            $file = $request->file("Image");
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/courses/',$filename);
            $courses->Image = $filename;
        }
        $courses->update();

        return redirect()->back()->with('status','course is updated Successfully');
        
    }

    public function destroy($id){
        $courses = Courses::find($id);

        $distination = 'uploads/courses/'.$courses->Image;
        if(File::exists($distination))
        {
            File::delete($distination);
        }

        $courses->delete();
        return redirect()->back()->with('status','course is deleted from the Data Successfully');
    }

    public function indexss($id){
        $courses = Courses::find($id);
        return view('courses.indexss',compact('courses'));
    }

}
