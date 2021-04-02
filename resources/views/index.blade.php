<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ie=edge">
    <meta name="author" content="Lukas Bujdos">
    <title>Travel Agency Website</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Travel Agency Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Algolia -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.0/themes/algolia.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/css/selectize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.4.5/themes/satellite.css">
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <!-- Algolia -->
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch-lite.umd.js" integrity="sha256-EXPXz4W6pQgfYY3yTpnDa3OH8/EPn16ciVsPQ/ypsjk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.8.3/dist/instantsearch.production.min.js" integrity="sha256-LAGhRRdtVoD6RLo2qDQsU2mp+XVSciKRC8XPOBWmofM=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/js/standalone/selectize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>

    <!-- Cookies -->

    <style>
        #menu-toggle:checked + #menu {
            display: block;
            opacity: 1;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .show {
            display: block;
        }

        /*  Cookies  */

    </style>
</head>

<body class="antialiased tracking-normal overflow-x-hidden">
<section class="fixed w-full z-30">
    <!-- Banner -->
    <div class="bg-indigo-600" id="banner">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-20">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-indigo-800">
                  <!-- Heroicon name: outline/speakerphone -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                  </svg>
                </span>
                    <p class="ml-3 font-medium text-white truncate">
                    <span class="md:hidden animate-pulse">
                        We announced a new product!
                    </span>
                        <span class="hidden md:inline animate-pulse">
                        Big news! We're excited to announce a brand new product.
                    </span>
                    </p>
                </div>
                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                    <button class="modal-open flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
                        <a href="#" class="transition delay-150 duration-300 ease-in-out">Learn more</a>
                    </button>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="relative lg:px-20 px-6 lg:py-0 py-2 bg-white flex flex-wrap items-center z-50 w-full h-20 shadow-md">
            <div class="flex-1 flex justify-between items-center text-gray-700 font-bold text-2xl uppercase">
                <a href="">Travel Agency <span class="text-indigo-500">Website</span> </a>
            </div>

            <label for="menu-toggle" class="point-cursor lg:hidden block">
                <svg class="fill-current text-gray-900" width="24" height="24"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu</title>
                    <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z" />
                </svg>
            </label>
            <input type="checkbox" class="hidden" id="menu-toggle">

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full bg-white bg-cover" id="menu">
                <nav class="w-full h-full pl-4">
                    <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                        <li>
                            <a href="/" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Home</a>
                        </li>
                        <li>
                            <a href="/shop" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Shop</a>
                        </li>
                        <li>
                            <a href="/packages" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Packages</a>
                        </li>
                        <li>
                            <a href="/blog" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Blog</a>
                        </li>
                        <li class="relative flex flex-wrap items-center lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">
                            <button class="dropbtn" onclick="myFunction()">More
                                <i class="fa fa-caret-down"></i>
                            </button>

                            <div class="mt-2 w-48 bg-white rounded-lg py-2 hidden absolute top-10" id="myDropdown">
                                <a href="/more-aboutus" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">About us</a>
                                <a href="/more-testimonials" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">Testimonials</a>
                                <a href="/more-terms" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">Terms</a>
                            </div>
                        </li>
                        <li>
                            <a href="/contacts/create" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Contact us</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                            <li class="block">
                                    <a href="{{ url('/dashboard') }}" class="text-gray-700">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Login</a>
                            </li>
                            <li class="block">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Register</a>
                                @endif
                            </li>
                            @endauth
                        @endif
                        @auth
                            <li class="block lg:pl-2">
                                <a href="#" class="cursor-pointer">
                                    <img src="https://avatars.githubusercontent.com/u/56771012?s=400&u=138ab7ed5edc027423abfbebad28b019482949c8&v=4"
                                         alt="Image" class="rounded-full w-10 h-10 border-2 border-transparent
            hover:border-indigo-400">
                                </a>
                            </li>
                            <li class="block pl-2">
                                <a href="{{route('logout')}}">Log Out</a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>

