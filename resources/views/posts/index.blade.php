@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">Tous les articles</h1>
        <a href="{{ route('posts.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow">
            + Nouvel article
        </a>
    </div>

    <div class="overflow-x-auto rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-700 bg-gray-900 rounded-lg text-white">
            <thead class="bg-gray-800 text-gray-300">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Titre</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Contenu</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Procédures</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @foreach($posts as $post)
                <tr class="hover:bg-gray-800 transition">
                    <td class="py-3 px-6 font-medium">{{ $post->title }}</td>
                    <td class="py-3 px-6">{{ $post->content }}</td>
                    <td class="py-3 px-6 flex space-x-2">
                        <a href="{{ route('posts.edit', $post->id) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 px-4 rounded-full text-sm shadow">
                            Modifier
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-600 hover:bg-red-700 text-white py-1.5 px-4 rounded-full text-sm shadow">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
