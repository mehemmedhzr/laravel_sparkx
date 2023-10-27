<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('user.course.index');
    }

    public function courseDetails(){
        return view('user.course.courseDetails');
    }
}
