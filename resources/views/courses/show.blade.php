@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-body">

<h2>
{{ $course['course'] }}
</h2>

<p>
{{ $course['description'] }}
</p>

<p>
Lecturer:
{{ $course['lecturer'] }}
</p>

<a href="/courses" class="btn btn-primary">
Back
</a>

</div>

</div>

@endsection