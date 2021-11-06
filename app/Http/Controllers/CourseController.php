<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Book;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Classes::all();
        $book = Book::all();

        return view('courses.index',['courses'=>$courses,'books'=>$book]);
    }
    public function detailClass($id)
    {
        $detail = Classes::find($id);
        $vid = Course::where('class_id',$id)->get();
        return view('courses.detailClass',['class'=>$detail,'course'=>$vid]);
    }

    public function detailCourse($id)
    {
        $course = Course::find($id);
        $vid_id = explode('/',$course->video);
        $vid_id = $vid_id[count($vid_id) - 1];

        $related_video = Course::where('class_id',$course->class_id)->get();

        return view('courses.detailCourse',['course'=>$course,'vid_id'=>$vid_id,'related_video'=>$related_video]);
    }


    public function book($id)
    {
        $course = Course::find($id);
        $vid_id = explode('/',$course->video);
        $vid_id = $vid_id[count($vid_id) - 1];

        $related_video = Course::where('class_id',$course->class_id)->get();

        return view('courses.detailCourse',['course'=>$course,'vid_id'=>$vid_id,'related_video'=>$related_video]);
    }


    public function downloadBook($id)
    {
        $book = Book::find($id);
        return response()->download(public_path('eBook/'.$book->file));
    }
}
