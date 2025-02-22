@extends('app')

@section('content')

<form action="{{ route('books.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $book->title }}">
    <button type="submit">Editer</button>
</form>

@endsection 