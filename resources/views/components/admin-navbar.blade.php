<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="flex justify-center">
    <div class="border border-gray-400 rounded-full  flex items-center space-x-4 bg-white shadow-md">
        <a href="{{ route('adminDashboard') }}" class="hover:bg-blue-500 hover:text-white rounded-full transition duration-200 ease-in-out px-5 py-2 {{ Route::currentRouteName() === 'adminDashboard' ? 'active ' : ''}}">
            Dashboard
        </a>
        <a href="{{ route('getDataView') }}" class="hover:bg-blue-500 hover:text-white rounded-full transition duration-200 ease-in-out px-5 py-2 {{ Route::currentRouteName() === 'getDataView' ? 'active ' : ''}}">
            Data controller
        </a>
        <a href="{{ route('dataRequest') }}" class="hover:bg-blue-500 hover:text-white rounded-full transition duration-200 ease-in-out px-5 py-2 ro {{ Route::currentRouteName() === 'dataRequest' ? 'active ' : ''}}">
            Request
        </a>
        <a href="{{ route('adminAccount') }}" class="px-5 py-2 hover:bg-blue-500 hover:text-white rounded-full transition duration-200 ease-in-out {{ Route::currentRouteName() === 'adminAccount' ? 'active ' : ''}}">
            Account
        </a>

    </div>
</nav>
