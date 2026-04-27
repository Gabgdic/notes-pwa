@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Notes App</h1>

    <div class="flex justify-end mb-2">
        <a href="{{ route('note.showNote') }}" class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded">
            Home
        </a>
    </div>



    <form method="POST" action="/notes" class="mb-4 space-y-2">
        @csrf
        <input name="title" placeholder="Title"
            class="w-full border p-2 rounded" required>
        <textarea name="content" placeholder="Content"
            class="w-full border p-2 rounded" required></textarea>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Add Note
        </button>
    </form>

    @foreach($notes as $note)
        <div class="bg-white p-3 rounded shadow mb-2">
            <h2 class="font-bold">{{ $note->title }}</h2>
            <p>{{ $note->content }}</p>

            <form method="POST" action="/notes/{{ $note->id }}">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Delete
                </button>
            </form>
        </div>
    @endforeach
</div>
@endsection