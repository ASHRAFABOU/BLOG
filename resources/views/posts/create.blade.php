@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-gray-900 p-6 rounded-lg shadow-lg border border-gray-700">
    <h1 class="text-2xl font-bold mb-6 text-white text-center">Ajouter un nouvel article</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-gray-300 font-medium mb-2">Titre :</label>
            <input type="text" id="title" name="title" required
                   class="w-full bg-gray-800 text-white border border-gray-600 rounded-md py-2 px-4 focus:ring-green-500 focus:border-green-500 shadow-sm placeholder-gray-400"
                   placeholder="Entrez le titre">
        </div>

        <div>
            <label for="content" class="block text-gray-300 font-medium mb-2">Contenu :</label>
            <textarea id="content" name="content" rows="5" required
                      class="w-full bg-gray-800 text-white border border-gray-600 rounded-md py-2 px-4 focus:ring-green-500 focus:border-green-500 shadow-sm placeholder-gray-400"
                      placeholder="Entrez le contenu"></textarea>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded shadow-md transition duration-300">
                Ajouter un article
            </button>
        </div>
    </form>
</div>
@endsection
