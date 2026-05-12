@extends('layouts.app')

@section('content')

<h1 class="mb-4">
Admin Dashboard
</h1>

<div class="accordion" id="accordionExample">

<div class="accordion-item">

<h2 class="accordion-header">

<button
class="accordion-button"
data-bs-toggle="collapse"
data-bs-target="#collapseOne"
>

Statistics

</button>

</h2>

<div
id="collapseOne"
class="accordion-collapse collapse show"
>

<div class="accordion-body">

Total Students: 150

</div>

</div>

</div>

</div>

@endsection