@extends('app')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Créer un livre</h2>

        <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Titre du livre</label>
                <input 
                        type="text" name="title" id="title" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none" 
                        placeholder="Entrez le titre"
                >
            </div>

            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition">
                📖 Créer
            </button>
        </form>
    </div>
</div>

@endsection