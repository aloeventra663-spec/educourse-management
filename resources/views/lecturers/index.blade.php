@extends('layouts.app')

@section('content')

<h1 class="mb-4">
    Lecturer Data
</h1>

<div class="row">

@foreach($lecturers as $lecturer)

<div class="col-md-4 mb-4">

<div class="card h-100">

<img
src="{{ $lecturer['photo'] }}"
class="card-img-top"
>

<div class="card-body">

<h5>
{{ $lecturer['name'] }}
</h5>

<p>
NIDN:
{{ $lecturer['nidn'] }}
</p>

<p>
{{ $lecturer['expertise'] }}
</p>

<button class="btn btn-primary">
Detail
</button>

</div>
</div>
</div>

@endforeach

</div>

@endsection