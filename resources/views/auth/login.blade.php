@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-blue-50 px-4">
    <div class="w-full max-w-sm p-8 bg-white rounded-2xl shadow-lg border border-blue-200">
        
        <div class="mb-6 bg-blue-100 border border-blue-200 rounded-xl shadow-sm">
            <div class="card-body text-center py-4 px-3" id="weather">

                @if(isset($weather))
                    <h5 class="text-blue-700 font-semibold">{{ $weather['city'] }}</h5>
                    <div class="text-3xl font-bold text-blue-800">
                        {{ $weather['temp'] }}°C
                    </div>
                    <div class="text-blue-600 capitalize text-sm">
                        {{ $weather['description'] }}
                    </div>
                @else
                    <div class="text-blue-600 text-sm">Loading weather...</div>
                @endif

            </div>
        </div>

        <script>
        async function loadWeather() {
            try {
                const res = await fetch('/weather');
                const data = await res.json();

                document.getElementById('weather').innerHTML = `
                    <h5 class="text-blue-700 font-semibold">${data.name}</h5>
                    <div class="text-3xl font-bold text-blue-800">
                        ${data.main.temp}°C
                    </div>
                    <div class="text-blue-600 capitalize text-sm">
                        ${data.weather[0].description}
                    </div>
                `;
            } catch (error) {
                console.error("Weather load failed", error);
            }
        }
        loadWeather();
        setInterval(loadWeather, 60000);
        </script>
        
        <div class="flex flex-col items-center mb-6">
            <h2 class="mt-2 text-3xl font-bold text-blue-700 text-center">Login</h2>
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