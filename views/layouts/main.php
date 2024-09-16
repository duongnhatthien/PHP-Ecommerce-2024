<!doctype html>
<html class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/countdown.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    .divTong {
        width: 100%;
        height: fit-content;
    }
    </style>
</head>

<body class="h-full w-full overlayAll">
    <div class="divTong" style="filter:blur(1)">
        <div class="timesale w-full flex flex-wrap justify-evenly items-center">
            <div class=" delivery_event text-white">
                Free delivery & 40%
                Discount for
                next 3 orders! Place your
                1st order
                in</div>
            <div class="countdown text-white">
                <span>Until the end of the sale</span>
                <div id="days">00</div><span> days</span>
                <div id="hours">00</div> <span>hours</span>
                <div id="minutes">00</div> <span>minutes</span>
                <div id="seconds">00</div> <span>sec.</span>
            </div>
        </div>


        <nav class="hidden lg:inline bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-0">
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="infor text-sm font-medium flex flex-col p-4 md:p-0 mt-4 sm:ml-4 md:ml-5 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                                aria-current="page">About us</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">My
                                account</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Wishlist</a>
                        </li>
                        <li style="border-left: 1px solid grey;">
                            <a href="#"
                                class="mx-7 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">We
                                deliver to you every from <span style="color:orange">7:00 to 23:00</span></a>
                        </li>

                    </ul>
                </div>
                <nav class="bg-white border-gray-200 dark:bg-gray-900">
                    <div class="flex flex-wrap justify-evenly items-center mx-auto max-w-screen-xl p-3">
                        <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            <ul
                                class="infor text-sm font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                                        aria-current="page" id="dropdownHoverButton"
                                        data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">English <i style="color:#634c9f"
                                            class="fa-solid fa-chevron-down"></i>


                                    </a>
                                    <div id="dropdownHover" style="width: 90px;"
                                        class="w-1/2 flex flex-col items-center justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownHoverButton">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Spanish</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">German</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                                        aria-current="page" id="dropdownHoverButton1"
                                        data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">USD <i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <div id="dropdownHover1" style="width: 90px;"
                                        class="flex items-center justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownHoverButton1">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">USD</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">INR</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">GBP</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Order
                                        Tracking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
        <hr>

        <!-- Navbar section start -->
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between lg:justify-evenly items-center p-4">
                <div class="flex lg:hidden text-center">
                    <button
                        class="text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">
                        <i style="font-size: 160%;" class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="flex items-center sm:w-1/4 md:w-1/4 lg:w-1/6">
                    <img style="width: 100%;height:100%;object-fit: contain;"
                        src="https://klbtheme.com/grogin/wp-content/uploads/2023/11/grogin-logo-dark.png" alt="Logo">
                </div>
                <div class="hidden lg:flex delivdivoAll">
                    <button>
                        <i class="fa-solid fa-location-dot" style="font-size:160%"></i>
                    </button>

                </div>
                <div class="hidden lg:flex">
                    <p style="font-size:12px" class="text-gray-500 dark:text-white">
                        <span style="color:rgb(199, 199, 199)">Deliver to </span><br>all
                    </p>
                </div>
                <div class="container hidden lg:flex divInput h-10" style="width: 55%;">
                    <input id="inputField" type="text" style="width: 100%;height: 100%;padding:20px 20px"
                        placeholder="Search for products,categories or brands...">
                    <span class="search-icon"><i style="font-size: 140%;"
                            class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="flex items-center justify-evenly space-x-6 rtl:space-x-reverse ml-5">
                    <a href="tel:5541251234"
                        class="hidden lg:flex text-sm  text-gray-500 dark:text-white hover:underline"><i
                            style="font-size: 160%;" class="fa-regular fa-user"></i></a>
                    <a style="margin-left: 10%;" href="/login" style="color:rgb(199, 199, 199)"
                        class="hidden lg:block text-sm">Signin
                        </br><span style="color:black">Account</span></a>
                    <button type="button" style="margin-left: 4px;"
                        class="relative hidden lg:inline-flex items-center p-1.5 ml-1 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href="/#"><i class="fa-regular fa-heart" style="font-size: 160%;"></i></a>
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                            0</div>
                    </button>
                    <button type="button" style="margin-left: 8px;"
                        class="relative inline-flex items-center p-1.5 ml-1 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href="/#"><i class="fa-solid fa-cart-shopping" style="font-size: 160%;"></i></a>

                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                            0</div>
                    </button>

                </div>
            </div>
        </nav>





        <!-- drawer init and show -->


        <!-- drawer component -->
        <div id="drawer-navigation"
            class="fixed top-0 left-0 z-40 w-full lg:w-1/4 h-screen overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label"
                class="mt-3 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                <div class="w-1/4 lg:w-1/2 flex justify-center space-x-3 rtl:space-x-reverse">
                    <img style="width:100%;height:100%;object-fit: contain;"
                        src="https://klbtheme.com/grogin/wp-content/uploads/2023/11/grogin-logo-dark.png" alt="Logo">
                </div>
            </h5>

            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-gray-400 bg-gray hover:bg-gray-100 hover:text-gray-900 rounded-xl text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div class="py-4 overflow-y-auto">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            Your location
                            <div class="delivdivoAll" style="margin-left:10px">
                                <button>
                                    <i class="fa-solid fa-location-dot" style="font-size:100%"></i>
                                </button>
                            </div>
                            <div style="margin-left: 14px;">
                                <p class="text-sm text-gray-500 dark:text-white">
                                    <span style="color:rgb(199, 199, 199)">Deliver to </span><br>all
                                </p>
                            </div>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex justify-between items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                            <i id="toggle5" style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div id="divScroll5" style="max-width:100%">
                            <ul class="flex flex-col ml-8">
                                <li class="flex justify-between items-center">
                                    <span>Shop Lists</span>

                                </li>

                                <li class="flex justify-between items-center"><span>Shop Default
                                    </span>

                                </li>
                                <li class="flex justify-between items-center"><span>Shop Right Sidebar
                                    </span>
                                </li>
                                <li class="flex justify-between items-center"><span>Shop Wide
                                    </span>
                                </li>
                                <li class="flex justify-between items-center"><span>Shop Area
                                    </span>
                                </li>
                                <li class="flex justify-between items-center"><span>List Left Sidebar
                                    </span>
                                </li>
                                <li class="flex justify-between items-center"><span>Load More Button
                                    </span>
                                </li>
                                <li class="flex justify-between items-center"><span>Infinite Scrolling
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex justify-between items-center p-1.5 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i style="color:grey;font-size:120%" class="fa-solid fa-shop"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Shop</span>
                            <i id="toggle" style="color:#634c9f" class="fa-solid fa-chevron-down">
                            </i>
                        </a>
                        <div id="divScroll" style="max-width:99%">
                            <ul class="flex flex-col ml-8">
                                <li class="flex justify-between items-center">
                                    <span>Shop Lists</span>
                                    <span>
                                        <i id="toggle1" style="color:#634c9f" class="fa-solid fa-chevron-down">
                                        </i>
                                    </span>
                                </li>
                                <div id="divScroll1" style="max-width:100%">
                                    <ul class="flex flex-col ml-8">
                                        <li class="flex justify-between items-center">
                                            <span>Shop Lists</span>
                                            <span>
                                                <i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>

                                        <li class="flex justify-between items-center"><span>Shop Default
                                            </span>
                                            <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Right Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Wide
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Area
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>List Left Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Load More Button
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Infinite Scrolling
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <li id="toggle2" class="flex justify-between items-center"><span>Product Detail</span>
                                    <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                    </span>
                                </li>
                                <div id="divScroll2" style="max-width:100%">
                                    <ul class="flex flex-col ml-8">
                                        <li class="flex justify-between items-center">
                                            <span>Shop Lists</span>
                                            <span>
                                                <i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>

                                        <li class="flex justify-between items-center"><span>Shop Default
                                            </span>
                                            <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Right Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Wide
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Area
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>List Left Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Load More Button
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Infinite Scrolling
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <li class="flex justify-between items-center"><span>Shop Pages</span> <span><i
                                            id="toggle3" style="color:#634c9f" class="fa-solid fa-chevron-down">
                                        </i>
                                    </span>
                                </li>
                                <div id="divScroll3" style="max-width:100%">
                                    <ul class="flex flex-col ml-8">
                                        <li class="flex justify-between items-center">
                                            <span>Shop Lists</span>
                                            <span>
                                                <i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>

                                        <li class="flex justify-between items-center"><span>Shop Default
                                            </span>
                                            <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Right Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Wide
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Shop Area
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>List Left Sidebar
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Load More Button
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Infinite Scrolling
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <li class="flex justify-between items-center"><span>Shop Layout</span> <span><i
                                            id="toggle4" style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                    </span>
                                </li>
                                <div id="divScroll4" style="max-width:100%">
                                    <ul class="flex flex-col ml-8">
                                        <li class="flex justify-between items-center">
                                            <span>Shop Lists</span>
                                            <span>
                                                <i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>

                                        <li class="flex justify-between items-center"><span>Cart
                                            </span>
                                            <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Checkout
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down">
                                                </i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>My account
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Wishlist
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>

                                        <li class="flex justify-between items-center"><span>Order Tracking
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Feature Products
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                        <li class="flex justify-between items-center"><span>Best Selling Products
                                            </span> <span><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i style="color:grey;font-size:180%" class="fa-brands fa-apple"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Fruits & Vegetables</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i style="color:grey;font-size:180%" class="fa-solid fa-mug-hot"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Beverages</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i style="color:grey;font-size:180%" class="fa-solid fa-blog"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Blog</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    <hr>

                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">User</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path
                                    d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path
                                    d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex flex-col p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <div style="color:gray" class="flex ms-3 whitespace-nowrap">GROGIN HELPERS</div>
                            <ul style="list-style: none;margin-left: 10px;margin-top:15px;max-width: 100px;">
                                <li>Privacy Policy</li>
                                <li>Order Tracking</li>
                                <li>About Us</li>
                                <li>Contact</li>
                            </ul>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="flex flex-col p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <div style="color:gray" class="flex ms-3 whitespace-nowrap">CONTACT DETAILS</div>
                            <div class="flex flex-col"
                                style="width:100%;list-style: none;margin-left: 10px;margin-top:15px;max-width: 98%;">
                                <div class="flex flex-row">
                                    <i style="font-size: 130%;" class="mt-1 fa-solid fa-phone"></i>
                                    <ul class="flex flex-col w-full ms-2">
                                        <li class="text-lg">555-555-5555</li>
                                        <li style="color:gray">You can call anytime from 9 am to 6 pm.</li>
                                    </ul>
                                </div>
                                <div class="flex flex-row">
                                    <i style="font-size: 130%;" class="mt-1 fa-solid fa-paper-plane"></i>
                                    <ul class="flex flex-col text-lg w-full ms-2">
                                        <li>example@example.com</li>
                                        <li style="color:gray">We will glady assist you in the short time.</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Navbar section end -->
        <div class="container"> {{content}} </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/countdown.js"></script>
<script src="/js/main.js"></script>

</html>