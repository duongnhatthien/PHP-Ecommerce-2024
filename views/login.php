<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Kết nối tệp CSS dành riêng cho trang login -->
    <link rel="stylesheet" href="/css/login.css">

</head>

<body>
    <div class="container">

        <div class="form-container">
            <div class="flex flex-col w-full">
                <ul class="flex text-3xl gap-5" style="justify-content:center;color:black">
                    <li> <a href="#" style="color:black;text-decoration:none" id="show-register">Register</a></li>
                    <li> <a href="#" style="color:rgb(163, 158, 158);text-decoration:none" id="show-login">Login</a>
                    </li>
                </ul>
            </div>
            <div class="form form-login" style="margin-top: -10px;">
                <div class="flex flex-col items-center  px-6 mx-auto  lg:py-0">
                    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
                        <div class="space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="text-sm font-medium leading-tight tracking-tight text-gray-900 md:text-md"
                                style="text-align: center;">If
                                you
                                have an account, sign in with your username or email address.
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">

                                <div>
                                    <label for="email" class="block mb-2 text-md font-medium text-gray-900 ">Your
                                        Username or email address *</label>
                                    <input type="text" name="union" id="union"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                        placeholder="" required="">
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-md font-medium text-gray-900">Password
                                        *</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        required="">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5 mt-1">
                                            <input id="remember" aria-describedby="remember" type="checkbox"
                                                style="margin-top: 2px;background-color: #634c9f;"
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"
                                                required="">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="remember" class="text-gray-500">Remember me</label>
                                        </div>
                                    </div>
                                    <a href="#" style="color:#634c9f"
                                        class="text-sm font-medium text-primary-600 hover:underline">Forgot
                                        password?</a>
                                </div>
                                <button type="submit" style="background-color: #634c9f;"
                                    class="text-white bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
                                <p class="text-sm font-light text-gray-500"> Don’t have an account yet? <a
                                        href="/register" style="color:#634c9f"
                                        class="font-medium text-primary-600 hover:underline ">Sign
                                        up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form form-register" class="flex flex-col  justify-center font-[sans-serif] sm:h-screen p-4">
                <div class="max-w-md mx-auto p-6">
                    <h1 class="text-sm font-medium leading-tight tracking-tight text-gray-900 md:text-md"
                        style="text-align: center;">There are many advantages to creating an account: the payment
                        process is faster, shipment tracking is possible and much more.
                    </h1>

                    <form>
                        <div class="space-y-6">
                            <div>
                                <label for="username" class="block mb-2 font-medium text-gray-900 ">
                                    Username *</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border text-md border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 text-sm block w-full p-2.5 "
                                    required="">
                            </div>
                            <div>
                                <label class="text-gray-800 text-md font-medium mb-2 block">Email address *</label>
                                <input name="email" type="text"
                                    class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                            </div>
                            <div>
                                <label class="text-gray-800 text-md font-medium block">Password *</label>
                                <input name="password" type="password"
                                    class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                            </div>
                            <div class="divScroll space-y-6">
                                <div>
                                    <label class="text-gray-800 text-md font-medium block">First Name *</label>
                                    <input name="firstname" type="text"
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                                </div>
                                <div>
                                    <label class="text-gray-800 text-md font-medium block">Last Name *</label>
                                    <input name="lastname" type="text"
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                                </div>
                                <div>
                                    <label class="text-gray-800 text-md font-medium block">Shop Name *</label>
                                    <input name="firstname" type="text"
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                                </div>
                                <div>
                                    <label class="text-gray-800 text-md font-medium block">Shop URL *</label>
                                    <input name="firstname" type="text" style="margin-bottom: 0px;"
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 pt-3 rounded-md outline-blue-500" />
                                    <span>https://klbtheme.com/grogin/store/</span>

                                </div>


                                <div>
                                    <label class="text-gray-800 text-md font-medium block">Phone Number*</label>
                                    <input name="firstname" type="text"
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                                </div>
                            </div>
                            <div>
                                <label class="custom-radio flex items-center relative cursor-pointer">
                                    <input type="radio" id="toggleUp" name="option" value="option1" class="sr-only"
                                        checked>
                                    <span class="radio-checkmark mr-4"></span>
                                    <span class="text-lg">I am a customer</span>
                                </label>
                                <label class="custom-radio flex items-center relative cursor-pointer">
                                    <input type="radio" id="toggleDown" name="option" value="option2" class="sr-only">
                                    <span class="radio-checkmark mr-4"></span>
                                    <span class="text-lg">I am a vendor</span>
                                </label>
                            </div>
                            <div class="flex items-center text-sm">
                                <p>
                                    Your personal data will be used to support your experience throughout this website,
                                    to
                                    manage access to your account, and for other purposes described in our <span><a
                                            style="color: #634c9f;" href="#">privacy policy</a></span>.
                                </p>
                            </div>
                        </div>
                        <div class="!mt-12">
                            <button type="button" style="background-color: #634c9f;"
                                class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                                Register </button>
                        </div>
                        <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="/login"
                                style="color:#634c9f" class="font-semibold hover:underline ml-1">Login here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/login.js"></script>

</html>