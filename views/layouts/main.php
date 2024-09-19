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
    * {
        box-sizing: border-box;
        margin: auto;
    }

    .divTong {
        width: 95%;
        height: fit-content;
    }

    input {
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        z-index: 10;
        /* Make sure the input is on top */
        position: relative;
    }

    .overlay {
        position: fixed !important;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        z-index: 5;
        display: none;
    }

    .Sidebar {
        position: relative;
        z-index: 2;
    }

    .overlay2 {
        position: fixed !important;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s;
        visibility: hidden;
        z-index: 1;
    }

    .Sidebar {
        background: white;
        /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); */
    }

    input:focus~.overlay {
        display: block;
    }

    .input-container {
        position: relative;
    }
    </style>
</head>

<body class="h-full overlayAll">
    <div
        class="timesale h-20 sm:h-20 md:h-20 lg:h-14 w-full flex flex-col lg:flex-row flex-wrap justify-evenly items-center">
        <div class="sm:mb-0 md:mb-0 lg:mt-2 delivery_event text-white lg:m-auto sm:m-auto">
            Free delivery & 40%
            Discount for
            next 3 orders! Place your
            1st order
            in</div>
        <div class="countdown text-white lg:m-auto sm:mt-2 md:mt-2 ">
            <span>Until the end of the sale</span>
            <div id="days">00</div><span> days</span>
            <div id="hours">00</div> <span>hours</span>
            <div id="minutes">00</div> <span>minutes</span>
            <div id="seconds">00</div> <span>sec.</span>
        </div>
    </div>
    <div class="divTong">
        <nav class="hidden lg:inline bg-white flex flex-row items-center">
            <div class="w-full flex flex-wrap items-center justify-between p-0">
                <div style="margin:0" class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul style="margin:0"
                        class="infor text-sm font-medium flex flex-row p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
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
                <nav style="margin:0" class="bg-white border-gray-200 dark:bg-gray-900">
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
                                        class="z-20 w-1/2 flex flex-col items-center justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
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
        <nav class="bg-white border-gray-200 dark:bg-gray-900 w-full">
            <div class="w-full flex flex-wrap justify-between lg:justify-evenly lg:items-center pt-3 lg:pt-4 lg:pb-4">
                <div class="flex ml-0 lg:hidden text-center">
                    <button
                        class="text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5"
                        type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">
                        <i style="font-size: 160%;" class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="ms-2 sm:w-1/3 md:w-1/3 lg:w-1/6">
                    <img style="object-fit: cover;"
                        src="https://klbtheme.com/grogin/wp-content/uploads/2023/11/grogin-logo-dark.png" alt="Logo">
                </div>
                <div class="relative lg:hidden inline-flex items-center p-1.5 ml-1 m-0 text-sm font-medium ">
                    <a href=" /#"><i class="fa-solid fa-cart-shopping" class="ms-0" style="font-size: 160%;"></i></a>
                    <div
                        class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-0 -end-1 dark:border-gray-900">
                        0</div>
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
                <div class="container hidden lg:flex divInput h-11" style="width: 55%;position:relative">
                    <input id="inputField" type="text"
                        style="width: 100%;height: 100%;padding:20px 20px;border:none;outline-color: #634c9f;"
                        placeholder="Search for products,categories or brands...">
                    <span class="search-icon" style="z-index:12"><i style="font-size: 140%;"
                            class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="flex lg:items-center w-full lg:w-1/6 justify-evenly space-x-6 ml-5">
                    <a class="hidden lg:flex" href="tel:5541251234" id="dropdownUserAvatarButton"
                        data-dropdown-toggle="dropdownAvatar"
                        class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        type="button" class="hidden lg:flex text-sm  text-gray-500 dark:text-white hover:underline"><i
                            style="font-size: 160%;" class="fa-regular fa-user"></i></a>
                    <div id="dropdownAvatar"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Phạm Trị</div>
                            <div class="font-medium truncate">phamminhtri26102003@gmail.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                    <a href="/login" style="color:rgb(199, 199, 199)" class="hidden lg:block text-sm">Signin
                        </br><span style="color:black">Account</span></a>
                    <button type="button" style="margin-left: 4px;"
                        class="relative hidden lg:inline-flex items-center p-1.5 ml-1 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href="/#"><i class="fa-regular fa-heart" style="font-size: 160%;"></i></a>
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                            0</div>
                    </button>

                    <div
                        class="relative hidden lg:inline-flex items-center p-1.5 ml-1 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href=" /#"><i class="fa-solid fa-cart-shopping" class="ms-0"
                                style="font-size: 160%;"></i></a>
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                            0</div>
                    </div>
                </div>

        </nav>
        <!--sidebar pc-->
        <div class="flex justify-between w-full">
            <div class="AddAnimate ManageSB Sidebar hidden lg:block p-3 m-0"
                style="border:0.5px solid rgb(224, 224, 224);border-radius:10px;z-index:12;width:30%;height: fit-content;">
                <ul style="max-width: 100%;">
                    <li>
                        <a class="flex justify-between items-center p-2 text-gray-900 rounded-lg group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">All categories</span>
                            <i id="toggle6" style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                        </a>
                    </li>
                    <hr>
                    <div id="divScroll6" class="hidden">
                        <li>
                            <a href="#" id="dropdownRightEndButton" data-dropdown-toggle="dropdownRightEnd"
                                data-dropdown-placement="right-end" data-dropdown-trigger="hover"
                                class="flex justify-between items-center p-1.5 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:170%" class="fa-brands fa-apple"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Fruits & Vegetables</span>

                                <i style="color:#634c9f" class="fa-solid fa-chevron-right">
                                </i>
                            </a>
                            <div id="dropdownRightEnd" class="hidden">
                                <ul class="bg-white rounded-lg shadow w-full h-1/4 ml-0.5" style="border-radius: 10px;"
                                    aria-labelledby="dropdownRightEndButton" class="bg-white w-full h-1/2">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cuts
                                            & Sprouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Exotic Fruits & Veggies
                                            Fresh Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Fresh Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Herbs & Seasonings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Packaged Produce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Party Trays
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <hr>
                        <li>
                            <a href="#" id="dropdownRightEndButton1" data-dropdown-toggle="dropdownRightEnd1"
                                data-dropdown-placement="right-end" data-dropdown-trigger="hover"
                                class="flex justify-between items-center p-1.5 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-drumstick-bite"></i>

                                <span class="flex-1 ms-3 whitespace-nowrap">Meats & Seafoods</span>

                                <i style="color:#634c9f" class="fa-solid fa-chevron-right">
                                </i>
                            </a>
                            <div id="dropdownRightEnd1" class="hidden ">
                                <ul style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);"
                                    class="bg-white rounded-lg shadow w-full h-1/4 ml-0.5" style="border-radius: 10px;"
                                    aria-labelledby="dropdownRightEndButton1">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cuts
                                            & Sprouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Exotic Fruits & Veggies
                                            Fresh Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Fresh Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Herbs & Seasonings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Packaged Produce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Party Trays
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        <li>
                            <a href="#" id="dropdownRightEndButton2" data-dropdown-toggle="dropdownRightEnd2"
                                data-dropdown-placement="right-end" data-dropdown-trigger="hover"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-mug-hot"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Breakfast & Dairy</span>

                                <i style="color:#634c9f" class="fa-solid fa-chevron-right"></i>
                            </a>
                            <div id="dropdownRightEnd2" class="hidden ">
                                <ul style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);"
                                    class="bg-white rounded-lg shadow w-full h-1/4 ml-0.5" style="border-radius: 10px;"
                                    aria-labelledby="dropdownRightEndButton2">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cuts
                                            & Sprouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Exotic Fruits & Veggies
                                            Fresh Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Fresh Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Herbs & Seasonings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Packaged Produce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Party Trays
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <a href="#" id="dropdownRightEndButton3" data-dropdown-toggle="dropdownRightEnd3"
                                data-dropdown-placement="right-end" data-dropdown-trigger="hover"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <i style="color:grey;font-size:130%" class="fa-solid fa-bread-slice"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Breads & Bakery</span>
                                <i style="color:#634c9f" class="fa-solid fa-chevron-right"></i>
                            </a>
                            <div id="dropdownRightEnd3" class="hidden">
                                <ul style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);"
                                    class="bg-white rounded-lg shadow w-full h-1/4 ml-0.5" style="border-radius: 10px;"
                                    aria-labelledby="dropdownRightEndButton3">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cuts
                                            & Sprouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Exotic Fruits & Veggies
                                            Fresh Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Fresh Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Herbs & Seasonings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Packaged Produce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Party Trays
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <a href="#" id="dropdownRightEndButton4" data-dropdown-toggle="dropdownRightEnd4"
                                data-dropdown-placement="right-end" data-dropdown-trigger="hover"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-martini-glass-citrus"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Beverages</span>
                                <i style="color:#634c9f" class="fa-solid fa-chevron-right"></i>
                            </a>
                            <div id="dropdownRightEnd4" class="hidden ">
                                <ul style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);"
                                    class="bg-white rounded-lg shadow w-full h-1/4 ml-0.5" style="border-radius: 10px;"
                                    aria-labelledby="dropdownRightEndButton4">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cuts
                                            & Sprouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Exotic Fruits & Veggies
                                            Fresh Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Fresh Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Herbs & Seasonings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Packaged Produce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                            Party Trays
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        </li>
                        <hr>

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-ice-cream"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Frozen Foods</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-cookie-bite"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Biscuits & Snacks</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-tree"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Grocery & Staples</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-house"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Household Needs</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-notes-medical"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Healthcare</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:130%" class="fa-solid fa-baby"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Baby & Pregnancy</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            <!--Carousel
        -->
            <div class="flex w-full flex-col mt-2 ml-0 lg:ml-8">
                <ul class="hidden w-full infor text-sm flex-row font-medium lg:flex items-center justify-between p-3">
                    <li class="m-0">
                        <a href=" #" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2"
                            data-dropdown-trigger="hover"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Home<i style="color:#634c9f;margin-left:5px"
                                class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover2" style="width: 160px;"
                            class="z-20 w-1/2 flex flex-col items-center justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton2">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Shop <i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover3" style="width:100%;max-width:100%;"
                            class="z-20 flex flex-row ml-10 items-center h-1/2 justify-between z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul
                                class="w-full flex flex-col items-center justify-evenly text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a style="font-size: 16px;color:#634c9f" href="#">Fruits & Vegetables
                        </a>
                    </li>
                    <li>
                        <a style="font-size: 16px;color:#634c9f" href="#">Blog

                        </a>
                    </li>
                    <li>
                        <a style="font-size: 16px;color:#634c9f" href="#">Contact
                        </a>
                    </li>
                    <li>
                        <a href="#" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton4" data-dropdown-toggle="dropdownHover4"
                            data-dropdown-trigger="hover"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Trending Products <i style="color:#634c9f"
                                class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover4" style="width:100%;"
                            class="z-20 w-1/2 flex flex-row items-center h-1/2 justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="flex flex-col items-center justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton4">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col items-center justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton4">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col items-center justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton4">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col items-center justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton4">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col items-center justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton4">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>

                        </div>
                    </li>
                    <li class="m-0">
                        <a href="#" style=" font-size: 16px;color:orangered"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton7" data-dropdown-toggle="dropdownHover7"
                            data-dropdown-trigger="hover"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Almost Finished <span
                                style="background-color:orangered;padding:3px;color:white;border-radius: 5px;">Sale</span>
                            <i style="color:orangered" class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover7" style="width:100%;"
                            class="z-20 w-1/2 h-1/2 flex flex-row items-center justify-evenly z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                            <ul class="flex flex-col justify-between items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton7">
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home
                                        6</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <hr>
                <div id="default-carousel" class="relative w-full mt-5" data-carousel="slide">
                    <div class="relative z-0 h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="http://localhost/images/carousel1.PNG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden z-0 duration-700 ease-in-out" data-carousel-item>
                            <img src="http://localhost/images/carousel2.PNG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden z-0 duration-700 ease-in-out" data-carousel-item>
                            <img src="http://localhost/images/carousel3.PNG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <div style="background-color: #634c9f;border-radius: 10px;padding:5px;transform: translateY(50%);"
                        class="bg-gray-300 absolute z-0 flex -translate-x-1/2 left-1/2 bottom-0 space-x-1 rtl:space-x-reverse">
                        <button type="button" class="indicator w-2 h-2 rounded-full bg-gray" aria-current="true"
                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="indicator w-2 h-2 rounded-full bg-gray" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="indicator w-2 h-2 rounded-full bg-gray" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>

                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/50">
                            <svg class="w-4 h-4" style="color:#634c9f" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/50">
                            <svg class="w-4 h-4" style="color:#634c9f" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <!--Sidebar điện thoại-->
            <!-- drawer component -->
            <div id="drawer-navigation"
                class="fixed top-0 left-0 z-40 w-full h-screen overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-navigation-label">
                <div class="flex flex-row items-center justify-between">
                    <h5 id="drawer-navigation-label"
                        class="mt-3 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                        <div class="w-full h-10 flex justify-center space-x-3 rtl:space-x-reverse">
                            <img style="width:100%;height:100%;object-fit: contain;"
                                src="https://klbtheme.com/grogin/wp-content/uploads/2023/11/grogin-logo-dark.png"
                                alt="Logo">
                        </div>
                    </h5>

                    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                        class="text-gray-400 bg-gray hover:bg-gray-100 hover:text-gray-900 rounded-xl text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg id="hover90deg" aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
                <div class="py-4 overflow-y-auto">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#"
                                class="flex m-0 items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                Your location
                                <div class="delivdivoAll m-0" style="margin-left:10px">
                                    <button>
                                        <i class="fa-solid fa-location-dot" style="font-size:100%"></i>
                                    </button>
                                </div>
                                <div style="margin-left: 14px;" class="m-0">
                                    <p class="text-sm text-gray-500 dark:text-white">
                                        all
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
                                <ul class="ml-8">
                                    <li class="text-small" style="color:gray">
                                        <span>Shop Lists</span>

                                    </li>

                                    <li class="text-small" style="color:gray"><span>Shop Default
                                        </span>

                                    </li>
                                    <li class="text-small" style="color:gray"><span>Shop Right Sidebar
                                        </span>
                                    </li>
                                    <li class="text-small" style="color:gray"><span>Shop Wide
                                        </span>
                                    </li>
                                    <li class="text-small" style="color:gray"><span>Shop Area
                                        </span>
                                    </li>
                                    <li class="text-small" style="color:gray"><span>List Left Sidebar
                                        </span>
                                    </li>
                                    <li class="text-small" style="color:gray"><span>Load More Button
                                        </span>
                                    </li>
                                    <li class="text-small" style="color:gray"><span>Infinite Scrolling
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="w-full flex justify-between p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:120%" class="fa-solid fa-shop"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Shop</span>
                                <i id="toggle" style="color:#634c9f" class="fa-solid fa-chevron-down">
                                </i>
                            </a>
                            <div id="divScroll" class="p-2" style="max-width:100%;color: gray;">
                                <ul class="flex flex-col m-0 w-full">
                                    <li class="flex justify-between m-0">
                                        <span class="m-0" style="margin-left:60px">Shop Lists</span>
                                        <span class="m-0">
                                            <i id="toggle1" style="color:#634c9f" class="fa-solid fa-chevron-down">
                                            </i>
                                        </span>
                                    </li>
                                    <div id="divScroll1" class="flex m-0" style="margin-left:100px">
                                        <ul class="m-0 w-full">
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Default
                                                </span>
                                                <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between m-0"><span
                                                    class="m-0">Shop Right
                                                    Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down">
                                                    </i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Wide
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Area
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">List Left Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Load More Button
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Infinite Scrolling
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <li id="toggle2" class="flex justify-between m-0"><span class="m-0"
                                            style="margin-left: 60px;">Product
                                            Detail</span>
                                        <span class="m-0"><i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>
                                        </span>
                                    </li>
                                    <div id="divScroll2" class="flex m-0" style="margin-left:100px">
                                        <ul class="m-0 w-full">
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Default
                                                </span>
                                                <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between m-0"><span
                                                    class="m-0">Shop Right
                                                    Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down">
                                                    </i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Wide
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Area
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">List Left Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Load More Button
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Infinite Scrolling
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <li class="flex justify-between m-0"><span class="m-0"
                                            style="margin-left: 60px;">Shop Pages</span> <span class="m-0"><i
                                                id="toggle3" style="color:#634c9f" class="fa-solid fa-chevron-down">
                                            </i>
                                        </span>
                                    </li>
                                    <div id="divScroll3" class="flex m-0" style="margin-left:100px">
                                        <ul class="m-0 w-full">
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Default
                                                </span>
                                                <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between m-0"><span
                                                    class="m-0">Shop Right
                                                    Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down">
                                                    </i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Wide
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Area
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">List Left Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Load More Button
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Infinite Scrolling
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <li class="flex justify-between m-0"><span class="m-0" style="margin-left:60px">Shop
                                            Layout</span> <span class="m-0"><i id="toggle4" style="color:#634c9f"
                                                class="fa-solid fa-chevron-down"></i>
                                        </span>
                                    </li>
                                    <div id="divScroll4" class="flex m-0" style="margin-left:100px">
                                        <ul class="m-0 w-full">
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Default
                                                </span>
                                                <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between m-0"><span
                                                    class="m-0">Shop Right
                                                    Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down">
                                                    </i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Wide
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Shop Area
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">List Left Sidebar
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Load More Button
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between"><span
                                                    class="m-0">Infinite Scrolling
                                                </span> <span class="m-0"><i style="color:#634c9f"
                                                        class="fa-solid fa-chevron-down"></i>
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
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 16">
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
                                    <div class="flex flex-row m-0">
                                        <i style="font-size: 130%;" class="m-0 mt-1 fa-solid fa-phone"></i>
                                        <ul class="w-full m-0 ms-2">
                                            <li class="text-lg">555-555-5555</li>
                                            <li style="color:gray" class="text-sm">You can call anytime from 9 am to 6
                                                pm.</li>
                                        </ul>
                                    </div>
                                    <div class="flex flex-row m-0">
                                        <i style="font-size: 130%;" class="m-0 mt-1 fa-solid fa-paper-plane"></i>
                                        <ul class="text-lg w-full m-0 ms-2">
                                            <li>example@example.com</li>
                                            <li style="color:gray" class="text-sm">We will glady assist you in the short
                                                time.</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Navbar section end -->

        </div>
        <div
            class="view1 flex mt-4 flex-col sm:flex-row md:flex-row lg:flex-row lg:items-center justify-between w-full">
            <div class="ms-0 left flex flex-col lg:flex-row w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                <div class="item1 m-0 flex flex-row items-center justify-between w-full lg:w-1/2">
                    <div class="left w-1/6 sm:w-1/4 md:w-1/4 lg:w-1/4">
                        <div class="">
                            <img src="http://localhost/images/image.PNG" class="w-full h-full" alt="">
                        </div>
                    </div>
                    <div class="right w-5/6 sm:w-3/4 md:w-3/4 lg:w-2/3 flex flex-col items-center justify-between ">
                        <div class="right1 w-full ms-0 font-bold">Payment only online
                        </div>
                        <div class="right w-full text-sm" style="color:gray"> Tasigförsamhet beteendedesign. Mobile
                            checkout. Ylig
                            kärrtorpa.</div>
                    </div>
                </div>
                <div class="item1 m-0 flex flex-row items-center justify-between w-full lg:w-1/2">
                    <div class="left w-1/6 sm:w-1/4 md:w-1/4 lg:w-1/4">
                        <div class="">
                            <img src="http://localhost/images/image1.PNG" class="w-full h-full" alt="">
                        </div>
                    </div>
                    <div class="rightw-5/6 sm:w-3/4 md:w-3/4 lg:w-2/3 flex flex-col items-center justify-between">
                        <div class="right1 w-full ms-0 font-bold">New stocks and sales</div>
                        <div class="right w-full text-sm" style="color:gray">
                            Tasigförsamhet beteendedesign. Mobile checkout. Ylig kärrtorpa.</div>
                    </div>
                </div>
            </div>
            <div class="ms-0 right flex flex-col lg:flex-row sm:w-1/2 md:w-1/2 lg:w-1/2">
                <div class="item1  m-0 flex flex-row items-center justify-between w-full lg:w-1/2">
                    <div class="left w-1/6 sm:w-1/4 md:w-1/4 lg:w-1/4">
                        <div class="">
                            <img src="http://localhost/images/image2.PNG" class="w-full h-full" alt="">

                        </div>
                    </div>
                    <div class="right w-5/6 sm:w-3/4 md:w-3/4 lg:w-2/3 flex flex-col items-center justify-between">
                        <div class="right1 w-full ms-0 font-bold">Quality assurance</div>
                        <div class="right w-full text-sm" style="color:gray">
                            Tasigförsamhet beteendedesign. Mobile checkout. Ylig kärrtorpa.</div>
                    </div>
                </div>
                <div class="item1  m-0 flex flex-row items-center justify-between w-full lg:w-1/2">
                    <div class="left w-1/6 sm:w-1/4 md:w-1/4 lg:w-1/4">
                        <div class="">
                            <img src="http://localhost/images/image3.PNG" class="w-full h-full" alt="">

                        </div>
                    </div>
                    <div class="right w-5/6 sm:w-3/4 md:w-3/4 lg:w-2/3 flex flex-col items-center justify-between">
                        <div class="right1 w-full ms-0 font-bold">Delivery from 1 hour</div>
                        <div class="right w-full text-sm" style="color:gray">
                            Tasigförsamhet beteendedesign. Mobile checkout. Ylig kärrtorpa.</div>
                    </div>
                </div>
            </div>

        </div>
        <br>

        <hr>
        <div class="content flex flex-row justify-between"> {{content}} </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/countdown.js"></script>
<script src="/js/main.js"></script>

</html>