<!-- Slider -->
<section class="flex justify-center items-center z-10 pt-20 w-full h-full">
    <div class="w-full h-full bg-gray-100">
        <div class="swiper-container w-full h-full">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide relative w-screen h-auto">
                    <p class="absolute py-40 sm:py-20 sm:px-20 px-40 text-center text-white text-5xl sm:text-3xl">Visit your favourite location</p>
                    <p class="absolute py-60 sm:py-28 sm:px-20 px-40 text-center text-white text-3xl sm:text-xl">Lorem Ipsum dolorem</p>
                    <img class="w-screen" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/slider-image-1-1920x600.jpg" alt="Image">
                </div>
                <div class="swiper-slide relative w-screen h-auto">
                    <p class="absolute py-40 sm:py-20 sm:px-20 px-40 text-center text-white text-5xl sm:text-3xl">Visit your favourite location</p>
                    <p class="absolute py-60 sm:py-28 sm:px-20 px-40 text-center text-white text-3xl sm:text-xl">Lorem Ipsum dolorem</p>
                    <img class="w-screen" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/slider-image-2-1920x600.jpg" alt="Image">
                </div>
                <div class="swiper-slide relative w-screen h-auto">
                    <p class="absolute py-40 sm:py-20 sm:px-20 px-40 text-center text-white text-5xl sm:text-3xl">Visit your favourite location</p>
                    <p class="absolute py-60 sm:py-28 sm:px-20 px-40 text-center text-white text-3xl sm:text-xl">Lorem Ipsum dolorem</p>
                    <img class="w-screen" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/slider-image-3-1920x600.jpg" alt="Image">
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- If we need pagination -->
<!--            <div class="swiper-pagination"></div>-->
        </div>
    </div>
</section>

{{--<!-- Algolia Search -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto bg-gray-100 rounded">
        <!--        <div id="autocomplete"></div>-->
        <div id="searchbox"></div>
        <div id="hits"></div>
        <div id="pagination"></div>
    </div>
</section>--}}


