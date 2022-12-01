<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    @stack('scripts')
</head>

<body class="antialiased">
    @livewire('notifications')

    <header>
        <nav
            class="bg-[#0D0D0D] px-2 sm:px-4 py-2.5 dark:bg-gray-900 static w-full z-20 top-0 left-0 border-b border-black dark:border-gray-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{ route('index') }}" class="flex items-center">
                    <h1 class="text-center text-2xl font-bold font-['Helvetica'] text-white ">
                        Фуд<span class="text-[#FF9F0D]">так</span>
                    </h1>
                </a>
                <div class="flex md:order-2">
                    <div class="flex justify-between items-center w-[99px] mr-4">
                        <a href="#"><img src="{{ asset('images/Search.svg') }}" alt="Likest"
                                class="w-5 h-5"></a>
                        <a href="#"><img src="{{ asset('images/Basket.svg') }}" alt="Backet"></a>
                        <a href="#"><img src="{{ asset('images/User.svg') }}" alt="User"></a>
                    </div>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0  md:border-0 md:bg-[#0D0D0D] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 font-['Inter'] text-base font-bold">
                        <li>
                            <a href="{{ route('index') }}"
                                class="block py-2 pl-3 pr-4 text-white bg-[#FF9F0D] rounded md:bg-transparent md:text-[#FF9F0D] md:p-0 dark:text-white"
                                aria-current="page">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('menu') }}"
                                class="block py-2 pl-3 pr-4 md:text-white text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9F0D] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Меню</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}"
                                class="block py-2 pl-3 pr-4 md:text-white text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9F0D] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Магазин</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="block py-2 pl-3 pr-4 md:text-white text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9F0D] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">О
                                нас</a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}"
                                class="block py-2 pl-3 pr-4 md:text-white text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9F0D] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    @isset($slot)
        {{ $slot }}
    @endisset

</body>

</html>
