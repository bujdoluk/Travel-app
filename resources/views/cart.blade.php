<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Agency Website</title>
    <meta name="author" content="Lukas Bujdos">

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
            opacity: 1;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .show {
            display: block;
        }

    </style>
</head>
<body class="antialiased tracking-normal overflow-x-hidden bg-gray-100">
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
                    <nav class="w-full h-full px-4">
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
                                <a href="/blogs" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
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
                                        <a href="{{ url('/dashboard') }}" class="text-gray-700 border-b-2 border-transparent
                    hover:border-indigo-400 py-3 px-0 block">Dashboard</a>
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

    <section class="bg-gray-100 px-60 pt-40 pb-10">
        <div class="flex shadow bg-white">
            <div class="w-3/4 z-10 px-10 py-10">
                <div class="flex justify-between border-b border-indigo-200 pb-8 font-medium text-2xl">
                    <h1>Shopping Cart</h1>
                    <h1>3 Items</h1>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Quantity</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Price</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5">
                        <!-- product 1 -->
                        <div class="w-24">
                            <img class="h-24" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-1-370x270.jpg" alt="Product 1">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Iphone 6S</span>
                            <span class="text-red-500 text-xs">Apple</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>

                        <input class="mx-2 border text-center w-8" type="text" value="1">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                    <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5"> <!-- product 2 -->
                        <div class="w-24">
                            <img class="h-24" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-2-370x270.jpg" alt="Product 2">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Xiaomi Mi 20000mAh</span>
                            <span class="text-red-500 text-xs">Xiaomi</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>

                        <input class="mx-2 border text-center w-8" type="text" value="1">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">$40.00</span>
                    <span class="text-center w-1/5 font-semibold text-sm">$40.00</span>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5"> <!-- product 3 -->
                        <div class="w-24">
                            <img class="h-24" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/product-3-370x270.jpg" alt="Product 3">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Airpods</span>
                            <span class="text-red-500 text-xs">Apple</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>
                        <input class="mx-2 border text-center w-8" type="text" value="1">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                        </svg>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">$150.00</span>
                    <span class="text-center w-1/5 font-semibold text-sm">$150.00</span>
                </div>
                <a href="/shop" class="flex font-semibold text-indigo-600 text-sm mt-10">

                    <svg class="fill-current mr-2 text-indigo-500 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="w-1/4 px-8 py-10 bg-gray-200">
                <h1 class="font-semibold text-2xl border-b border-indigo-200 pb-8">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Items 3</span>
                    <span class="font-semibold text-sm">590$</span>
                </div>
                <div>
                    <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                    <select class="block p-2 text-gray-600 w-full text-sm border-none rounded">
                        <option>Free shipping - $0.00</option>
                        <option>Standard shipping - $10.00</option>
                        <option>US shipping - $30.00</option>
                    </select>
                </div>
                <div class="py-10">
                    <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                    <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full border-none rounded">
                </div>
                <button class="bg-red-500 rounded hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>$600</span>
                    </div>
                    <a href="/checkout">
                        <button class="bg-indigo-500 rounded font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="px-20 pt-20 sm:pt-8">
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

    <script>
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
