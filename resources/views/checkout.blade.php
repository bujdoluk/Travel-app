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

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Tailwind Css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stripe -->
    <script src="https://js.stripe.com/v3"></script>

    <!-- Styles -->
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


        .StripeElement {
            background-color: white;
            padding: 16px 16px;
            border: 1px solid black;

        }

        .StripeElement--focus {
        // box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #card-errors {
            color: #fa755a;
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

    <!-- Checkout -->
    <section class="px-8 sm:px-20 md:px-40 lg:px-60 py-24 lg:py-40 w-full flex flex-wrap">
        <div class="w-full sm:w-3/5 sm:pr-16">
            <div class="flex justify-between border-b border-indigo-200 pb-5">
                <h2 class="text-2xl">Checkout</h2>
            </div>
            <h3 class="my-4 sm:my-8 text-xl">Billing Details</h3>
            <form action="{{ route('checkout.store') }}" id="payment-form" method="POST">
                @csrf
                <div class="w-full flex flex-col">
                    <label for="email" class="mt-3 sm:mt-6 py-1">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                    <label for="name" class="mt-4 sm:mt-10 py-1">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="mb-4 sm:mb-10" required>

                    <label for="address" class="py-1">Address</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="mb-4 sm:mb-10" required>
                </div>

                <div class="w-full flex flex-wrap">
                    <div class="w-1/2 flex flex-col pr-4">
                        <label for="city" class="py-1">City</label>
                        <input type="text" id="city" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="w-1/2 flex flex-col pl-4">
                        <label for="province" class="py-1">Province</label>
                        <input type="text" id="province" name="province" value=" {{ old('province') }}" required>
                    </div>

                    <div class="w-full flex flex-wrap mt-4 sm:mt-10">
                        <div class="w-1/2 flex flex-col pr-4">
                            <label for="phone" class="py-1">Phone</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="123-456-789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required>
                        </div>
                        <div class="w-1/2 flex flex-col pl-4">
                            <label for="postalcode" class="py-1">Postal Code</label>
                            <input type="text" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" placeholder="12345" pattern="[0-9]{5}" required>
                        </div>
                    </div>
                </div>
                <h3 class="my-8 text-xl">Payment Details</h3>
                <div class="w-full flex flex-col">
                    <label for="name_on_card" class="py-1">Name on Card</label>
                    <input type="text" id="name_on_card" name="name_on_card" value="{{ old('name_on_card') }}" class="mb-4 sm:mb-10" required>
                </div>
                <div class="form-group">
                    <label for="card-element" class="py-1">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- Inserted Stripe element -->
                    </div>

                    <!-- Errors -->
                    <div id="card-errors" role="alert">

                    </div>
                </div>

                <div class="block sm:hidden w-full mt-4 sm:w-2/5 sm:pl-5">
                    <div class="flex border-b border-indigo-200 pb-5">
                        <h2 class="text-2xl">Your Order</h2>
                    </div>
                    <div class="w-full flex cartItems">
                        <div class="cartRows w-full flex">
                            <div class="flex w-3/5 py-10">
                                <!-- product -->
                                <div class="w-24">
                                    <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-bold text-sm">Iphone 6S</span>
                                    <span class="text-red-500 text-xs">Apple</span>
                                    <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs remove">Remove</a>
                                </div>
                            </div>
                            <span class="flex w-1/5 items-center price">$9.99</span>
                            <div class="flex w-1/5 items-center">
                                <input class="mx-2 border text-center w-16 h-8 quantity" type="text" value="1">
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-indigo-200 pb-5"></div>

                    <div class="my-10">
                        <div class="flex flex-row justify-between py-2">
                            <p>Subtotal</p>
                            <p>$5454</p>
                        </div>
                        <div class="flex flex-row justify-between py-2">
                            <p>Tax 10%</p>
                            <p>$1212</p>
                        </div>

                        <div class="flex flex-row justify-between py-2 text-xl">
                            <p class="font-bold uppercase">Total</p>
                            <span class="font-bold total">$0</span>
                        </div>
                        <div class="flex border-b border-indigo-200 pb-5 hidden sm:block"></div>
                    </div>
                </div>

                <button id="complete-order" type="submit" class="w-full mt-10 bg-indigo-500 text-xl text-white border-none px-6 py-4 hover:bg-indigo-600">Complete Order</button>
            </form>
        </div>

        <!-- Your order -->
        <div class="hidden sm:block w-full sm:w-2/5 sm:pl-5">
            <div class="flex border-b border-indigo-200 pb-5">
                <h2 class="text-2xl">Your Order</h2>
            </div>
            <div class="w-full flex cartItems">
                <div class="cartRows w-full flex">
                    <div class="flex w-3/5 py-10">
                        <!-- product -->
                        <div class="w-24">
                            <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Iphone 6S</span>
                            <span class="text-red-500 text-xs">Apple</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs remove">Remove</a>
                        </div>
                    </div>
                    <span class="flex w-1/5 items-center price">$9.99</span>
                    <div class="flex w-1/5 items-center">
                        <input class="mx-2 border text-center w-16 h-8 quantity" type="number" value="1">
                    </div>
                </div>
            </div>

            <div class="flex border-b border-indigo-200 pb-5"></div>

            <div class="my-10">
                <div class="flex flex-row justify-between py-2">
                    <p>Subtotal</p>
                    <p>$5454</p>
                </div>
                <div class="flex flex-row justify-between py-2">
                    <p>Tax 10%</p>
                    <p>$1212</p>
                </div>

                <div class="flex flex-row justify-between py-2 text-xl">
                    <p class="font-bold uppercase">Total</p>
                    <span class="font-bold total">$0</span>
                </div>
                <div class="flex border-b border-indigo-200 pb-5 hidden sm:block"></div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="px-8 sm:px-20 pt-20 md:pt-40 sm:pt-8">
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
                    <img class="h-60" src="https://raw.githubusercontent.com/bujdoluk/travelapp/master/public/images/product-3-370x270.jpg" alt="Product">
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

    <!-- Checkout -->
    {{--<script>
        if (document.readyState == 'loading'){
            document.addEventListener('DOMContentLoaded', ready);
        } else {
            ready();
        }

        function ready() {
            let removeCartItem = document.getElementsByClassName('remove');
            for(let i = 0; i < removeCartItem.length; i++) {
                let remove = removeCartItem[i];
                remove.addEventListener('click', removeItem);
            }

            let quantityInputs = document.getElementsByClassName('quantity');
            for(let i = 0; i < quantityInputs.length; i++){
                let input = quantityInputs[i];
                input.addEventListener('change', quantityChanged);
            }
        }

        function removeItem(event) {
            let removeClicked = event.target;
            removeClicked.parentElement.parentElement.parentElement.remove();
            updateTotal();
        }

        function quantityChanged(event) {
            let input = event.target;
            if(isNaN(input.value) || input.value <= 0){
                input.value = 1;
            }
            updateTotal();
        }

        function updateTotal() {
            let cartContainer = document.getElementsByClassName('cartItems')[0];
            let cartRows = cartContainer.getElementsByClassName('cartRows');
            var total = 0;
            for(let i = 0; i < cartRows.length; i++) {
                let cartRow = cartRows[i];
                let priceElement = cartRow.getElementsByClassName('price')[0];
                let quantityElement = cartRow.getElementsByClassName('quantity')[0];
                let price = parseFloat(priceElement.innerText.replace('$', ''));
                let quantity = quantityElement.value;
                total = total + (price * quantity);
            }
            total = Math.round(total * 100) / 100;
            document.getElementsByClassName('total')[0].innerText = '$' + total;
        }
    </script>--}}

    <!-- Stripe -->
    <script>
        (function (){
            // Create a Stripe client
            var stripe = Stripe('pk_test_51ISifrIY6pk6kqsYNIIxRHYtbiqFlz1RVdtWFTyePU2yyWkCu8IhnHqqB6tjJuSaAJBizRpsRa9zKVPLMz3ZWfFP00r5cIh4XE');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                // Disable the submit button to prevent repeated clicks
                document.getElementById('complete-order').disabled = true;

                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('province').value,
                    address_zip: document.getElementById('postalcode').value
                }

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        // Enable the submit button
                        document.getElementById('complete-order').disabled = false;
                    } else {
                        // Send the token to your server
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }

        })();
    </script>

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
