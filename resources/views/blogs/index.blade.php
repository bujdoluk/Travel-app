
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
    <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/heading-2-1920x500.jpg" alt="Image" class="h-full w-full opacity-50 relative">
    <p class="absolute inset-36 text-center text-indigo-500 font-bold text-6xl">Blog</p>
</section>

<section class="container mx-auto pt-40 px-40">
    <div class="text-center">
        @if(session('comment'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('comment')}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @endif
    </div>
</section>

<section class="container mx-auto px-20 py-20">

    <div class="flex flex-wrap items-start">
        <div class="w-2/3 sm:w-full xl:w-2/3">
            <!-- Blog Posts -->
            <div class="xl:grid xl:grid-cols-2 sm:grid sm:grid-cols-1 sm:gap-0 xl:gap-8 w-full">

                <!-- Blog -->
                @foreach($blogs as $blog)
                    <div class="w-full">
                        <a href="{{ route('blogs.show', $blog->slug) }}">
                            <img class="sm:w-full xl:w-full" src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/blog-1-370x270.jpg" alt="Blog 1">
                            <h2 class="px-10 py-8 text-center text-lg text-indigo-500 font-bold">{{$blog->title}}</h2>
                        </a>

                        <div>
                            <p class="text-center pb-6">{{$blog->fullname}} | {{$blog->date}} | {{$blog->number}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="px-20">
                    {{ $blogs->onEachSide(6)->links() }}
                </div>
            </div>
        </div>
        <!-- Search -->
        <div class="grid grid-cols-1 xl:w-1/3 sm:w-full pl-10">
            <h2 class="text-2xl font-medium pb-6">Blog Search</h2>
            <div>
                <div class="flex flex-row pb-5">
                    <div class="pr-5">
                        <fieldset>
                            <input type="text" class="rounded" name="search" id="search" placeholder=" Search" required=" ">
                        </fieldset>
                    </div>
                    <div class="pt-2">
                        <a href="/more-aboutus" class="bg-indigo-500 text-white border-none rounded px-4 py-2 hover:bg-indigo-600">
                            Go
                        </a>
                    </div>
                </div>
                <h2 class="font-medium text-2xl pb-4">Lorem ipsum dolor sit amet</h2>
                <p class="text-indigo-500">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-indigo-500">Et animi voluptatem, assumenda enim, consectetur quaerat!</p>
                <p class="text-indigo-500">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="px-20 pt-12">
    <div class="flex justify-center border-t border-blue-200 pt-16 py-16">
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
    /*  Pagination */
    window.addEventListener('DOMContentLoaded',
        () => {
            const pageItems = document.querySelectorAll('.page-item');
            const pageControls = document.querySelectorAll('.page-control');
            let activeIdx = 0;
            makeActive(pageItems[activeIdx]);

            pageItems.forEach(el => {
                el.addEventListener('click', (event) => {
                    makeInactive(pageItems[activeIdx]);
                    activeIdx = Number(event.target.dataset.index);
                    makeActive(pageItems[activeIdx]);
                })
            })

            pageControls.forEach(el => {
                el.addEventListener('click', (event) => {
                    const diff = el.dataset.action === 'plus'? +1 : -1;
                    const newIdx = activeIdx + diff;

                    if((newIdx >= pageItems.length) || (newIdx < 0)) {
                        return;
                    }

                    makeInactive(pageItems[activeIdx]);
                    makeActive(pageItems[newIdx]);
                    activeIdx = newIdx;
                })
            })
        })

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
