<?php

namespace App\Http\Controllers;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = [

            [
                'name' => 'Dr. Ahmad',
                'nidn' => '10001',
                'expertise' => 'Web Programming',
                'photo' => 'https://i.pravatar.cc/300?img=1'
            ],

            [
                'name' => 'Dr. Budi',
                'nidn' => '10002',
                'expertise' => 'Artificial Intelligence',
                'photo' => 'https://i.pravatar.cc/300?img=2'
            ],

            [
                'name' => 'Dr. Siti',
                'nidn' => '10003',
                'expertise' => 'Database',
                'photo' => 'https://i.pravatar.cc/300?img=3'
            ]

        ];

        return view(
            'lecturers.index',
            compact('lecturers')
        );
    }
}