<!-- Features / Cards -->
<section class="container mx-auto pt-28 sm:pt-4 s:px-2 sm:px-20 sm:pt-10">
    <div class="flex justify-between border-b border-indigo-200 pb-5 s:pb-0">
        <h2 class="text-2xl s:pl-2">Featured vacations</h2>
        <a href="/packages" class="inline-flex">
            <h4 class="text-indigo-500">View more </h4>
            <svg class="pt-1 pr-1.5 fill-current text-indigo-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/></svg>
        </a>
    </div>

    <div class="container my-12 mx-auto sm:my-6">
        <div class="flex flex-wrap md:flex md:flex-row md:flex-wrap -mx-1 sm:-mx-0 lg:mx-4">
            <!-- Card 1 -->
            <div class="my-1 sm:my-0 s:w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-b-lg shadow-lg">
                    <a href="packages">
                        <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-1-370x270.jpg">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black">Limelight Lodge</a>
                        </h1>
                        <p class="text-gray-500 text-sm">11/1/19</p>
                    </header>
                    <h1 class="lg:text-2xl p-2 md:px-4 font-bold">$300 - $400</h1>
                    <p class="text-sm p-2 md:px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>
                    <div class="flex items-center justify-start p-2 md:p-4">
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                            <p class="pr-2.5 text-sm">Spring</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                            <p class="pr-2.5 text-sm">20 Nights</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.18 9"/><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                            <p class="pr-2.5 text-sm">Flight Included</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Card 2 -->
            <div class="my-1  sm:my-0 s:w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-b-lg shadow-lg border-indigo-500 border-4 relative">
                    <div class="text-white bg-indigo-500 border-white border-4 absolute w-20 h-12 text-center flex items-center justify-center rounded-br-lg">
                        NEW
                    </div>
                    <a href="#">
                        <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-2-370x270.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black">Limelight Lodge</a>
                        </h1>
                        <p class="text-gray-500 text-sm">11/1/19</p>
                    </header>
                    <h1 class="lg:text-2xl p-2 md:px-4 font-bold">$300 - $400</h1>
                    <p class="text-sm p-2 md:px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>
                    <div class="flex items-center justify-start p-2 md:p-4">
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                            <p class="pr-2.5 text-sm">Spring</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                            <p class="pr-2.5 text-sm">20 Nights</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.18 9"/><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                            <p class="pr-2.5 text-sm">Flight Included</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Card 3 -->
            <div class="my-1 sm:my-0 w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-b-lg shadow-lg">
                    <a href="#">
                        <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-3-370x270.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black">Limelight Lodge</a>
                        </h1>
                        <p class="text-gray-500 text-sm">11/1/19</p>
                    </header>
                    <h1 class="lg:text-2xl p-2 md:px-4 font-bold">$300 - $400</h1>
                    <p class="text-sm p-2 md:px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>
                    <div class="flex items-center justify-start p-2 md:p-4">
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                            <p class="pr-2.5 text-sm">Spring</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                            <p class="pr-2.5 text-sm">20 Nights</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="pr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.18 9"/><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                            <p class="pr-2.5 text-sm">Flight Included</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<section class="container mx-auto px-20 s:px-0 py-16 s:py-0 sm:py-8 lg:py-12">
    <div class="flex justify-between border-b border-indigo-200 pb-5">
        <h2 class="text-2xl">About us</h2>
    </div>

    <div class="container mx-auto s:mx-0">
        <div class="flex inline-flex flex-wrap pt-8 sm:pt-16 sm:pt-8 lg:pt-12">
            <div class="w-full sm:w-1/2 text-justify s:text-justify sm:text-justify sm:w-full lg:w-1/2">
                <p class="pb-8 sm:pb-4 lg:pb-6 sm:pr-10">Lorem ipsum dolor sit amet, <a href="#" class="text-indigo-500">consectetur</a> adipisicing elit.
                    Aperiam asperiores consectetur dicta error eum ipsa
                    laborum perferendis quia sunt <a href="#" class="text-indigo-500">tenerur</a>. At ea,
                    incidunt laborum magnam omnis porro ullam vero voluptate.
                </p>
                <ul class="pl-5 pb-8 sm:text-center lg:text-left">
                    <li class="pb-3 list-disc">Lorem ipsum dolor sit amet</li>
                    <li class="pb-3 list-disc">Lorem ipsum dolor sit amet</li>
                    <li class="pb-3 list-disc">Lorem ipsum dolor sit amet</li>
                    <li class="pb-3 list-disc">Lorem ipsum dolor sit amet</li>
                </ul>
                <div class="text-center sm:text-center lg:text-left pb-8">
                    <a href="/more-aboutus" class="bg-indigo-500 text-white border-none rounded px-4 py-2 hover:bg-indigo-600">
                        Read more
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 md:flex md:flex-col md:justify-center">
                <img class="sm:hidden lg:block" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/about-1-570x350.jpg" alt="Image">
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts -->
<section class="container mx-auto sm:w-full sm:h-full md:flex-row md:flex-wrap py-16 sm:py-8 bg-no-repeat bg-cover bg-center bg-auto h-auto overflow-hidden bg-fixed" style="background-image: url(https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/other-image-fullscren-1-1920x900.jpg)">
    <div class="px-20">
        <div class="flex justify-between border-b border-white pb-5">
            <h2 class="text-2xl text-white">Latest Blog Posts</h2>
            <div class="inline-flex">
                <h4 class="text-white">Read more </h4>
                <svg class="pt-1 pr-1.5 fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/></svg>
            </div>
        </div>

        <div class="my-12">
            <div class="flex flex-wrap -mx-1 lg:mx-4">
                <!-- Blog Post 1 -->
                <div class="my-1 sm:w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                    <article class="shadow-lg bg-white">
                        <a href="/blog">
                            <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/blog-1-370x270.jpg">
                        </a>

                        <p class="text-sm p-4 md:px-4 text-center text-lg hover:text-indigo-500"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></p>
                        <div class="flex items-center justify-center p-2 md:p-4">
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">John Doe</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">20/06/2020 10:30</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">145</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="my-1  sm:w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                    <article class="shadow-lg bg-white">
                        <a href="#">
                            <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/blog-2-370x270.jpg">
                        </a>

                        <p class="text-sm p-4 md:px-4 text-center text-lg hover:text-indigo-500"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></p>
                        <div class="w-full flex items-center justify-center p-2 md:p-4">
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">John Doe</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">20/06/2020 10:30</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">145</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="my-1 sm:w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                    <article class="shadow-lg bg-white">
                        <a href="#">
                            <img alt="Image" class="block h-auto w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/blog-3-370x270.jpg">
                        </a>

                        <p class="text-sm p-4 md:px-4 text-center text-lg hover:text-indigo-500"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></p>
                        <div class="flex items-center justify-center p-2 md:p-4">
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">John Doe</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">20/06/2020 10:30</p>
                            </div>
                            <div class="flex items-center">
                                <p class="pr-2.5 text-sm">145</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Happy Clients -->
