<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/countdown.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    /* two slider */
    .range-slide {
        position: relative;
        height: 4px;
    }

    .slide {
        position: absolute;
        top: 0;
        height: 4px;
        background: #ccc;
        left: 9px;
        right: 9px;
    }

    .line {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 4px;
        background-color: black;
    }

    .thumb {
        position: absolute;
        z-index: 2;
        text-align: left;
        border: 1px solid black;
        background-color: black;
        border-radius: 50%;
        outline: none;
        top: -7px;
        height: 18px;
        width: 18px;
        margin-left: -9px;
    }

    .range-slide input {
        -webkit-appearance: none;
        appearance: none;
        position: absolute;
        pointer-events: none;
        z-index: 3;
        height: 3px;
        top: 0;
        width: 100%;
        opacity: 0;
        margin: 0;
    }

    input::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        pointer-events: all;
        border-radius: 50%;
        cursor: pointer;
        width: 18px;
        height: 18px;
    }

    .display {
        margin: 40px;
        width: 240px;
        display: flex;
        justify-content: space-between;
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
    <div class="divTong m-auto">
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
                                        class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
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
                                        class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
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
        <!-- Navbar section start -->
        <nav class="bg-white border-gray-200 dark:bg-gray-900  w-full">
            <div class="w-full flex flex-wrap flex-row h-16 pt-3 lg:pt-4 lg:pb-4">
                <div class="flex ml-0 lg:hidden text-center lg:m-0 m-auto">
                    <button
                        class="bg-white hover:bg-gray-300 text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5"
                        type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">
                        <i id="showNav" style="font-size: 160%;" class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="ms-2 sm:w-1/3 md:w-1/3 lg:w-1/6 m-auto lg:m-0">
                    <img style="object-fit: cover;"
                        src="https://klbtheme.com/grogin/wp-content/uploads/2023/11/grogin-logo-dark.png" alt="Logo">
                </div>
                <div class="relative lg:hidden inline-flex items-center p-1.5 ml-1 m-0 text-sm font-medium ">
                    <a href=" /#"><i class="fa-solid fa-cart-shopping text-gray-600" class="ms-0"
                            style="font-size: 160%;"></i></a>
                    <div
                        class="animate-ping absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-0 -end-1 dark:border-gray-900">
                        0</div>
                </div>
                <div class="hidden lg:flex delivdivoAll">
                    <button class="bg-white">
                        <i class="fa-solid fa-location-dot text-black" style="font-size:160%"></i>
                    </button>

                </div>
                <div class="hidden lg:flex m-0">
                    <p style="font-size:12px" class="text-gray-500 dark:text-white">
                        <span style="color:rgb(199, 199, 199)">Deliver to </span><br>all
                    </p>
                </div>
                <div class="xl:w-[55%] lg:w-[40%] relative flex items-center justify-between hidden lg:flex divInput"
                    style="position:relative">
                    <input id="inputField" type="text"
                        style="width: 100%;padding:12px 12px;border:none;outline-color: #634c9f;"
                        placeholder="Search for products,categories or brands...">
                    <span class="search-icon" style="z-index:12"><i style="font-size: 140%;"
                            class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="flex lg:items-center  w-full lg:w-1/6 justify-evenly space-x-6 ml-2">
                    <a class="hidden relative  lg:flex" href="tel:5541251234" id="dropdownUserAvatarButton"
                        data-dropdown-toggle="dropdownAvatar"
                        class="flex text-sm rounded-full m-0 md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        type="button" class="hidden lg:flex text-sm  text-gray-500 dark:text-white hover:underline"><i
                            style="font-size: 160%;" class="group fa-regular fa-user text-black"></i></a>
                    <div id="dropdownAvatar"
                        class="z-10 group-hover:inline absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                    <button type="button" style="margin-left: 4px;background-color: white;"
                        class="relative hidden lg:inline-flex items-center p-0 ps-4 ml-1 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href="/#"><i class="fa-regular fa-heart text-black" style="font-size: 160%;"></i></a>
                        <div
                            class="transition duration-1000 animate-bounce absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-3 -end-3.5 dark:border-gray-900">
                            14</div>
                    </button>

                    <div
                        class="relative hidden lg:inline-flex items-center ps-0 text-sm font-medium text-center rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <a href=" /#"><i class="fa-solid fa-cart-shopping text-black" class="ms-0"
                                style="font-size: 160%;"></i></a>
                        <div
                            class="transition duration-1000 ease-in-out animate-ping absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-3 -end-3 dark:border-gray-900">
                            10</div>
                    </div>
                </div>

        </nav>
        <!--sidebar pc-->
        <div class="flex ps-0 justify-center max-w-screen-3xl w-full items-center">

            <!--Carousel
        -->
            <div class="flex w-full p-0 flex-col mt-4 ml-0 items-center justify-evenly md:ml-3 lg:ml-2">
                <ul
                    class="hidden w-full ps-0 ms-0 infor text-sm flex-row font-medium lg:flex items-center justify-between p-3">
                    <li class="ms-0 group relative">
                        <a href=" #" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2"
                            data-dropdown-trigger="hover"
                            class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                            type="button">Home<i style="color:#634c9f;margin-left:5px"
                                class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div id="dropdownHover2" style="width: 160px;"
                            class="w-1/2 flex group-hover:block flex-col items-center absolute hidden justify-evenly z-20 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
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
                    <li class="group relative">
                        <a href="#" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover"
                            class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">Shop <i style="color:#634c9f" class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover3"
                            class="absolute hidden group-hover:flex h-[1700%] top-full w-[2350%] -left-[500%] flex flex-row ml-10 items-center justify-between z-10 bg-white rounded-lg">
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
                    <li class="relative group">
                        <a href="#" style="font-size: 16px;color:#634c9f"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton4" data-dropdown-toggle="dropdownHover4"
                            data-dropdown-trigger="hover"
                            class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">Trending Products <i style="color:#634c9f"
                                class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover4"
                            class="z-20 absolute group-hover:flex h-[1700%] top-[150%] w-[850%] -left-[565%]  flex-col items-center h-screen overflow-hidden justify-evenly hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <div style="background-image: linear-gradient(to right,yellow,red);"
                                class="rounded-full w-full ms-3.5 m-0 mb-2 p-1 flex items-center justify-between flex-row">
                                <div class="ms-0" style="width: 93%;">
                                    <span class="font-bold text-lg ms-0 animate-bounce">Soon stocks will run out
                                    </span><span class="text-sm ms-5" style="color:gray">
                                        Dont miss this opportunity while supplies last.
                                    </span>
                                </div>
                            </div>

                            <div class="w-full flex flex-row items-center h-screen">
                                <div class="flex flex-row items-center pt-0 mt-0 overflow-x-scroll justify-between py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownHoverButton4">
                                    <!-- Card 3 -->
                                    <div
                                        class="relative item flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                                            <div class="carousel-container">
                                                <div class="carousel ">
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 1" class="carousel-image" id="img1" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 2" class="carousel-image" id="img2" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 3" class="carousel-image" id="img3" />
                                                </div>
                                            </div>
                                            <span style="background-color: red"
                                                class="absolute top-0 left-0 m-2 rounded-r-full px-2 py-1 text-center text-sm font-medium text-white">39%
                                                OFF</span>
                                            <span
                                                class="absolute top-0 right-0 m-2 bg-gray-100 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-heart text-black"></i></span>

                                            <span
                                                class="absolute appear top-10 bg-gray-100 right-0 appear m-2 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-eye text-black"></i></span>
                                            <span
                                                class="absolute appearquick bg-gray-100 top-20 right-0 m-2 rounded-full px-2.5 text-center text-sm font-medium text-white">
                                                <i class="fa-solid text-3xl fa-repeat text-black"></i></span>
                                        </a>

                                        <div class="mt-4 px-5 pb-5">
                                            <div class="w-fit rounded-3xl absolute right-6 top-[62%]"
                                                style="background-color: purple">
                                                <i class="p-3 fa-solid fa-plus text-white"></i>
                                            </div>
                                            <a href="#">
                                                <h5 class="text-md tracking-tight text-slate-900">
                                                    Nike Air MX Super 2500 - Red super saiyan blue style
                                                </h5>
                                            </a>
                                            <div class="mt-2 mb-1 flex items-center ms-0 justify-between">
                                                <div class="flex items-center ms-0">
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="mr-2 pb-2 rounded px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                                                </div>
                                            </div>
                                            <p>
                                                <span class="text-3xl font-bold text-slate-900"
                                                    style="color: red">$449</span>
                                                <span
                                                    class="text-md text-slate-900 line-through decoration-red-500">$699</span>
                                            </p>
                                            <!-- <a
          href="#"
          style="
            color: purple;
            border: 1px solid purple;
            border-radius: 60px;
          "
          class="flex mt-2 items-center border-2 justify-between rounded-md px-4 py-1 text-center text-sm font-medium text-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-300"
          ><div class="flex flex-row items-center text-md justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mr-2 h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
            Add to cart
          </div>
          <i class="fa-solid fa-plus"></i
        ></a> -->
                                            <hr class="mt-2 mb-3" />
                                            <div class="" style="color: gray">
                                                This product is about to run out
                                            </div>

                                            <div
                                                class="w-full mt-3 bg-gray-200 rounded-full h-2.5 mb-3 dark:bg-gray-700">
                                                <div class="h-2.5 ms-0 rounded-full" style="
                width: 70%;
                background-image: linear-gradient(
                  to right,
                  yellow,
                  orange,
                  red
                );
              "></div>
                                            </div>
                                            <div class="" style="color: gray">Available only:28</div>
                                        </div>
                                    </div>
                                    <!-- Card 4 -->
                                    <div
                                        class="relative item flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                                            <div class="carousel-container">
                                                <div class="carousel ">
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 1" class="carousel-image" id="img1" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 2" class="carousel-image" id="img2" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 3" class="carousel-image" id="img3" />
                                                </div>
                                            </div>
                                            <span style="background-color: red"
                                                class="absolute top-0 left-0 m-2 rounded-r-full px-2 py-1 text-center text-sm font-medium text-white">39%
                                                OFF</span>
                                            <span
                                                class="absolute top-0 right-0 m-2 bg-gray-100 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-heart text-black"></i></span>

                                            <span
                                                class="absolute appear top-10 bg-gray-100 right-0 appear m-2 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-eye text-black"></i></span>
                                            <span
                                                class="absolute appearquick bg-gray-100 top-20 right-0 m-2 rounded-full px-2.5 text-center text-sm font-medium text-white">
                                                <i class="fa-solid text-3xl fa-repeat text-black"></i></span>
                                        </a>

                                        <div class="mt-4 px-5 pb-5">
                                            <div class="w-fit rounded-3xl absolute right-6 top-[62%]"
                                                style="background-color: purple">
                                                <i class="p-3 fa-solid fa-plus text-white"></i>
                                            </div>
                                            <a href="#">
                                                <h5 class="text-md tracking-tight text-slate-900">
                                                    Nike Air MX Super 2500 - Red super saiyan blue style
                                                </h5>
                                            </a>
                                            <div class="mt-2 mb-1 flex items-center ms-0 justify-between">
                                                <div class="flex items-center ms-0">
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="mr-2 pb-2 rounded px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                                                </div>
                                            </div>
                                            <p>
                                                <span class="text-3xl font-bold text-slate-900"
                                                    style="color: red">$449</span>
                                                <span
                                                    class="text-md text-slate-900 line-through decoration-red-500">$699</span>
                                            </p>
                                            <!-- <a
          href="#"
          style="
            color: purple;
            border: 1px solid purple;
            border-radius: 60px;
          "
          class="flex mt-2 items-center border-2 justify-between rounded-md px-4 py-1 text-center text-sm font-medium text-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-300"
          ><div class="flex flex-row items-center text-md justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mr-2 h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
            Add to cart
          </div>
          <i class="fa-solid fa-plus"></i
        ></a> -->
                                            <hr class="mt-2 mb-3" />
                                            <div class="" style="color: gray">
                                                This product is about to run out
                                            </div>

                                            <div
                                                class="w-full mt-3 bg-gray-200 rounded-full h-2.5 mb-3 dark:bg-gray-700">
                                                <div class="h-2.5 ms-0 rounded-full" style="
                width: 70%;
                background-image: linear-gradient(
                  to right,
                  yellow,
                  orange,
                  red
                );
              "></div>
                                            </div>
                                            <div class="" style="color: gray">Available only:28</div>
                                        </div>
                                    </div>
                                    <!-- Card 5 -->
                                    <div
                                        class="relative item flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                                            <div class="carousel-container">
                                                <div class="carousel ">
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 1" class="carousel-image" id="img1" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 2" class="carousel-image" id="img2" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 3" class="carousel-image" id="img3" />
                                                </div>
                                            </div>
                                            <span style="background-color: red"
                                                class="absolute top-0 left-0 m-2 rounded-r-full px-2 py-1 text-center text-sm font-medium text-white">39%
                                                OFF</span>
                                            <span
                                                class="absolute top-0 right-0 m-2 bg-gray-100 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-heart text-black"></i></span>

                                            <span
                                                class="absolute appear top-10 bg-gray-100 right-0 appear m-2 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-eye text-black"></i></span>
                                            <span
                                                class="absolute appearquick bg-gray-100 top-20 right-0 m-2 rounded-full px-2.5 text-center text-sm font-medium text-white">
                                                <i class="fa-solid text-3xl fa-repeat text-black"></i></span>
                                        </a>

                                        <div class="mt-4 px-5 pb-5">
                                            <div class="w-fit rounded-3xl absolute right-6 top-[62%]"
                                                style="background-color: purple">
                                                <i class="p-3 fa-solid fa-plus text-white"></i>
                                            </div>
                                            <a href="#">
                                                <h5 class="text-md tracking-tight text-slate-900">
                                                    Nike Air MX Super 2500 - Red super saiyan blue style
                                                </h5>
                                            </a>
                                            <div class="mt-2 mb-1 flex items-center ms-0 justify-between">
                                                <div class="flex items-center ms-0">
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="mr-2 pb-2 rounded px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                                                </div>
                                            </div>
                                            <p>
                                                <span class="text-3xl font-bold text-slate-900"
                                                    style="color: red">$449</span>
                                                <span
                                                    class="text-md text-slate-900 line-through decoration-red-500">$699</span>
                                            </p>
                                            <!-- <a
          href="#"
          style="
            color: purple;
            border: 1px solid purple;
            border-radius: 60px;
          "
          class="flex mt-2 items-center border-2 justify-between rounded-md px-4 py-1 text-center text-sm font-medium text-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-300"
          ><div class="flex flex-row items-center text-md justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mr-2 h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
            Add to cart
          </div>
          <i class="fa-solid fa-plus"></i
        ></a> -->
                                            <hr class="mt-2 mb-3" />
                                            <div class="" style="color: gray">
                                                This product is about to run out
                                            </div>

                                            <div
                                                class="w-full mt-3 bg-gray-200 rounded-full h-2.5 mb-3 dark:bg-gray-700">
                                                <div class="h-2.5 ms-0 rounded-full" style="
                width: 70%;
                background-image: linear-gradient(
                  to right,
                  yellow,
                  orange,
                  red
                );
              "></div>
                                            </div>
                                            <div class="" style="color: gray">Available only:28</div>
                                        </div>
                                    </div>
                                    <!-- Card 6 -->
                                    <div
                                        class="relative item flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                                            <div class="carousel-container">
                                                <div class="carousel ">
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 1" class="carousel-image" id="img1" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 2" class="carousel-image" id="img2" />
                                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="Image 3" class="carousel-image" id="img3" />
                                                </div>
                                            </div>
                                            <span style="background-color: red"
                                                class="absolute top-0 left-0 m-2 rounded-r-full px-2 py-1 text-center text-sm font-medium text-white">39%
                                                OFF</span>
                                            <span
                                                class="absolute top-0 right-0 m-2 bg-gray-100 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-heart text-black"></i></span>

                                            <span
                                                class="absolute appear top-10 bg-gray-100 right-0 appear m-2 rounded-full px-2 text-center text-sm font-medium text-white"><i
                                                    class="fa-regular text-3xl fa-eye text-black"></i></span>
                                            <span
                                                class="absolute appearquick bg-gray-100 top-20 right-0 m-2 rounded-full px-2.5 text-center text-sm font-medium text-white">
                                                <i class="fa-solid text-3xl fa-repeat text-black"></i></span>
                                        </a>

                                        <div class="mt-4 px-5 pb-5">
                                            <div class="w-fit rounded-3xl absolute right-6 top-[62%]"
                                                style="background-color: purple">
                                                <i class="p-3 fa-solid fa-plus text-white"></i>
                                            </div>
                                            <a href="#">
                                                <h5 class="text-md tracking-tight text-slate-900">
                                                    Nike Air MX Super 2500 - Red super saiyan blue style
                                                </h5>
                                            </a>
                                            <div class="mt-2 mb-1 flex items-center ms-0 justify-between">
                                                <div class="flex items-center ms-0">
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg aria-hidden="true" class="h-4 w-4 text-yellow-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="mr-2 pb-2 rounded px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                                                </div>
                                            </div>
                                            <p>
                                                <span class="text-3xl font-bold text-slate-900"
                                                    style="color: red">$449</span>
                                                <span
                                                    class="text-md text-slate-900 line-through decoration-red-500">$699</span>
                                            </p>
                                            <!-- <a
          href="#"
          style="
            color: purple;
            border: 1px solid purple;
            border-radius: 60px;
          "
          class="flex mt-2 items-center border-2 justify-between rounded-md px-4 py-1 text-center text-sm font-medium text-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-300"
          ><div class="flex flex-row items-center text-md justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mr-2 h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
            Add to cart
          </div>
          <i class="fa-solid fa-plus"></i
        ></a> -->
                                            <hr class="mt-2 mb-3" />
                                            <div class="" style="color: gray">
                                                This product is about to run out
                                            </div>

                                            <div
                                                class="w-full mt-3 bg-gray-200 rounded-full h-2.5 mb-3 dark:bg-gray-700">
                                                <div class="h-2.5 ms-0 rounded-full" style="
                width: 70%;
                background-image: linear-gradient(
                  to right,
                  yellow,
                  orange,
                  red
                );
              "></div>
                                            </div>
                                            <div class="" style="color: gray">Available only:28</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="m-0 relative group">
                        <a href="#" style=" font-size: 16px;color:orangered"
                            class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:text-grey-700 md:p-0 dark:text-white md:dark:text-grey-500"
                            aria-current="page" id="dropdownHoverButton7" data-dropdown-toggle="dropdownHover7"
                            data-dropdown-trigger="hover"
                            class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">Almost Finished <span
                                style="background-color:orangered;padding:3px;color:white;border-radius: 5px;">Sale</span>
                            <i style="color:orangered" class="fa-solid fa-chevron-down"></i>

                        </a>
                        <div id="dropdownHover7"
                            class="z-20 absolute group-hover:flex h-[1700%] top-full w-[800%] -left-[650%] flex-row items-center justify-evenly hidden bg-white">
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

            </div>

            <!--Sidebar điện thoại-->
            <!-- drawer component -->
            <div id="drawer-navigation"
                class="fixed top-0 left-0 z-40 w-full h-screen overflow-y-auto -translate-x-full transition-transform  bg-white"
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

                    <button type="button" id="btnClose" data-drawer-hide="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="w-[30px] bg-white text-gray-400 bg-gray hover:bg-gray-100 hover:text-gray-900 rounded-xl text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
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
                                <div class="delivdivoAll m-0 " style="margin-left:10px">
                                    <button class="bg-white hover:bg-gray-100">
                                        <i class="fa-solid text-black fa-location-dot text-xl"></i>
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
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 ">3</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:180%" class="fa-solid fa-mug-hot"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Beverages</span>
                                <span
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 ">3</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <i style="color:grey;font-size:180%" class="fa-solid fa-blog"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Blog</span>
                                <span
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 ">3</span>
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
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium ">3</span>
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
                                            <li style="color:gray" class="text-sm">You can call anytime from 9 am to
                                                6
                                                pm.</li>
                                        </ul>
                                    </div>
                                    <div class="flex flex-row m-0">
                                        <i style="font-size: 130%;" class="m-0 mt-1 fa-solid fa-paper-plane"></i>
                                        <ul class="text-lg w-full m-0 ms-2">
                                            <li>example@example.com</li>
                                            <li style="color:gray" class="text-sm">We will glady assist you in the
                                                short
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
    </div>
    <!-- Breadcrumb -->
    <nav class="flex mt-5 ms-10" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Shop</span>
                </div>
            </li>
        </ol>
    </nav>
    <div class="w-full flex mt-5 ms-10">
        <div class="w-[300px] h-full m-0 top-0 left-0" id="sidebarSticky">
            <div class="text-md font-semibold mb-5">Widget price filter</div>
            <div class="w-full flex flex-row justify-evenly gap-3 m-0">
                <div class="flex flex-col w-3/7">
                    <label for="" class="m-0 text-sm text-gray-400">Min price</label>
                    <input id="min" type="text" value="0"
                        class="z-0 w-full bg-white p-2 border border-gray-300 rounded">
                </div>
                <div class="w-1/7 pt-6"><i class="fa-solid fa-minus"></i></div>
                <div class="flex flex-col w-3/7">
                    <label for="" class="m-0 text-sm text-gray-400">Max price</label>
                    <input type="text" id="currentValue" value="30"
                        class="w-full bg-white p-2 border border-gray-300 z-0 rounded">
                </div>
            </div>
            <div class="range-slide mt-6">
                <div class="slide">
                    <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                    <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                    <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                </div>
                <input id="rangeMin" type="range" max="30" min="0" step="10" value="0">
                <input id="rangeMax" type="range" max="30" min="0" step="10" value="30">
            </div>
            <!-- <div class="display">
                <span>$0</span>
                <span id="max">$30</span>
            </div> -->
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                let min = 0;
                let max = 30;

                const calcLeftPosition = value => 100 / (30 - 0) * (value - 0);


                $('#rangeMin').on('input', function(e) {
                    const newValue = parseInt(e.target.value);
                    if (newValue > max) return;
                    min = newValue;
                    $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
                    $('#min').val('$' + newValue);
                    $('#currentValueTextMin').html('$' + newValue);
                    $('#line').css({
                        'left': calcLeftPosition(newValue) + '%',
                        'right': (100 - calcLeftPosition(max)) + '%'
                    });
                });

                $('#rangeMax').on('input', function(e) {
                    const newValue = parseInt(e.target.value);
                    if (newValue < min) return;
                    max = newValue;
                    $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
                    $('#max').html('$' + newValue);
                    $('#line').css({
                        'left': calcLeftPosition(min) + '%',
                        'right': (100 - calcLeftPosition(newValue)) + '%'
                    });
                });
            });
            </script>
            <div class="flex flex-row mt-6 justify-between">
                <div class="flex flex-row m-0">
                    <div>Price: <span class="ms-1" id="currentValueTextMin">$0</span> </div>
                    <div>
                        <i class="fa-solid fa-minus w-4 ms-2 text-xl"></i>
                    </div> <span class="ms-1" id="currentValueTextMax">$30</span>
                </div>
                <button class="px-4 py-2 ml-0 rounded-md bg-gray-300 m-0">Filter</button>
            </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const rangeInput = document.getElementById('rangeMax');
                const currentValueInput = document.getElementById('currentValue');
                const currentValueSpanMax = document.getElementById('currentValueTextMax');

                rangeInput.addEventListener('input', function() {
                    currentValueInput.value = Math.round(rangeInput.value);
                    currentValueSpan.innerHTML = '$' + Math.round(rangeInput.value);
                    currentValueSpanMax.innerHTML = '$' + Math.round(rangeInput.value);

                });
            });
            </script>
            <hr class="bg-gray-200 mt-4 mb-4">
            <div>
                <h4 class="text-md font-semibold mb-3"> Product Categories</h4>
                <div>
                    <ul class="">
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Fruits
                                    &
                                    Vegetables
                                </label>
                            </a>
                            <span class="m-0"><i id="icon1" class="fa-solid fa-plus text-sm text-gray-400"></i></span>

                        </li>
                        <div class="dropdownCheckbox1 ps-8">
                            <ul>
                                <li class="flex flex-row justify-between group1 mt-1"><a class="m-0 flex flex-row gap-2"
                                        href="#">
                                        <div class="inline-flex items-center">
                                            <label class="flex items-center cursor-pointer relative">
                                                <input type="checkbox"
                                                    class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                                    id="checkbox1" />
                                                <span
                                                    class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                        viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                        stroke-width="1">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div><label for="">Cuts &Sprouts
                                        </label>
                                    </a></li>
                                <li class="flex flex-row justify-between group2 mt-2"><a class="m-0 flex flex-row gap-2"
                                        href="#">
                                        <div class="inline-flex items-center">
                                            <label class="flex items-center cursor-pointer relative">
                                                <input type="checkbox"
                                                    class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                                    id="checkbox1" />
                                                <span
                                                    class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                        viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                        stroke-width="1">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div><label for="">Exotic Fruits & Veggies
                                        </label>
                                    </a></li>
                                <li class="flex flex-row justify-between group3 mt-2"><a class="m-0 flex flex-row gap-2"
                                        href="#">
                                        <div class="inline-flex items-center">
                                            <label class="flex items-center cursor-pointer relative">
                                                <input type="checkbox"
                                                    class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                                    id="checkbox1" />
                                                <span
                                                    class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                        viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                        stroke-width="1">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div><label for="">Fresh Fruits

                                        </label>
                                    </a></li>
                                <li class="flex flex-row justify-between group4 mt-2"><a class="m-0 flex flex-row gap-2"
                                        href="#">
                                        <div class="inline-flex items-center">
                                            <label class="flex items-center cursor-pointer relative">
                                                <input type="checkbox"
                                                    class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                                    id="checkbox1" />
                                                <span
                                                    class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                        viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                        stroke-width="1">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div><label for="">Fresh Vegetables
                                        </label>
                                    </a></li>
                            </ul>
                        </div>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Baby & Pregnancy
                                </label>
                            </a>


                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Beverages
                                </label>
                            </a>
                            <span class="m-0"><i id="icon1" class="fa-solid fa-plus text-sm text-gray-400"></i></span>

                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Meat &
                                    Seafood
                                </label>
                            </a>
                            <span class="m-0"><i id="icon1" class="fa-solid fa-plus text-sm text-gray-400"></i></span>

                        </li>

                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Biscuits & Snacks
                                </label>
                            </a>


                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Breads & Bakerys
                                </label>
                            </a>
                            <span class="m-0"><i id="icon1" class="fa-solid fa-plus text-sm text-gray-400"></i></span>

                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Breakfasts & Dairy
                                </label>
                            </a>
                            <span class="m-0"><i id="icon1" class="fa-solid fa-plus text-sm text-gray-400"></i></span>

                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Frozen Foods
                                </label>
                            </a>


                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Grocery & Staples
                                </label>
                            </a>


                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Healthcare
                                </label>
                            </a>


                        </li>
                        <li class="flex flex-row justify-between group1">
                            <a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for=""> Household Needs
                                </label>
                            </a>


                        </li>
                    </ul>
                </div>
            </div>
            <hr class="bg-gray-200 mt-4 mb-4">
            <div>
                <h4 class="text-md">Filter by Color</h4>
                <div>
                    <ul>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-green-600 checked:bg-green-600 rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-green-600 checked:bg-green-600 checked:border-green-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-green-600 hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Green
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-black checked:bg-black rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-black checked:bg-black checked:border-black"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-black hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Black
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-blue-600 checked:bg-blue-600 rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-blue-600 checked:bg-blue-600 checked:border-blue-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-blue-600 hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Blue
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-[#DD9933] checked:bg-[#DD9933] rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-[#DD9933] checked:bg-[#DD9933] checked:border-[#DD9933]"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-[#DD9933] hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Brown
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-[#9E9E9E] checked:bg-[#9E9E9E] rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-[#9E9E9E] checked:bg-[#9E9E9E] checked:border-[#9E9E9E]"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-[#9E9E9E] hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Gray
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-[#DD3333] checked:bg-[#DD3333] rounded-full w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-lg border border-[#DD3333] checked:bg-[#DD3333] checked:border-[#DD3333]"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 bg-[#DD3333] hover:opacity-100 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Red
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>

                    </ul>
                </div>
            </div>
            <hr class="bg-gray-200 mt-4 mb-4">
            <div>
                <h4 class="text-md font-semibold"> Filter by Brands</h4>
                <div>
                    <ul>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Fresh
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Aptamil
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Babyganics
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">Dove
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="bg-gray-200 mt-4 mb-4">
            <div>
                <h4 class="text-md font-semibold"> Product Status</h4>
                <div>
                    <ul>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">In Stock
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                        <li class="flex flex-row justify-between mt-2"><a class="m-0 flex flex-row gap-2" href="#">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                            class="peer h-5 bg-white w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-purple-600 checked:border-purple-600"
                                            id="checkbox1" />
                                        <span
                                            class="absolute z-20 text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-3.5 w-3.5"
                                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div><label for="">On Sale
                                </label>
                            </a>
                            <span class="m-0 text-gray-400">(1)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content ml-5 p-4 flex flex-col">
            <ul class="m-0 ms-0 flex mt-2 text-gray-400  mb-4">
                <li class="m-0 p-0"><i class="fa-solid fa-x text-sm text-black ml-1"></i><span class="m-0 ms-2">Clear
                        filters</span></li>
                <li class="m-0 p-0 ms-3"><i class="fa-solid fa-x text-sm text-black ml-1"></i><span
                        class="m-0 ms-2">Green</span></li>
            </ul>
            <div class="m-0">
                <img src="http://localhost/images/Filter_cat1.PNG" alt="..." class="object-fit">
            </div>
            <div class="bg-[#F3F4F6] w-full flex flex-row py-3 px-2 rounded-xl mt-2">
                <div class=" w-[20%]">
                    <p class="text-gray-600">Showing the single result</p>
                </div>
                <div class="w-[30%]"></div>
                <div class="flex w-[50%]">
                    <div class="m-0 flex flex-row items-center text-gray-400">Sort:
                        <form class="max-w-sm mx-auto ms-2 border-0">
                            <select id="countries"
                                class="bg-[#F3F4F6] focus:outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-500">
                                <option selected>Sort by latest</option>
                                <option value="av">Sort by average rating</option>
                                <option value="pop">Sort by popularity</option>
                                <option value="LH">Sort by price:low to high</option>
                                <option value="HL">Sort by price:high to low</option>
                            </select>
                        </form>
                        <div class="m-0 flex flex-row items-center text-gray-400 ms-5">Show:</div>
                        <form class="max-w-sm mx-auto">
                            <select id="countries"
                                class="bg-[#F3F4F6] focus:outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-500">
                                <option selected>20 items</option>
                                <option value="40">40 items</option>
                                <option value="60">60 items</option>
                                <option value="80">80 items</option>
                            </select>
                        </form>
                        <button class="ms-3"><a href="#"><i
                                    class="text-xl fa-solid text-gray-600 fa-list"></i></a></button>
                        <button class="m-3"><a href="#"><i
                                    class="text-xl fa-solid text-gray-600 fa-cubes"></i></a></button>
                    </div>


                </div>
            </div>
            <div class="w-full h-screen border-2 border-gray-200 mt-3 rounded-lg"></div>
            <div style="height: 2000px;"></div> <!-- Tạo chiều cao để cuộn -->
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('sidebarSticky');
        const footer = document.querySelector('.Footer');
        const sidebarOrigin = sidebar.offsetTop;
        const sidebarHeight = sidebar.offsetHeight;

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const footerTop = footer.getBoundingClientRect().top;
            const sidebarBottom = sidebar.getBoundingClientRect().bottom;

            if (scrollY > sidebarOrigin) {
                if (sidebarBottom >= footerTop) {
                    // Sidebar has reached the footer
                    sidebar.style.position = 'absolute';
                    sidebar.style.top = `${footerTop - sidebarHeight}px`;
                } else {
                    // Sidebar is fixed but not at footer yet
                    sidebar.style.position = 'sticky';
                    sidebar.style.top = '0px';
                }
            } else {
                // Sidebar is at its original position
                sidebar.style.position = '';
                sidebar.style.top = '';
            }
        });
    });
    </script>
    <!-- Footer -->
    <div class="Footer z-20 pt-12 mt-10 m-auto w-full bg-gray-100 h-fit">
        <!-- input email -->
        <div class="flex flex-col lg:flex-row ">
            <div class="ms-0 flex flex-col w-full lg:w-1/2 gap-4">
                <div class="font-bold text-xl ms-12">Join our newsletter for £10 offs</div>
                <div class="text-gray-600 w-1/2 text-sm ms-12">Register now to get latest updates on promotions &
                    coupons.Don’t
                    worry,
                    we not
                    spam!</div>
            </div>
            <div class="w-1/2 lg:w-1/3 lg:mt-4 mt-10 ms-12 lg:ms-auto">
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="z-20 w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="text" id="input-group-1"
                        class="bg-gray-50 z-10 border py-3.5 px-4.5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter your email address">
                    <button type="submit" style="background-color: #634c9f;"
                        class="absolute w-1/6 z-20 rounded-r-full rounded-l-none top-0 text-center end-0 p-2 px-4 h-full text-md font-medium text-white rounded-e-lg border focus:ring-4 focus:outline-color">
                        SEND
                    </button>
                </div>
                <div style="font-size: 12px;margin-top:-15px" class="text-gray-400">By subscribing you agree to our
                    Terms &
                    Conditions
                    and Privacy &
                    Cookies
                    Policy.
                </div>
            </div>
        </div>
        <div class="w-2/3 flex items-center mb-0 justify-center mt-10">
            <hr class="w-full" style="border: 1px solid #c2c2c2;">
        </div>
        <!-- Need help -->
        <div class="flex flex-col md:flex-row h-fit mt-0 lg:mt-6 w-full">
            <div class="ms-0 flex flex-col gap-4 w-full md:w-1/4 mt-4">
                <div class="font-medium text-md ms-12">Do You Need Help ?</div>
                <div class="text-gray-600 w-1/2 text-sm ms-12">Autoseligen syr. Nek diarask fröbomba. Nör antipol
                    kynoda
                    nynat. Pressa fåmoska.</div>
                <div href="#"
                    class="ms-7 flex flex-col p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
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
                        <div class="flex flex-row m-0 mt-5">
                            <i style="font-size: 130%;" class="m-0 mt-1 fa-solid fa-paper-plane"></i>
                            <ul class="text-lg w-full m-0 ms-2">
                                <li>example@example.com</li>
                                <li style="color:gray" class="text-sm">We will glady assist you in the short
                                    time.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ms-4 lg:flex-row">
                <div class="mt-4 lg:w-1/6 w-1/2  ms-12 md:ms-auto">
                    <div class="font-medium text-md">Make Money with Us</div>
                    <ul class="text-gray-600 text-sm mt-4">
                        <li><a href="#">Sell on Grogin</a></li>
                        <li><a href="#">Sell Your Services on Grogin</a></li>
                        <li><a href="#">Sell on Grogin Business</a></li>
                        <li><a href="#">Sell Your Apps on Grogin</a></li>
                        <li><a href="#">Become an Affilate</a></li>
                        <li><a href="#">Advertise Your Products</a></li>
                        <li><a href="#">Sell-Publish with Us</a></li>
                        <li><a href="#">Become an Blowwe Vendor</a></li>
                    </ul>
                </div>

                <div class="mt-4 lg:w-1/6 w-1/2 ms-12 md:ms-auto">
                    <div class="font-medium text-md ">Let Us Help You</div>
                    <ul class="text-gray-600 text-sm mt-4">
                        <li><a href="#">Accessibility Statement</a></li>
                        <li><a href="#">Your Orders</a></li>
                        <li><a href="#">Returns & Replacements</a></li>
                        <li><a href="#">Shipping Rates & Policies</a></li>
                        <li><a href="#">Refund and Returns Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="mt-4 lg:w-1/6 w-1/2 ms-12 md:ms-auto">
                    <div class="font-medium text-md">Get to Know Us</div>
                    <ul class="text-gray-600 text-sm mt-4">
                        <li><a href="#">Careers for Grogin</a></li>
                        <li><a href="#">About Grogin</a></li>
                        <li><a href="#">Inverstor Relations</a></li>
                        <li><a href="#">Grogin Devices</a></li>
                        <li><a href="#">Customer reviews</a></li>
                        <li><a href="#">Social Responsibility</a></li>
                        <li><a href="#">Store Locations</a></li>
                    </ul>
                </div>
                <div class="mt-4 lg:w-1/6 w-1/2 ms-12 md:ms-auto">
                    <div class="font-medium text-md">Download our app</div>
                    <table class="mt-5 ms-auto">
                        <tr>
                            <td><a href="#"></a><img class="ms-0" style="width:50%;height:50%"
                                    src="http://localhost/images/dowloadApp1.webp" alt="...">
                                <span class="text-sm text-gray-400">Download App Get -10% Discount</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="ms-0" href="#"><img class="ms-0 ml-0" style="width:50%;height:50%"
                                        src="http://localhost/images/dowloadApp.webp" alt="..."> <span
                                        class="text-sm text-gray-400">Download App Get -20% Discount</span></a></td>

                        </tr>
                    </table>
                </div>
                <div class="mt-4 lg:w-1/6 w-1/3 ms-12 md:ms-auto pb-4">
                    <div class="font-medium text-md ms-0">Follow us on social media:</div>
                    <ul class="flex flex-row items-center mt-4 gap-0">
                        <li
                            class="bg-white text-blue-700 w-10 rounded-lg p-2 ms-0 text-center hover:bg-blue-700 hover:text-white">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li
                            class="bg-white text-blue-700 w-10 p-2 rounded-lg text-center hover:bg-blue-700 hover:text-white">
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li
                            class="bg-white w-10 p-2 rounded-lg text-center hover:bg-red-500 text-red-500 hover:text-white">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li
                            class="bg-white w-10 p-2 text-blue-700 rounded-lg text-center hover:bg-blue-700 hover:text-white">
                            <a href="#"><i class="fa-solid fa-info"></i></a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

