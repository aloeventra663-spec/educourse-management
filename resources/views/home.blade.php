@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3">

<h1>
EduCourse Management
</h1>

<p>
Academic Management System
Using Laravel 8
</p>

</div>

<div class="row">

<div class="col-md-4">

<div class="card text-center">

<div class="card-body">

<h2>
{{ $students }}
</h2>

<p>
Students
</p>

</div>
</div>
</div>

<div class="col-md-4">

<div class="card text-center">

<div class="card-body">

<h2>
{{ $lecturers }}
</h2>

<p>
Lecturers
</p>

</div>
</div>
</div>

<div class="col-md-4">

<div class="card text-center">

<div class="card-body">

<h2>
{{ $courses }}
</h2>

<p>
Courses
</p>

</div>
</div>
</div>

</div>

@endsection