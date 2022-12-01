@extends('layouts.app')
@section('content')
    <section style="background-image: url({{ asset('images/breadcrumbbg.png') }})"
        class="h-[410px] bg-[left_-550px_top] xl:bg-left-top bg-auto bg-no-repeat mb-[120px]">
        <div class="container flex justify-center items-center h-[410px]">
            <div class="flex flex-col items-center">
                <div class="text-5xl leading-[56px] text-white font-['Helvetica'] mb-[20px]">
                    Наше меню
                </div>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center font-['Inter'] text-xl font-medium text-white hover:text-[#FF9F0D] dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Главная
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-xl font-medium text-[#FF9F0D] md:ml-2 dark:text-gray-400">Меню</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
@endsection
