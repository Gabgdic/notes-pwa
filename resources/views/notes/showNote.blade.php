@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-16 p-8 bg-white rounded-xl shadow-lg border border-gray-200">
    <div class="flex flex-col items-center mb-6">
        <div class="w-24 h-24 rounded-full bg-blue-200 flex items-center justify-center text-3xl font-bold text-blue-700">
            G
        </div>
        <h2 class="mt-4 text-2xl font-semibold text-gray-800">Gabriel Federick E. Alboleras</h2>
        <p class="text-gray-500 mt-1">BSIT - Networking | Section: 3-G</p>
    </div>

    <div class="space-y-3">
        <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-400">
            <h3 class="text-blue-700 font-medium">Name</h3>
            <p class="text-gray-700">Gabriel Federick E. Alboleras</p>
        </div>
        <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-400">
            <h3 class="text-blue-700 font-medium">Section</h3>
            <p class="text-gray-700">3-G</p>
        </div>
        <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-400">
            <h3 class="text-blue-700 font-medium">Course</h3>
            <p class="text-gray-700">BS Information Technology - Networking</p>
        </div>
    </div>

    <div class="mt-6 text-center">
        <a href="{{ route('note.index') }}" 
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-full transition">
           Back to Notes
        </a>
    </div>
</div>
@endsection
