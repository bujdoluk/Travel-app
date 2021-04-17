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

<!-- Background Image -->
<section class="relative">
    <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/heading-2-1920x500.jpg" alt="Image" class="pt-20 h-full w-full opacity-50 relative">
    <p class="absolute inset-24 sm:inset-36 md:inset-44 lg:inset-56 text-center text-indigo-500 font-bold text-2xl sm:text-4xl md:text-6xl">Lorem ipsum dolor</p>
</section>

<!-- Content -->
<section class="container mx-auto">
    <div class="py-4 sm:py-10 px-8 sm:px-20 flex flex-wrap">
        <h2 class="text-3xl font-bold">{{$blog->title}}</h2>
        <div class="w-full h-full py-4 sm:py-16 flex flex-col align-middle">
            <img src="/{{$blog->img}}" alt="Image">
            <p class="text-center text-2xl pt-6">{{$blog->date}} | {{$blog->number}}</p>
        </div>
        <div class="w-full sm:w-3/4 sm:pr-10">
            <p class="py-8 text-justify sm:text-justify">{{$blog->content}}</p>
            <p class="pb-6 text-justify sm:text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequatur, magnam. Dolorum vitae a vel quisquam.
                Fuga quia suscipit id veritatis sint earum impedit corporis quidem eum consectetur ipsam ex sequi ad, distinctio
                enim tenetur eveniet eligendi. Laborum, sapiente, magnam.
            </p>
            <h2 class="font-bold text-lg pb-6 text-justify sm:text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, modi.</h2>
            <p class="pb-6 text-justify sm:text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia in adipisci. Corporis rem beatae
                cupiditate neque consequuntur necessitatibus expedita laudantium temporibus quam ex quidem, aut non blanditiis
                soluta deserunt dolores mollitia repudiandae voluptatibus perspiciatis dolor quos distinctio! Atque, magnam.
            </p>
            <p class="pb-6 text-justify sm:text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt dolore ducimus, ad itaque reprehenderit
                repellat dignissimos, qui velit dolores voluptas.
            </p>
        </div>
        <div class="w-full sm:w-1/4">
            <h2 class="py-8 font-bold text-2xl">Lorem ipsum dolor sit amet.</h2>
            <p class="pb-6 text-justify sm:text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.
            </p>
            <p class="text-justify sm:text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minus?
            </p>
        </div>
    </div>
    <div class="w-full h-full px-8 sm:px-20 pb-4 sm:pb-16">
        <img src="https://raw.githubusercontent.com/bujdoluk/Travel-website/master/public/images/blog-image-fullscren-1-1920x700.jpg" alt="Image">
    </div>
    <div class="container mx-auto px-8 sm:px-20 flex flex-row justify-end text-lg pb-10">
       by&nbsp; <strong> {{$blog->fullname}}</strong>
    </div>
    <div class="px-8 sm:px-20">
        <div class="flex justify-between border-b border-blue-200 pb-5">
            <h2 class="text-2xl">Leave a Comment</h2>
        </div>
    </div>

    <div class="py-10 flex flex-wrap px-8 sm:px-20">
        <div class="w-full xl:w-3/5 sm:w-full">
            <form action="/blogsaction" method="POST" id="comment">
                @csrf
                <div class="w-full pb-10">
                    <fieldset class="flex">
                        <input type="text" name="fullname" class="form-control flex-grow rounded" id="fullname" placeholder=" Full Name" required=" ">
                    </fieldset>
                </div>

                <div class="w-full">
                    <fieldset class="flex pb-10">
                        <input type="email" name="email" class="form-control flex-grow rounded" id="email" placeholder=" Email" required=" ">
                    </fieldset>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full">
                        <fieldset class="flex">
                            <textarea name="message" rows="6" class="form-control flex-grow rounded" id="message" placeholder="  Your Messages" required=""></textarea>
                        </fieldset>
                    </div>
                </div>

                <div class="sm:pt-10 py-10">
                    <fieldset>
                        <button type="submit" id="form-submit" class="bg-indigo-500 text-white border-none rounded px-4 py-2 hover:bg-indigo-400">Submit</button>
                    </fieldset>
                </div>
            </form>
        </div>
        <div class="xl:w-2/5 xl:pl-10 xl:pt-0 sm:w-full sm:pl-0 sm:pt-8">
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.
                Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.
            </p>

            <div class="flex flex-wrap items-center pt-6 justify-start gap-3">
                <a href="www.facebook.com">
                    <svg class="w-12 h-12 p-1 bg-gray-300 hover:bg-indigo-500 fill-current text-gray-600 hover:text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"/></svg>
                </a>
                <a href="www.twitter.com">
                    <svg class="w-12 h-12 p-1 bg-gray-300 hover:bg-indigo-500 fill-current text-gray-600 hover:text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30"><path d="M11.92 24.94A12.76 12.76 0 0 0 24.76 12.1v-.59A9.4 9.4 0 0 0 27 9.18a9.31 9.31 0 0 1-2.59.71a4.56 4.56 0 0 0 2-2.5a8.89 8.89 0 0 1-2.86 1.1a4.52 4.52 0 0 0-7.7 4.11a12.79 12.79 0 0 1-9.3-4.71a4.51 4.51 0 0 0 1.4 6a4.47 4.47 0 0 1-2-.56v.05a4.53 4.53 0 0 0 3.55 4.45a4.53 4.53 0 0 1-2 .08A4.51 4.51 0 0 0 11.68 21a9.05 9.05 0 0 1-5.61 2A9.77 9.77 0 0 1 5 22.91a12.77 12.77 0 0 0 6.92 2"/></svg>
                </a>
                <a href="www.linkedin.com">
                    <svg class="w-12 h-12 p-1 bg-gray-300 hover:bg-indigo-500 fill-current text-gray-600 hover:text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="4.983" cy="5.009" r="2.188"/><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118c1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783c-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"/></svg>
                </a>
                <a href="www.behance.com">
                    <svg class="w-12 h-12 p-1 bg-gray-300 hover:bg-indigo-500 fill-current text-gray-600 hover:text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="24" height="24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M7.803 5.731c.589 0 1.119.051 1.605.155c.483.103.895.273 1.243.508c.343.235.611.547.804.939c.187.387.28.871.28 1.443c0 .62-.14 1.138-.421 1.551c-.283.414-.7.753-1.256 1.015c.757.219 1.318.602 1.69 1.146c.374.549.557 1.206.557 1.976c0 .625-.119 1.162-.358 1.613a3.11 3.11 0 0 1-.974 1.114a4.315 4.315 0 0 1-1.399.64a6.287 6.287 0 0 1-1.609.206H2V5.731h5.803zm-.351 4.972c.48 0 .878-.114 1.192-.345c.312-.228.463-.604.463-1.119c0-.286-.051-.522-.151-.707a1.114 1.114 0 0 0-.417-.428a1.683 1.683 0 0 0-.597-.215a3.609 3.609 0 0 0-.697-.061H4.71v2.875h2.742zm.151 5.239c.267 0 .521-.023.76-.077c.241-.052.455-.136.637-.261c.182-.12.332-.283.44-.491c.109-.206.162-.475.162-.798c0-.634-.179-1.085-.533-1.358c-.355-.27-.831-.404-1.414-.404H4.71v3.39h2.893zm8.565-.041c.367.358.896.538 1.584.538c.493 0 .919-.125 1.278-.373c.354-.249.57-.515.653-.79h2.155c-.346 1.072-.871 1.838-1.589 2.299c-.709.463-1.572.693-2.58.693c-.702 0-1.334-.113-1.9-.337a4.033 4.033 0 0 1-1.439-.958a4.37 4.37 0 0 1-.905-1.485a5.433 5.433 0 0 1-.32-1.899c0-.666.111-1.289.329-1.864a4.376 4.376 0 0 1 .934-1.493c.405-.42.885-.751 1.444-.994a4.634 4.634 0 0 1 1.858-.362c.754 0 1.413.146 1.979.44a3.967 3.967 0 0 1 1.39 1.182c.363.493.622 1.058.783 1.691c.161.632.217 1.292.171 1.983h-6.431c.001.704.238 1.371.606 1.729zm2.812-4.681c-.291-.322-.783-.496-1.385-.496c-.391 0-.714.065-.974.199a1.97 1.97 0 0 0-.62.491a1.772 1.772 0 0 0-.328.628a2.82 2.82 0 0 0-.111.587h3.982c-.058-.624-.272-1.085-.564-1.409zm-3.918-4.663h4.989v1.215h-4.989z"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="px-8 sm:px-20 pt-20">
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
