<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Logo -->
    <div class="m-4 ">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-700">Fortune</span>
        </a>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">About Us</h2>
                <p class="mb-4">Fortune International is a privately held group in Myanmar with a portfolio of companies delivering quality products and services across a range of industries. What unites our company is a commitment to excellence across all our businesses.</p>
                <p class="mb-4">The company was founded by Chairman U Mya Han in 1991 as a trading company for chemicals, pharmaceuticals and veterinary products, with a mission of building businesses that provide quality goods and services to enrich lives and contribute to the development of Myanmar.</p>
                <p class="mb-4">Fortune has since become one of Myanmar’s leading diversified companies, with operations in communications, agriculture, construction and real estate, contributing to the country’s infrastructural development as the country goes through unparalleled socio-economic changes.</p>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-40 h-40 rounded-lg" src="{{ asset('images/about/about-icons-1.svg') }}" alt="office content 1">
                    <img class="w-40 h-40 rounded-lg mt-4" src="{{ asset('images/about/about-icons-3.svg') }}" alt="office content 2">
                </div>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-full h-full rounded-lg" src="https://www.susangreenecopywriter.com/wp-content/uploads/2013/01/rawpixel-com-250087-2-1024x699.jpg" alt="office content 1">
            </div>
        </div>
    </section>

</body>

</html>