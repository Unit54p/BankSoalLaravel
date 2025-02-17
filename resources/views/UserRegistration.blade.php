@extends('layouts/layBas')

@section('body')
<div class="flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-6 w-80">
        <h2 class="text-xl font-semibold text-center mb-4">Registrasi</h2>
        <form action="{{ route('userRegistrationProcess') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                Registrasi
            </button>
        </form>
    </div>
</div>
@endsection
