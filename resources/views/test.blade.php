<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Our History</div>
                <h2 class="block mt-1 text-lg leading-tight font-medium text-black">Founded In <span class="text-indigo-600">20XX</span></h2>
                <p class="mt-2 text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="mt-4 text-sm text-gray-700">
                    <p><strong>Key Milestones:</strong></p>
                    <ul class="list-disc list-inside ml-4">
                        <li>Achieved first major milestone in 20XX</li>
                        <li>Expanded to new markets in 20XX</li>
                        <li>Launched innovative product in 20XX</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>