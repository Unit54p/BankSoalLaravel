<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="flex justify-center">
    <div class="border border-gray-400 rounded-full  flex items-center space-x-4 bg-white shadow-md">
        <a href="{{ route('adminDashboard') }}" class="px-5 py-2 {{ Route::currentRouteName() === 'adminDashboard' ? 'active rounded-full' : ''}}">
            Dashboard
        </a>
        <a href="{{ route('getDataView') }}" class="px-5 py-2 {{ Route::currentRouteName() === 'getDataView' ? 'active rounded-full' : ''}}">
            Data controller
        </a>
        <a href="{{ route('adminDataRequest') }}" class="px-5 py-2 {{ Route::currentRouteName() === 'adminDataRequest' ? 'active rounded-full' : ''}}">
            Request
        </a>
        <a href="{{ route('adminAccount') }}" class="px-5 py-2 {{ Route::currentRouteName() === 'adminAccount' ? 'active rounded-full' : ''}}">
            Account
        </a>

    </div>
</nav>
