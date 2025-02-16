@extends('layouts/layLoginAdmin')
@section('body')
<div class="flex justify-center items-center h-screen">
    <form action="{{ route('adminLoginAutentication') }}" method="POST" class="bg-white p-6 rounded shadow-md w-96">

        @csrf
        <h2 class="text-xl font-bold mb-4 text-center">Login Admin</h2>

        @if ($errors->any())
        <div class="text-red-500 mb-2 text-center">
            {{ $errors->first() }}
        </div>
        @endif

        <div class="mb-4">
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Masuk</button>

        <div class="mt-4 text-center">
            <a href="#" class="text-blue-500">Lupa Password?</a>
        </div>
    </form>

</div>
@endsection