<section class="container mx-auto px-20 py-16 sm:py-6">
    <div class="flex justify-between border-b border-blue-200 pb-5 py-10">
        <h2 class="text-2xl">Happy Clients</h2>
        <a href="/more-testimonials" class="inline-flex">
            <h4 class="text-indigo-500">Read more </h4>
            <svg class="pt-1 pr-1.5 fill-current text-indigo-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/></svg>
        </a>
    </div>

    <div x-data="{swiper: null}"
         x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,

      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
      },
    })"
         class="relative w-10/12 mx-auto flex flex-row"
    >
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide p-4">
                    <div class="flex flex-col">
                        <div class="flex-shrink-0 p-4">
                            <h2 class="text-lg font-bold text-center pb-2">Jane Smith</h2>
                            <p class="text-justify">&rdquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolor est
                                facilis laborum laudantium minus necessitatibus optio.&rdquo;
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4">
                    <div class="flex flex-col">
                        <div class="flex-shrink-0 p-4">
                            <h2 class="text-lg font-bold text-center pb-2">John Doe</h2>
                            <p class="text-justify">&rdquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolor est
                                facilis laborum laudantium minus necessitatibus optio.&rdquo;
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4">
                    <div class="flex flex-col">
                        <div class="flex-shrink-0 p-4">
                            <h2 class="text-lg font-bold text-center pb-2">Antony Davis</h2>
                            <p class="text-justify">&rdquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolor est
                                facilis laborum laudantium minus necessitatibus optio.&rdquo;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                    class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="container mx-auto px-20 py-20 sm:py-10">
    <div class="flex flex-col md:flex-row items-center justify-between relative w-100 h-auto md:h-64 bg-100 shadow-2xl rounded-lg p-8 bg-gray-200">
        <div class="w-8/12 sm:w-full sm:text-justify md:w-8/12 md:text-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="fill-current text-indigo-500 float-left mr-1"><path d="M10 5v5h2.75L11 13h2.25L15 10V5h-5zm-7 5h2.75L4 13h2.25L8 10V5H3v5z"/></svg>
            <span class="flex text-lg sm:text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
            <p class="text-lg sm:text-2xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
        </div>
        <div class="relative shadow-md font-medium my-5 py-2 px-4 text-white cursor-pointer bg-indigo-500 hover:bg-indigo-600 rounded text-lg text-center w-48">
            <span class="absolute h-3 w-3 right-0 top-0 animate-ping inline-flex rounded-full h-3 w-3 bg-indigo-600">
            </span>
            <a href="/contacts/create">Contact us</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="px-20 pt-12 sm:pt-8">
    <div class="flex justify-center border-t border-blue-200 pt-16 sm:pt-8 py-16">
        <p>Copyright © 2020 - <a href="#">Lukas Bujdos</a></p>
    </div>
</footer>

<!--Modal-->
<section class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="flex flex-wrap flex-col items-center">
                <img class="h-60" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-3-370x270.jpg" alt="Product">
                <p class="text-4xl py-2">FLAT 30% OFF</p>
                <p class="py-2">Coupon code - GET30</p>
                <p>* Terms & Conditions apply</p>
            </div>


            <!--Footer-->
            <div class="flex justify-end pt-2">
                <a href="/shop"><button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Shop</button></a>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>
        </div>
    </div>
</section>

{{--<script src="{{ asset('js/algolia.js') }}"></script>--}}

<script>
    /* Swiper */
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })

    /* When the user clicks on the MORE button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }

    /*  Banner modal popup */

    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event){
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };

    function toggleModal () {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

    /* Hiding banner */
    window.addEventListener('load', function(e) {
        if(document.cookie.indexOf('banner_removed=1') !== -1) {
            document.getElementById('banner').style.display = 'none';
        }
    });

    document.getElementById('banner').addEventListener('click', function (e){
        e.preventDefault();
        this.style.display = 'none';
        document.cookie = "banner_removed=1";
    }, false);
</script>
</body>

</html>
