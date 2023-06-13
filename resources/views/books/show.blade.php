@extends('layouts/main')

@section('content')
    <h3>{{ $book->title }}</h3>

    <div>published at: {{ $book->publication_date }}</div>
    <div>price: {{ $book->price }} Eur</div>
    {!! $book->description !!}

    <br />
    <a href="{{ route('books.edit', $book->id) }}"><button>Edit</button></a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
@endsection
