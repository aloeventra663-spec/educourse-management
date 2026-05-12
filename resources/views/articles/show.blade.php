@extends('layouts.app')

@section('content')

<nav class="breadcrumb">

<a class="breadcrumb-item" href="/articles">
Articles
</a>

<span class="breadcrumb-item active">
{{ $article['title'] }}
</span>

</nav>

<div class="card">

<div class="card-body">

<h2>
{{ $article['title'] }}
</h2>

<p>
{{ $article['content'] }}
</p>

<h5>Related Articles</h5>

<ul>

<li>Laravel Routing</li>
<li>Bootstrap Components</li>

</ul>

</div>

</div>

@endsection