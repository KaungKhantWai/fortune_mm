<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 z-50 sticky top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-16" alt="Flowbite Logo" />
            </a>

            <!-- Open Main Menu -->
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <!-- Home Tag -->
                    <li>
                        <a href="/" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
                    </li>

                    <!-- Company Tag -->
                    <li>
                        <button id="dropdownCompanyLink" data-dropdown-toggle="dropdownCompany" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Company <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownCompany" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/about" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Us</a>
                                </li>
                                <li>
                                    <a href="/our-partners" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Partners</a>
                                </li>
                                <li>
                                    <a href="/corporate-citizenship" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Corporate Citizenship</a>
                                </li>
                                <li>
                                    <a href="/our-vision" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Vision, Mission & Core Values</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Business Tag -->
                    <li>
                        <button id="dropdownBusinessLink" data-dropdown-toggle="dropdownBusiness" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Business <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownBusiness" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/overview" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Overview</a>
                                </li>
                                <li>
                                    <a href="/animalhealth" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Animal Health</a>
                                </li>
                                <li>
                                    <a href="/healthcare" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Healthcare & Pharmaceutical Product</a>
                                </li>
                                <li>
                                    <a href="/communicationsystems" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Communication Systems</a>
                                </li>
                                <li>
                                    <a href="/broadband" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Broadband</a>
                                </li>
                                <li>
                                    <a href="/broadcasting" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Broadcasting</a>
                                </li>
                                <li>
                                    <a href="/elevators&escalators" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Elevator & Escalators</a>
                                </li>
                                <li>
                                    <a href="/construction" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Construction</a>
                                </li>
                                <li>
                                    <a href="/hospitality" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hospitality</a>
                                </li>
                                <li>
                                    <a href="/energy" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Energy</a>
                                </li>
                                <li>
                                    <a href="/manufacturing" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manufacturing</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Careers Tag -->
                    <li>
                        <button id="dropdownCareersLink" data-dropdown-toggle="dropdownCareers" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Careers <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownCareers" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Overview</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Safety And Compliance -->
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Safety And Compliance</a>
                    </li>

                    <!-- Service Excellence -->
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Service Excellence</a>
                    </li>

                    <!-- Contact Us -->
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="gap-16 items-center mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
        <div>
            <section class="bg-white dark:bg-gray-900">
                <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
                    <div>
                        <div
                            class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                            <!-- Expanding circle background -->
                            <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                            <div class="relative z-10 mx-auto max-w-md text-center">

                                <!-- Image instead of SVG -->
                                <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                                    <img src="{{asset('images/man.png') }}"
                                        alt="man Icon"
                                        class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                                </span>

                                <!-- Text -->
                                <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p class="font-bold text-2xl">Network Engineer</p>
                                </div>

                                <div class="pt-5 text-base font-semibold leading-7">
                                    <!-- Button -->
                                    <button data-modal-target="networkCard" data-modal-toggle="networkCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div
                            class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                            <!-- Expanding circle background -->
                            <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                            <div class="relative z-10 mx-auto max-w-md text-center">

                                <!-- Image instead of SVG -->
                                <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                                    <img src="{{asset('images/man.png') }}"
                                        alt="man Icon"
                                        class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                                </span>

                                <!-- Text -->
                                <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p class="font-bold text-2xl">Network Engineer</p>
                                </div>

                                <div class="pt-5 text-base font-semibold leading-7">
                                    <!-- Button -->
                                    <button data-modal-target="infoCard" data-modal-toggle="infoCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900">
                <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
                    <div>
                        <div
                            class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                            <!-- Expanding circle background -->
                            <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                            <div class="relative z-10 mx-auto max-w-md text-center">

                                <!-- Image instead of SVG -->
                                <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                                    <img src="{{asset('images/man.png') }}"
                                        alt="man Icon"
                                        class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                                </span>

                                <!-- Text -->
                                <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p class="font-bold text-2xl">Network Engineer</p>
                                </div>

                                <div class="pt-5 text-base font-semibold leading-7">
                                    <!-- Button -->
                                    <button data-modal-target="infoCard" data-modal-toggle="infoCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div
                            class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                            <!-- Expanding circle background -->
                            <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                            <div class="relative z-10 mx-auto max-w-md text-center">

                                <!-- Image instead of SVG -->
                                <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                                    <img src="{{asset('images/man.png') }}"
                                        alt="man Icon"
                                        class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                                </span>

                                <!-- Text -->
                                <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p class="font-bold text-2xl">Network Engineer</p>
                                </div>

                                <div class="pt-5 text-base font-semibold leading-7">
                                    <!-- Button -->
                                    <button data-modal-target="infoCard" data-modal-toggle="infoCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <img class="w-full h-full rounded-lg" src="{{ asset('images/hiring.png') }}" alt="office content 1">
        </div>
    </div>

    <!-- Network Card container -->
    <div id="networkCard" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm overflow-y-auto overflow-x-hidden">
        <div class="relative w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-3xl mx-auto p-4">

            <!-- Card -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-6 sm:p-8 md:p-10">

                    <h2 class="text-center mb-6 text-2xl md:text-3xl font-bold text-blue-700">
                        Network Engineer
                    </h2>

                    <p class="text-blue-700 font-semibold">Job Description</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Design, implement and provide support for all network-related hardware/software</li>
                        <li>Responsible for improving technical service capability of the service team</li>
                        <li>Provide delivery support, customer training, and technical troubleshooting</li>
                        <li>Work with channel partners and manage major projects</li>
                        <li>Frequently travel to customer or project locations</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">Job Requirements</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Bachelor’s degree in Computer, Communication, or related field</li>
                        <li>2+ years of front-line service or technical support experience</li>
                        <li>Strong understanding of TCP/IP, L3/L4, Routing/Switching</li>
                        <li>Experience with routers, switches, wireless, and cloud technologies</li>
                        <li>Preferred: CCNP/HCNP certification or above</li>
                        <li>Good English communication; Chinese is a plus</li>
                    </ul>

                    <div class="text-center">
                        <button data-modal-hide="networkCard"
                            class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>