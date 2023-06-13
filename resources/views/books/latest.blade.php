@extends('layouts/main')

@section('content')

<h4>latest books</h4>

<button id="laodBooksBtn">load</button>

<ul id="latestBooks"></ul>



@vite('/resources/js/app.js')
    
@endsection