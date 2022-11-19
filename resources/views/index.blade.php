<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Inter:regular,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Marck+Script:regular" rel="stylesheet" />

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
    <section class="min-h-[950px] h-full bg-center bg-no-repeat bg-cover "
        style="background-image: url('{{ @asset('images/headerbg.png') }}')">
        <div class="container mx-auto pt-11">
            <h1 class="text-center text-2xl font-bold font-['Helvetica'] text-white mb-4"><span class="text-[#FF9F0D]">
                    Фуд</span>так
            </h1>
            <div class="flex justify-between items-center mb-[161px]">
                <nav class="max-w-[507px] w-full mr-5">
                    <ul class="flex justify-between text-base font-bold font-['Inter']  last:text-white">
                        <li class="text-[#FF9F0D]"><a href="">Главная</a></li>
                        <li><a href="">Меню</a></li>
                        <li><a href="">Магазин</a></li>
                        <li><a href="">О нас</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                </nav>


                <div class="flex justify-between items-center w-[380px]">
                    <form class="w-full max-w-[310px]">
                        <div class="relative  ">
                            <input type="text" id="default-search"
                                class="block text-white w-full p-4 text-sm bg-inherit border border-solid border-[#FF9F0D] rounded-full focus:border-red-700"
                                placeholder="Search..." required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-3.5"><img
                                    src="{{ asset('images/Search.svg') }}" alt="Search"></button>
                        </div>
                    </form>
                    <a href="#"><img src="{{ asset('images/User.svg') }}" alt="User"></a>
                    <a href="#"><img src="{{ asset('images/Basket.svg') }}" alt="Backet"></a>
                </div>
            </div>
            <div class="flex justify-between mb-[82px]">
                <div class="max-w-[472px] w-full flex flex-col mr-[93px]">
                    <h2 class="font-['Marck_Script'] text-4xl font-normal text-[#FF9F0D] mb-2">Быстро & Занятно!
                    </h2>
                    <h3 class="text-[60px] leading-[68px] font-bold font-['Helvetica'] text-white mb-8"><span
                            class="text-[#FF9F0D]">Th</span>e Art
                        of speed
                        food Quality</h3>
                    <p class="text-white text-base font-['Inter'] font-normal mb-8">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit.
                        Varius sed pharetra dictum neque massa congue</p>
                    <a href="#"
                        class="flex justify-center items-center w-[190px] h-[60px]  text-base font-['Inter'] text-[#E0DFDF] border rounded-[30px] bg-[#FF9F0D]">See
                        Menu</a>
                </div>
                <div class="mt-[-152px] ">
                    <img src="{{ asset('images/HeroFood.png') }}" alt="HeroFood"
                        class="w-[877px] h-[670px] object-scale-down ">

                </div>
            </div>
        </div>

    </section>
    <section class="bg-[#0D0D0D]">
        <div class="container pt-[120px] min-h-[950px]">
            <div class="flex justify-between mb-[120px]">
                <div class="max-w-[535px] w-full flex flex-col mr-[93px]">
                    <h2 class="font-['Marck_Script'] text-4xl font-normal text-[#FF9F0D] mb-2">О нас</h2>
                    <h3 class="text-[60px] leading-[68px] font-bold font-['Helvetica'] text-white mb-8"><span
                            class="text-[#FF9F0D]">We</span>
                        Create the best
                        foody product
                    </h3>
                    <p class="text-white text-base font-['Inter'] font-normal mb-8">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Quisque diam pellentesque bibendum non dui volutpat fringilla bibendum. Urna,
                        elit
                        augue urna, vitae feugiat pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus
                        nisi, et ac dapibus sit eu velit in consequat.</p>
                    <div class="flex items-center mb-8">
                        <img src="{{ asset('images/Check.svg') }}" alt="" class="mr-3">
                        <p class="text-white text-lg font-['Inter'] font-normal">Lacus nisi, et ac dapibus sit eu
                            velit in consequat.</p>
                    </div>
                    <div class="flex items-center mb-8">
                        <img src="{{ asset('images/Check.svg') }}" alt="" class="mr-3">
                        <p class="text-white text-lg font-['Inter'] font-normal">Quisque diam pellentesque bibendum non
                            dui
                            volutpat fringilla </p>
                    </div>
                    <div class="flex items-center mb-8">
                        <img src="{{ asset('images/Check.svg') }}" alt="" class="mr-3">
                        <p class="text-white text-lg font-['Inter'] font-normal">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit</p>
                    </div>
                    <a href="#"
                        class="flex justify-center items-center w-[190px] h-[60px]  text-base font-['Inter'] text-[#E0DFDF] border rounded-[30px] bg-[#FF9F0D]">See
                        Menu</a>
                </div>
                <div class="grid grid-cols-2 gap-4 w-[660px] ">
                    <img src="{{ asset('images/unsplash_fdlZBWIP0aM.png') }}" alt=""
                        class="col-span-full h-full">
                    <img src="{{ asset('images/unsplash_jpkfc5_d-DI.png') }}" alt="" class="">
                    <img src="{{ asset('images/unsplash_mAQZ3X_8_l0.png') }}" alt="" class="">
                </div>
            </div>
            <div class="mb-[120px]">
                <h2 class="font-['Marck_Script'] text-4xl font-normal text-[#FF9F0D] text-center mb-2">Категории еды
                </h2>
                <h3 class="text-[60px] leading-[68px] font-bold font-['Helvetica'] text-white mb-14 text-center"><span
                        class="text-[#FF9F0D]">Ch</span>oose Food Item
                </h3>
                <div class="flex gap-[33px] justify-between">
                    <img src="{{ asset('images/fooditem1.png') }}" alt="" class="w-[305px]">
                    <img src="{{ asset('images/fooditem2.png') }}" alt="" class="w-[305px]">
                    <img src="{{ asset('images/fooditem3.png') }}" alt="" class="w-[305px]">
                    <img src="{{ asset('images/fooditem4.png') }}" alt="" class="w-[305px]">
                </div>
            </div>
            <div class="flex justify-between ">
                <div class="flex flex-col gap-4 mb-[120px]">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/foodgrid1.png') }}" alt=""
                            class=" w-[362px] h-[356px] self-center">
                        <img src="{{ asset('images/foodgrid2.png') }}" alt=""
                            class=" w-[281px] h-[231px] self-end">
                    </div>
                    <div class="flex gap-4">
                        <img src="{{ asset('images/foodgrid3.png') }}" alt="" class="w-[244px] h-[306px] ">
                        <img src="{{ asset('images/foodgrid4.png') }}" alt="" class="w-[221px] h-[226px] ">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/foodgrid5.png') }}" alt=""
                                class="w-[161px] h-[168px] ">
                            <img src="{{ asset('images/foodgrid6.png') }}" alt=""
                                class="w-[161px] h-[166px] ">
                        </div>
                    </div>
                </div>
                <div class="w-[526px] flex flex-col ">
                    <h2 class="font-['Marck_Script'] text-4xl font-normal text-[#FF9F0D]  mb-2">Почему мы
                    </h2>
                    <h3 class="text-[60px] leading-[68px] font-bold font-['Helvetica'] text-white mb-8 ">
                        <span class="text-[#FF9F0D]">Ex</span>ta ordinary taste
                        And Experienced
                    </h3>
                    <p class="text-white text-base font-['Inter'] font-normal mb-8">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Quisque diam pellentesque bibendum non
                        dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat pretium donec id
                        elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac dapibus sit eu velit in
                        consequat.</p>
                    <div class="flex justify-between mb-[34px] w-[374px]">
                        <div class="flex flex-col">
                            <div
                                class="mb-3 w-[102px] h-[100px] border rounded-md bg-[#FF9F0D] flex justify-center items-center">
                                <img src="{{ asset('images/Hamburger.svg') }}" alt="">
                            </div>
                            <p class="text-lg font-['Inter'] text-[#FFFFFF] text-center">Fast Food</p>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="mb-3 w-[102px] h-[100px] border rounded-md bg-[#FF9F0D] flex justify-center items-center">
                                <img src="{{ asset('images/Cookie.svg') }}" alt="">
                            </div>
                            <p class="text-lg font-['Inter'] text-[#FFFFFF] text-center ">Lunch</p>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="mb-3 w-[102px] h-[100px] border rounded-md bg-[#FF9F0D] flex justify-center items-center">
                                <img src="{{ asset('images/Wine.svg') }}" alt="">
                            </div>
                            <p class="text-lg font-['Inter'] text-[#FFFFFF] text-center">Dinner</p>
                        </div>
                    </div>
                    <div class="w-[374px] h-[92px] bg-white rounded-md flex justify-center relative">
                        <div class="w-[10px] h-[92px] bg-[#FF9F0D] rounded-l-md absolute top-0 left-0"></div>
                        <div class="flex justify-between items-center w-[272px] ">
                            <div class="text-[#FF9F0D] text-5xl font-bold font-['Helvetica']">30+</div>
                            <div class="flex flex-col w-[143px]">
                                <div class="text-xl font-['Inter']">Years of</div>
                                <div class="text-xl font-['Helvetica'] font-bold text-[#1E1E1E]">Experienced</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('images/clientbg.png') }})"
        class="bg-center bg-no-repeat bg-cover  min-h-[469px]">
        <div class="container flex justify-between items-center h-[469px]">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/Chef.svg') }}" alt="" class="w-[120px] h-[120px] mb-6">
                <h3 class="text-2xl font-['Helvetica'] text-white mb-6">Professional Chefs</h3>
                <p class="text-[40px] leading-[48px] font-['Helvetica'] text-white">420</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/Itemoffood.svg') }}" alt="" class="w-[120px] h-[120px] mb-6">
                <h3 class="text-2xl font-['Helvetica'] text-white mb-6">Items Of Food</h3>
                <p class="text-[40px] leading-[48px] font-['Helvetica'] text-white">320</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/YearsofExperienced.svg') }}" alt=""
                    class="w-[120px] h-[120px] mb-6">
                <h3 class="text-2xl font-['Helvetica'] text-white mb-6">Years Of Experienced</h3>
                <p class="text-[40px] leading-[48px] font-['Helvetica'] text-white">1+</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/Happycustomers.svg') }}" alt="" class="w-[120px] h-[120px] mb-6">
                <h3 class="text-2xl font-['Helvetica'] text-white mb-6">Happy Customers</h3>
                <p class="text-[40px] leading-[48px] font-['Helvetica'] text-white">220</p>
            </div>
        </div>
    </section>

</body>

</html>