</body>
<div class="fixed z-20 inline lg:hidden bottom-0 left-0 right-0 bg-white border-t border-gray-300 shadow-lg">
    <div class="flex items-center justify-evenly p-2">
        <div class="flex items-center justify-around space-x-2 p-auto h-fit border-2 rounded-lg">
            <button id="decrease" class="rounded-full p-1 text-3xl">-</button>
            <span id="quantity" class="text-lg w-[30px] text-center">1</span>
            <button id="increase" class="rounded-full p-1 text-2xl">+</button>
        </div>
        <button class="bg-green-600 text-white rounded-xl w-10/12 px-4 py-2.5">Add to Cart</button>
    </div>
    <div class="flex justify-around p-2">
        <a href="#store" class="flex flex-col items-center text-gray-600">
            <i class="fa-solid fa-store h-8 text-2xl"></i>
            <span class="text-xs">Cửa hàng</span>
        </a>
        <a href="#search" class="flex flex-col items-center text-gray-600">
            <i class="fa-solid fa-magnifying-glass  h-8 text-2xl"></i>
            <span class="text-xs">Tìm kiếm</span>
        </a>
        <a href="#wishlist" class="flex flex-col items-center text-gray-600">
            <i class="fa-regular fa-heart h-8 text-2xl"></i>
            <span class="text-xs">Yêu thích</span>
        </a>
        <a href="#account" class="flex flex-col items-center text-gray-600">
            <i class="fa-regular fa-user h-8 text-2xl"></i>
            <span class="text-xs">Tài khoản</span>
        </a>
        <a href="#categories" class="flex flex-col items-center text-gray-600">
            <i class="fa-solid fa-layer-group h-8 text-2xl"></i>
            <span class="text-xs">Danh mục</span>
        </a>
    </div>
</div>

<script src="/js/filter_cat.js"></script>

</html>