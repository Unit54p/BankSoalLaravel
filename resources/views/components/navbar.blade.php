<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="flex justify-center">
    <div class="border border-gray-400 rounded-full  flex items-center space-x-4 bg-white shadow-md">
        <a href="{{ route('home') }}" class="px-5 py-2 {{ Request::is('/') ? 'active rounded-full' : ''}}">
            Home
        </a>
        <a href="{{ route('bankSoal') }}" class="px-5 py-2 text-gray-700  {{ Request::is('bankSoal') ? 'active rounded-full' : ''}} {{ Request::is('cariSoalProcess') ? 'active rounded-full' : ''}}">
            Bank Soal
        </a>
        <a href="{{ route('about') }}" class="px-5 py-2 text-gray-700  {{ Request::is('about') ? 'active rounded-full' : ''}}">
            About us
        </a>
        <a href="{{ route('accountView') }}" class="px-5 py-2 text-gray-700  {{ Request::is('accountView') ? 'active rounded-full' : ''}}">
            Account
        </a>
    </div>
</nav>
