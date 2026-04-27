@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-blue-50">
    <div class="w-full max-w-sm p-8 bg-white rounded-xl shadow-lg border border-blue-200">
        <div class="flex flex-col items-center mb-6">
            <h2 class="mt-4 text-3xl font-bold text-blue-700 text-center">Login</h2>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required
                class="w-full border border-blue-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                class="w-full border border-blue-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
            >

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition"
            >
                Login
            </button>

            <a href="/register"
               class="block w-full text-center bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium py-3 rounded-lg transition">
               Register an Account
            </a>    
        </form>
    </div>
</div>
@endsection
