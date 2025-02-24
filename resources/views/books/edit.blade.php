@extends('app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-indigo-200 shadow-lg rounded-lg p-6 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Modifier le Livre</h2>

        <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">{{$book->title}}</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ $book->title }}" 
                    class=" text-black w-full p-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Modifier
                </button>

                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                    Supprimer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection