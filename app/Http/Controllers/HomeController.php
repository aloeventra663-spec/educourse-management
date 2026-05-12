<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $students = 150;
        $lecturers = 20;
        $courses = 35;

        return view(
            'home',
            compact(
                'students',
                'lecturers',
                'courses'
            )
        );
    }
}