@extends('layouts.app')

@section('content')

<h1 class="mb-4">
Articles
</h1>

<div class="row">

@foreach($articles as $article)

<div class="col-md-6 mb-4">

<div class="card">

<div class="card-body">

<h3>
{{ $article['title'] }}
</h3>

<a
href="/articles/{{ $article['slug'] }}"
class="btn btn-primary"
>

Read More

</a>

</div>

</div>

</div>

@endforeach

</div>

@endsection 