@extends('app')

@section('content')

<form action="/books" method="POST">
    <!-- @csrf -->
    <input type="text" name="title">
    <button type="submit">Créer</button>
</form>

@endsection 