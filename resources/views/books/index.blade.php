
@extends('app')

@section('content')

@foreach($books as $book)

    <li>{{$book->title}} by {{$book->user->name}} </li>
    <br>
    <p>
        <a href="{{route('books.edit', $book)}}">Editer</a>
    </p>

@endforeach

@endsection