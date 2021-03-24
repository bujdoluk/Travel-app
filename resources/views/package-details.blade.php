<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <style>
        #menu-toggle:checked + #menu {
            display: block;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .show {
            display: block;
        }

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
                    <span class="md:hidden">
                        We announced a new product!
                    </span>
                        <span class="hidden md:inline">
                        Big news! We're excited to announce a brand new product.
                    </span>
                    </p>
                </div>
                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                    <button class="modal-open flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
                        <a href="#">Learn more</a>
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
        <div class="lg:px-20 top-20 px-6 lg:py-0 py-2 bg-white flex flex-wrap items-center z-50 w-full h-20 shadow-md">
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

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
                <nav>
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
                            <a href="blogs" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">Blog</a>
                        </li>
                        <li class="relative flex flex-wrap items-center lg:p-4 py-3 px-0 block border-b-2 border-transparent
                    hover:border-indigo-400">
                            <button class="dropbtn" onclick="myFunction()">More
                                <i class="fa fa-caret-down"></i>
                            </button>

                            <div class="mt-2 w-48 bg-white rounded-lg py-2 hidden absolute top-10" id="myDropdown">
                                <a href="more-aboutus" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">About us</a>
                                <a href="more-testimonials" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">Testimonials</a>
                                <a href="more-terms" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">Terms</a>
                            </div>
                        </li>
                        <li>
                            <a href="contacts/create" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
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
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>

<!-- Background Image -->
<section class="relative">
    <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/heading-2-1920x500.jpg" alt="Image" class="h-80 w-full opacity-50 relative">
    <p class="absolute inset-56 text-center text-indigo-500 font-bold text-6xl">Packages-details</p>
</section>

<!-- Pictures -->
<section class="h-full w-auto px-20 py-20 flex flex-wrap align-top">
    <div class="xl:w-1/2 h-full pb-4">
        <div class="pb-5">
            <img class="w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-details-1-740x540.jpg" alt="Image">
        </div>
        <div class="inline-flex w-full justify-evenly gap-6">
            <div>
                <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-1-370x270.jpg" alt="Image">
            </div>
            <div>
                <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-2-370x270.jpg" alt="Image">
            </div>
            <div>
                <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-3-370x270.jpg" alt="Image">
            </div>
        </div>
    </div>

    <div class="w-1/2 h-full px-10 pb-4 flex flex-wrap">
        <div class="flex flex-wrap items-start">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                <p class="pr-2.5 text-lg pb-2">Spring</p>
            </div>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                <p class="pr-2.5 text-lg pb-2">20 Nights</p>
            </div>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path d="M10.18 9"/><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                <p class="pr-2.5 text-lg pb-2">Flight Included</p>
            </div>
        </div>
        <div class="flex flex-wrap items-center py-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <p class="pl-4"><strong>6 Regeneration Road, SE16 2NX, London</strong></p>
        </div>



        <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi dolorem ducimus eaque eos
            esse eveniet facilis iste minus, nihil, quibusdam quo repellat sed soluta ullam veritatis? Dicta, sint?
        </p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi dolorem ducimus eaque eos
            esse eveniet facilis iste minus, nihil, quibusdam quo repellat sed soluta ullam veritatis? Dicta, sint?
        </p>

        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque commodi dolorem ducimus eaque eos
            esse eveniet facilis iste minus, nihil, quibusdam quo repellat sed soluta ullam veritatis? Dicta, sint?
        </p>
    </div>
</section>

<!-- Availability & Prices -->

<!-- About us -->
<section class="px-20 py-8">
    <div class="flex justify-between border-b border-blue-200 pb-5">
        <h2 class="text-2xl">Availability & Prices</h2>
    </div>

    <table class="w-full h-full px-20 pt-10">
        <tr class="border-b-2 border-indigo-200">
            <td class="font-bold text-lg py-4 pl-4">Package</td>
            <td class="font-bold text-lg">From</td>
            <td class="font-bold text-lg">To</td>
            <td class="font-bold text-lg">Price</td>
        </tr>
        <tr class="border-b border-indigo-200">
            <td class="py-4"></td>
            <td class="py-4">01-06-2020</td>
            <td class="py-4">31-12-2020</td>
            <td class="py-4">€ 300 per night</td>
        </tr>
        <tr class="pb-2 border-b border-indigo-200">
            <td class="py-4"></td>
            <td class="py-4">01-06-2020</td>
            <td class="py-4">31-12-2020</td>
            <td class="py-4">€ 300 per night</td>
        </tr>
        <tr class="pb-2 border-b border-indigo-200">
            <td class="py-4"></td>
            <td class="py-4">01-06-2020</td>
            <td class="py-4">31-12-2020</td>
            <td class="py-4">€ 300 per night</td>
        </tr>
        <tr>
            <td class="py-4"></td>
            <td class="py-4">01-06-2020</td>
            <td class="py-4">31-12-2020</td>
            <td class="py-4">€ 4000 total price</td>
        </tr>
    </table>
</section>

