@extends('layouts/layBas')

@section('body')
@if(!Auth::check())
<div class="flex flex-col items-center justify-center ">
    <div class="bg-white shadow-md rounded-lg p-6 w-80">
        <h2 class="text-xl font-semibold text-center mb-4">Login</h2>
        <form action="{{ route('userLogin') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Login
            </button>
        </form>
        <div class="text-center mt-4">
            <p class="text-sm">Belum punya akun?
                <a href="{{ route('userRegistrationView') }}" class="text-blue-500 hover:underline">Registrasi</a>
            </p>
        </div>
    </div>
</div>


@else
{{-- kalau sudah login --}}
<p class="text-2xl text-start">Selamat datang, {{ Auth::user()->name }}!</p>
<button onclick="window.location.href='{{ route('uploadSoalView') }}'" class="btnPrimary">Upload soal</button>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
</form>

@endif

@endsection
