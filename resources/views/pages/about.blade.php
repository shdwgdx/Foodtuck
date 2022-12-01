@extends('layouts.app')
@section('content')
    <section style="background-image: url({{ asset('images/breadcrumbbg.png') }})"
        class="h-[410px] bg-[left_-550px_top] xl:bg-left-top bg-auto bg-no-repeat mb-[120px]">
        <div class="container flex justify-center items-center h-[410px]">
            <div class="flex flex-col items-center">
                <div class="text-5xl leading-[56px] text-white font-['Helvetica'] mb-[20px]">
                    О нас
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
                                <span class="ml-1 text-xl font-medium text-[#FF9F0D] md:ml-2 dark:text-gray-400">О
                                    нас</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container flex justify-between mb-[120px]">
        <div class="grid grid-cols-2 gap-6 w-[669px] h-[734px]">
            <img src="{{ asset('images/aboutitem1.png') }}" alt="" class="h-[536px] w-[336px]">
            <div class="flex flex-col gap-6 self-end">
                <img src="{{ asset('images/aboutitem2.png') }}" alt="" class="h-[271px]">
                <img src="{{ asset('images/aboutitem3.png') }}" alt="" class="h-[382px]">
            </div>
        </div>
        <div class="w-[524px] h-[366px] self-center flex flex-col">
            <h3 class="text-lg text-[#FF9F0D] font-['Marck_Script'] mb-2">О нас</h3>
            <h2 class="text-[#333333] text-[48px] leading-[56px] font-['Helvetica'] font-bold mb-8">Food is an important
                part Of a balanced Diet</h2>
            <p class="text-base text-[#4F4F4F] font-['Helvetica']">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque diam
                pellentesque bibendum
                non dui volutpat
                fringilla bibendum. Urna, elit augue urna, vitae feugiat pretium donec id elementum. Ultrices mattis vitae
                mus risus. Lacus nisi, et ac dapibus sit eu velit in consequat.</p>
        </div>
    </section>
    <section class="container flex flex-col justify-center items-center">
        <h2 class="text-[#333333] text-[48px] leading-[56px] font-['Helvetica'] font-bold mb-2">Why Choose us</h2>
        <p class="text-base text-center text-[#4F4F4F] font-['Helvetica'] mb-[56px] h-[48px] ">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Quisque diam <br> pellentesque bibendum non dui volutpat fringilla bibendum. </p>
        <img src="{{ asset('images/aboutitem4.png') }}" alt="" class="mb-[56px]">
    </section>
    <section class="container flex justify-between mb-[120px]">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/aboutIconStudent.svg') }}" alt="" class="mb-6">
            <h2 class="text-2xl font-bold text-[#333333] font-['Helvetica'] mb-4">Best Chef</h2>
            <p class="text-center text-base text-[#4F4F4F] font-['Helvetica']">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit.
                Quisque
                diam
                pellentesque <br>
                bibendum non dui volutpat </p>
        </div>
        <div class="flex flex-col items-center ">
            <img src="{{ asset('images/aboutIconCoffee.svg') }}" alt="" class="mb-6">
            <h2 class="text-2xl font-bold text-[#333333] font-['Helvetica'] mb-4">120 Item food</h2>
            <p class="text-center text-base text-[#4F4F4F] font-['Helvetica']">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit.
                Quisque
                diam
                pellentesque <br>
                bibendum non dui volutpat </p>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/aboutIconPerson.svg') }}" alt="" class="mb-6">
            <h2 class="text-2xl font-bold text-[#333333] font-['Helvetica'] mb-4">Clean Environment</h2>
            <p class="text-center text-base text-[#4F4F4F] font-['Helvetica']">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit.
                Quisque
                diam
                pellentesque <br>
                bibendum non dui volutpat </p>
        </div>
    </section>
@endsection
