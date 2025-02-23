
@extends('app')

@section('content')

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
    <h1 class="text-3xl font-bold text-gray-800 underline mb-6">
        Bienvenue sur notre application bibliothèque
    </h1>

    <div class="space-x-4">
        <a href="{{ route('books.create') }}" 
        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition">
            📖 Créer un livre
        </a>

        <a href="{{ route('books.index') }}" 
        class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
            📚 Liste des livres
        </a>
    </div>
</div>

@endsection