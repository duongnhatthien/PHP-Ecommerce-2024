<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
    * {
        box-sizing: border-box;
    }

    tr {
        border-bottom: 1px solid #D2D2D2;
    }

    input:focus {
        outline: 2px #634C9F;
    }

    .autocomplete {
        position: relative;
        width: full;
    }

    .suggestions {
        border-right: 1px solid #634C9F;
        border-left: 1px solid #634C9F;
        border-radius: 0 0 10px 10px;
        max-height: 150px;
        overflow-y: auto;
        position: absolute;
        width: 100%;
        z-index: 1;
        background: white;

    }

    .suggestion-item {
        padding: 10px;
        cursor: pointer;
    }

    .suggestion-item:hover {
        background-color: #f0f0f0;
    }
    </style>
</head>

<body>
    <!-- Breads Crumb -->
    <nav class="flex mt-5" aria-label="Breadcrumb">
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
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Items</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Cart</span>
                </div>
            </li>
        </ol>
    </nav>

    <!--End of Breads Crumb -->
    <div class="border-2 border-gray-200 p-3.5 text-md text-gray-500 mt-5">Cart updated</div>
    <div class="flex flex-row justify-around gap-8 md:gap-4 max-h-screen">
        <div class="flex flex-col lg:w-3/4 w-2/4 h-full">
            <div class="bg-[#FFF5F5] border-2 border-red-200 p-3.5 text-md text-gray-500 mt-5 rounded-lg"><i
                    class="fa-solid fa-cube p-3"></i>Add
                <span class="text-red-500">$297.11</span> to cart and get free shipping!
                <div class="p-3 pt-0">
                    <hr class="h-1.5 rounded bg-[#EAD0D0]">
                </div>
            </div>
            <table class="mt-3">
                <tr>
                    <th></th>
                    <th></th>
                    <th class="p-2 ps-0 text-gray-400 text-left text-sm">Product</th>
                    <th class="text-gray-400 text-left text-sm">Price</th>
                    <th class="text-gray-400 text-left text-sm">Quantity</th>
                    <th class="text-gray-400 text-left text-sm ps-3">Subtotal</th>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-x p-1.5 border-2 border-gray-200 rounded-lg"></i></td>
                    <td class="h-28 p-3"> <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png"
                            alt="Black Leather Purse" class="h-full object-center object-cover md:block hidden" /></td>
                    <td>Marketside Fresh Organic Bananas, Bunch</td>
                    <td>$0.89</td>
                    <td>
                        <div class="flex items-center  w-24 justify-around h-fit  border-2 rounded-lg">
                            <button id="decrease"><i class="text-md fa-solid fa-minus"></i></button>
                            <span id="quantity" class="text-lg text-center">1</span>
                            <button id="increase"><i class="text-md fa-solid fa-plus"></i></button>
                        </div>
                    </td>
                    <td class="ps-3"> $0.89</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-x p-1.5 border-2 border-gray-200 rounded-lg"></i></td>
                    <td class="h-28 p-3"> <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png"
                            alt="Black Leather Purse" class="h-full object-center object-cover md:block hidden" /></td>
                    <td>Lay's Classic Potato Snack Chips, Party Size, 13 oz Bag</td>
                    <td>$1.00</td>
                    <td>
                        <div class="flex items-center  w-24 justify-around h-fit  border-2 rounded-lg">
                            <button id="decrease"><i class="text-md fa-solid fa-minus"></i></button>
                            <span id="quantity" class="text-lg text-center">1</span>
                            <button id="increase"><i class="text-md fa-solid fa-plus"></i></button>
                        </div>
                    </td>
                    <td class="ps-3"> $1.00</td>
                </tr>
                <tr>
                    <td colspan="5" class="p-4">
                        <div class="flex flex-row items-center gap-1.5">
                            <label for="" class="text-sm">Coupon:</label>
                            <input class="border-2 w-4/12 p-2 rounded-xl border-gray-200" type="text"
                                placeholder="Coupon code">
                            <button class="bg-[#212529] text-white rounded-lg w-1.5/12 px-4 py-2.5">Apply
                                coupon</button>
                        </div>
                    </td>
                    <td> <button class="bg-gray-200 text-center text-black rounded-lg w-full px-1 py-2.5">Clear All
                        </button></td>
                </tr>
            </table>
        </div>
        <div class="w-2/4 lg:w-1/4 rounded-lg mt-5 h-full border-2 border-gray-200 bg-[#FCFCFC] p-4">
            <div class="text-sm font-semibold">Cart totals</div>
            <table class="w-full ">
                <tr>
                    <th class="text-sm text-left text-gray-400 p-4">
                        Subtotal
                    </th>
                    <td class="text-sm text-right p-4">$1.89</td>
                </tr>
                <tr>
                    <th class=" text-sm text-left text-gray-400 p-2">Shipping:</th>
                    <td class=" text-sm text-right p-2 ps-0">
                        <ul class="flex gap-4 flex-col">
                            <li class="">
                                <label for="" class="text-sm">Flat rate: $15.00</label>
                                <input type="radio" class="ms-0.5 text-sm" name="rad1" checked>
                            </li>
                            <li class=""><label for="">Local pickup</label>
                                <input type="radio" name="rad1">
                            </li>
                        </ul>
                        <p class="">Shipping to <span class="font-semibold text-sm">CA.</span> </p>
                        <form action="#" class="mt-4">
                            <a href="#" id="toggleFormbtn" class="text-purple-500 text-sm">Change address</a>
                            <div id="toggleForm">
                                <!-- component -->
                                <div class="relative inline-flex self-center group mt-2 w-full">
                                    <svg class="text-white z-20 bg-purple-700 absolute -top-1.5 -right-1.5 m-2 pointer-events-none p-1 rounded-lg"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="37px" height="36px" viewBox="0 0 38 22" version="1.1">
                                        <title>F09B337F-81F6-41AC-8924-EC55BA135736</title>
                                        <g id="ZahnhelferDE—Design" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="ZahnhelferDE–Icon&amp;Asset-Download"
                                                transform="translate(-539.000000, -199.000000)" fill="#ffffff"
                                                fill-rule="nonzero">
                                                <g id="Icon-/-ArrowRight-Copy-2"
                                                    transform="translate(538.000000, 183.521208)">
                                                    <polygon id="Path-Copy"
                                                        transform="translate(20.000000, 18.384776) rotate(135.000000) translate(-20.000000, -18.384776) "
                                                        points="33 5.38477631 33 31.3847763 29 31.3847763 28.999 9.38379168 7 9.38477631 7 5.38477631" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="autocomplete">
                                        <input id="input1"
                                            class="text-md font-semibold rounded-xl border-2 group-hover:border-purple-700 text-gray-600 h-10 w-full pl-2 pr-10 bg-white border-gray-200 focus:outline-none appearance-none">
                                        <div id="suggestions" class="suggestions"></div>
                                        <!-- <option>Select a country / region...</option>
                                    <option>A-Z</option>
                                    <option>Z-A</option> -->
                                    </div>
                                    <script>
                                    $('#toggleForm').toggle();
                                    $('#toggleFormbtn').on('click', function() {
                                        $('#toggleForm').toggle(1000);
                                    })
                                    const data = [
                                        "Afghanistan",
                                        "Albania",
                                        "Algeria",
                                        "Andorra",
                                        "Angola",
                                        "Antigua and Barbuda",
                                        "Argentina",
                                        "Armenia",
                                        "Australia",
                                        "Austria",
                                        "Azerbaijan",
                                        "Bahamas",
                                        "Bahrain",
                                        "Bangladesh",
                                        "Barbados",
                                        "Belarus",
                                        "Belgium",
                                        "Belize",
                                        "Benin",
                                        "Bhutan",
                                        "Bolivia",
                                        "Bosnia and Herzegovina",
                                        "Botswana",
                                        "Brazil",
                                        "Brunei",
                                        "Bulgaria",
                                        "Burkina Faso",
                                        "Burundi",
                                        "Cabo Verde",
                                        "Cambodia",
                                        "Cameroon",
                                        "Canada",
                                        "Central African Republic",
                                        "Chad",
                                        "Chile",
                                        "China",
                                        "Colombia",
                                        "Comoros",
                                        "Congo, Democratic Republic of the",
                                        "Congo, Republic of the",
                                        "Costa Rica",
                                        "Croatia",
                                        "Cuba",
                                        "Cyprus",
                                        "Czech Republic",
                                        "Denmark",
                                        "Djibouti",
                                        "Dominica",
                                        "Dominican Republic",
                                        "Ecuador",
                                        "Egypt",
                                        "El Salvador",
                                        "Equatorial Guinea",
                                        "Eritrea",
                                        "Estonia",
                                        "Eswatini",
                                        "Ethiopia",
                                        "Fiji",
                                        "Finland",
                                        "France",
                                        "Gabon",
                                        "Gambia",
                                        "Georgia",
                                        "Germany",
                                        "Ghana",
                                        "Greece",
                                        "Grenada",
                                        "Guatemala",
                                        "Guinea",
                                        "Guinea-Bissau",
                                        "Guyana",
                                        "Haiti",
                                        "Honduras",
                                        "Hungary",
                                        "Iceland",
                                        "India",
                                        "Indonesia",
                                        "Iran",
                                        "Iraq",
                                        "Ireland",
                                        "Israel",
                                        "Italy",
                                        "Jamaica",
                                        "Japan",
                                        "Jordan",
                                        "Kazakhstan",
                                        "Kenya",
                                        "Kiribati",
                                        "Korea, North",
                                        "Korea, South",
                                        "Kuwait",
                                        "Kyrgyzstan",
                                        "Laos",
                                        "Latvia",
                                        "Lebanon",
                                        "Lesotho",
                                        "Liberia",
                                        "Libya",
                                        "Liechtenstein",
                                        "Lithuania",
                                        "Luxembourg",
                                        "Madagascar",
                                        "Malawi",
                                        "Malaysia",
                                        "Maldives",
                                        "Mali",
                                        "Malta",
                                        "Marshall Islands",
                                        "Mauritania",
                                        "Mauritius",
                                        "Mexico",
                                        "Micronesia",
                                        "Moldova",
                                        "Monaco",
                                        "Mongolia",
                                        "Montenegro",
                                        "Morocco",
                                        "Mozambique",
                                        "Myanmar",
                                        "Namibia",
                                        "Nauru",
                                        "Nepal",
                                        "Netherlands",
                                        "New Zealand",
                                        "Nicaragua",
                                        "Niger",
                                        "Nigeria",
                                        "North Macedonia",
                                        "Norway",
                                        "Oman",
                                        "Pakistan",
                                        "Palau",
                                        "Palestine",
                                        "Panama",
                                        "Papua New Guinea",
                                        "Paraguay",
                                        "Peru",
                                        "Philippines",
                                        "Poland",
                                        "Portugal",
                                        "Qatar",
                                        "Romania",
                                        "Russia",
                                        "Rwanda",
                                        "Saint Kitts and Nevis",
                                        "Saint Lucia",
                                        "Saint Vincent and the Grenadines",
                                        "Samoa",
                                        "San Marino",
                                        "Sao Tome and Principe",
                                        "Saudi Arabia",
                                        "Senegal",
                                        "Serbia",
                                        "Seychelles",
                                        "Sierra Leone",
                                        "Singapore",
                                        "Slovakia",
                                        "Slovenia",
                                        "Solomon Islands",
                                        "Somalia",
                                        "South Africa",
                                        "South Sudan",
                                        "Spain",
                                        "Sri Lanka",
                                        "Sudan",
                                        "Suriname",
                                        "Sweden",
                                        "Switzerland",
                                        "Syria",
                                        "Taiwan",
                                        "Tajikistan",
                                        "Tanzania",
                                        "Thailand",
                                        "Timor-Leste",
                                        "Togo",
                                        "Tonga",
                                        "Trinidad and Tobago",
                                        "Tunisia",
                                        "Turkey",
                                        "Turkmenistan",
                                        "Tuvalu",
                                        "Uganda",
                                        "Ukraine",
                                        "United Arab Emirates",
                                        "United Kingdom",
                                        "United States",
                                        "Uruguay",
                                        "Uzbekistan",
                                        "Vanuatu",
                                        "Vatican City",
                                        "Venezuela",
                                        "Vietnam",
                                        "Yemen",
                                        "Zambia",
                                        "Zimbabwe"
                                    ];


                                    const input1 = document.getElementById('input1');
                                    const suggestionsContainer = document.getElementById('suggestions');

                                    input1.addEventListener('input', function() {
                                        const query = this.value.toLowerCase();
                                        suggestionsContainer.innerHTML = ''; // Xóa gợi ý cũ

                                        if (query) {
                                            const filteredData = data.filter(item => item.toLowerCase()
                                                .includes(query));

                                            filteredData.forEach(item => {
                                                const suggestionItem = document.createElement('div');
                                                suggestionItem.classList.add('suggestion-item');
                                                suggestionItem.textContent = item;
                                                suggestionItem.addEventListener('click', function() {
                                                    input1.value =
                                                        item; // Điền giá trị vào ô input1
                                                    suggestionsContainer.innerHTML =
                                                        ''; // Xóa gợi ý
                                                });
                                                suggestionsContainer.appendChild(suggestionItem);
                                            });
                                        }
                                    });

                                    input1.addEventListener('focus', function() {
                                        const query = this.value.toLowerCase();
                                        suggestionsContainer.innerHTML = ''; // Xóa gợi ý cũ

                                        if (query) {
                                            const filteredData = data.filter(item => item.toLowerCase()
                                                .includes(query));

                                            filteredData.forEach(item => {
                                                const suggestionItem = document.createElement('div');
                                                suggestionItem.classList.add('suggestion-item');
                                                suggestionItem.textContent = item;
                                                suggestionItem.addEventListener('click', function() {
                                                    input1.value =
                                                        item; // Điền giá trị vào ô input1
                                                    suggestionsContainer.innerHTML =
                                                        ''; // Xóa gợi ý
                                                });
                                                suggestionsContainer.appendChild(suggestionItem);
                                            });
                                        } else {
                                            // Nếu không có query, hiển thị toàn bộ gợi ý
                                            data.forEach(item => {
                                                const suggestionItem = document.createElement('div');
                                                suggestionItem.classList.add('suggestion-item');
                                                suggestionItem.textContent = item;
                                                suggestionItem.addEventListener('click', function() {
                                                    input1.value =
                                                        item; // Điền giá trị vào ô input1
                                                    suggestionsContainer.innerHTML =
                                                        ''; // Xóa gợi ý
                                                });
                                                suggestionsContainer.appendChild(suggestionItem);
                                            });
                                        }
                                    });

                                    // Đóng gợi ý khi nhấp ra ngoài ô input
                                    input1.addEventListener('blur', function() {
                                        input1.addEventListener('blur', function() {
                                            setTimeout(() => {
                                                suggestionsContainer.innerHTML = '';
                                            }, 100); // Delay to allow click event to register
                                        });
                                    });
                                    </script>
                                </div>
                                <input class="border-2 w-full p-2 mt-2.5 rounded-xl border-gray-200" type="text"
                                    placeholder="State / Country">
                                <input class="border-2 w-full p-2 mt-2.5 rounded-xl border-gray-200" type="text"
                                    placeholder="Town / City">
                                <input class="border-2 w-full p-2 mt-2.5 rounded-xl border-gray-200" type="text"
                                    placeholder="Postcode / ZIP">
                                <button
                                    class="mt-4 mb-5 bg-gray-200 text-center font-bold text-black rounded-lg w-1/2 px-1 py-2.5">Update

                                </button>
                            </div>
                        </form>
                    </td>

                </tr>
                <tr>
                    <th class="text-sm text-left text-gray-400 p-4">Total</th>
                    <td class="text-right p-4 font-semibold">$16.89
                    </td>
                </tr>


            </table>
            <div class="mt-4"><button class="bg-[#212529] text-[#F9FAFA] rounded-lg w-full px-4 py-2.5">Proceed to
                    checkout</button>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <div class="flex items-center flex-col"><img class="w-[15%] h-[15%]" src="http://localhost/images/EmptyBox.PNG"
                alt="..."></div>
        <div class="flex flex-col items-center mt-6 justify-around">
            <div class="border-2 border-gray-200 p-4 w-1/2 text-md font-medium mt-5 text-center"><span
                    class="p-3.5  ">“Lay's
                    Classic
                    Potato
                    Snack
                    Chips, Party
                    Size, 13 oz Bag” removed. Undo?</span></div>
            <div class="border-2 border-gray-200 p-4 w-1/2 text-center text-3xl text-red-500 mt-5"><span
                    class="p-3 ">Your
                    cart is
                    currently empty.
                </span> </div>
            <div class="mt-4"><button class="bg-[#212529] text-[#F9FAFA] rounded-md text-md w-1.5/12 px-4 py-2.5">Return
                    to
                    shop</button>
            </div>
        </div>

    </div>
</body>

</html>