<!-- Info -->
<section class="px-20 py-8">
    <div class="flex justify-between border-b border-blue-200 pb-5">
        <h2 class="text-2xl">Info</h2>
    </div>

    <table>
        <tr class=" border-b border-indigo-200">
            <td class="w-1/6 py-4 pl-4">Check-in</td>
            <td class="pl-20 py-4">Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit
                , sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis.
                Ut accumsan dignissim rutrum.
            </td>
        </tr>
        <tr class=" border-b border-indigo-200">
            <td class="py-4 pl-4">Check-out</td>
            <td class="pl-20 py-4">
                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
            </td>
        </tr>
        <tr class=" border-b border-indigo-200">
            <td class="py-4 pl-4">Pets</td>
            <td class="pl-20 py-4">
                Not allowed
            </td>
        </tr>
        <tr class=" border-b border-indigo-200">
            <td class="py-4 pl-4">Policies</td>
            <td class="pl-20 py-4">Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. </td>
        </tr>
        <tr>
            <td class="py-4 pl-4">Fees</td>
            <td class="pl-20 py-4">

                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. </td>
        </tr>
    </table>
</section>

<!-- Map -->
<section class="px-20 py-8">
    <div class="flex justify-between border-b border-blue-200 pb-5">
        <h2 class="text-2xl">Map</h2>
        <h2 class="text-2xl pr-16">Contact Details</h2>
    </div>

    <div class="flex flex-wrap">
        <iframe class="pt-10" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11628.751733874766!2d27.948302749999996!3d43.22651925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbg!4v1592215682178!5m2!1sen!2sbg" width="76.6%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>

        <div class="pl-10 py-10 flex flex-col justify-start">
            <p>Name</p>
            <p class="pb-3">John Smith</p>

            <p>Phone</p>
            <p class="pb-3 text-indigo-500">123-456-789</p>

            <p>Mobile Phone</p>
            <p class="pb-3 text-indigo-500">789456123</p>

            <p>Email</p>
            <p class="pb-5 text-indigo-500">lukas.bujdos@gmail.com</p>

            <div>
                <a href="#" class="bg-indigo-500 text-white border-none rounded px-4 py-2 hover:bg-indigo-400">
                    Request Details
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Enquiry -->
<div class="px-20 py-8">
    <div class="flex justify-between border-b border-blue-200 pb-5">
        <h2 class="text-2xl">Enquiry</h2>
        <h2 class="text-2xl pr-16">Booking Terms</h2>
    </div>

    <div class="py-10 flex flex-wrap">
        <div class="w-4/5">
            <form action="/packageaction" method="POST" id="request">
                @csrf
                <div class="flex flex-wrap">
                    <div class="w-1/2 pr-10 pb-10">
                        <fieldset class="flex pr-10">
                            <input name="name" type="text" class="form-control flex-grow" id="name" placeholder="Name" required="">
                        </fieldset>
                    </div>

                    <div class="w-1/2">
                        <fieldset class="flex pr-10">
                            <input name="email" type="email" class="form-control flex-grow" id="email" placeholder="Email" required="">
                        </fieldset>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-1/2 pr-10 pb-10">
                        <fieldset class="flex pr-10">
                            <input name="surname" type="text" class="form-control flex-grow" id="surname" placeholder="Surname" required="">
                        </fieldset>
                    </div>


                    <div class="w-1/2">
                        <fieldset class="flex pr-10">
                            <input name="date1" type="date" class="form-control flex-grow" id="date1" placeholder="From 16.06.2020" required="">
                        </fieldset>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-1/2 pr-10 pb-10">
                        <fieldset class="flex pr-10">
                            <input name="phone" type="text" class="form-control flex-grow" id="phone" placeholder="Phone" required="">
                        </fieldset>
                    </div>

                    <div class="w-1/2">
                        <fieldset class="flex pr-10">
                            <input name="date2" type="date" class="form-control flex-grow" id="date2" placeholder="To 16.06.2020" required="">
                        </fieldset>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full pr-10">
                        <fieldset class="flex">
                            <textarea name="message" rows="6" class="form-control flex-grow" id="message" placeholder="  Notes" required=""></textarea>
                        </fieldset>
                    </div>
                </div>

                <div class="pt-10">
                    <fieldset>
                        <button type="submit" id="form-submit" class="bg-indigo-500 text-white border-none rounded px-4 py-2 hover:bg-indigo-600">Send Request</button>
                    </fieldset>
                </div>
            </form>
        </div>
        <div class="w-1/5">
            <p class="text-justify">Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a
                adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. Mauris tincidunt sollicitudin mi eu congue. Suspendisse tincidunt
                cursus porttitor. Fusce pharetra lorem vel dolor imperdiet malesuada. Ut porttitor gravida quam, eu alique.
            </p>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="px-20 pt-10">
    <div class="flex justify-center border-t border-blue-200 pt-16 py-16">
        <p>Copyright © 2020 - <a href="#">Lukas Bujdos</a></p>
    </div>
</footer>

<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
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
</div>

<script>
    /* When the user clicks on the button,
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
