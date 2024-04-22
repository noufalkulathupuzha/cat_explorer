<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Explorer</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 border-b-2 border-gray-500">Cat Information</h1>
        <div class="flex flex-wrap -mx-4">
            @foreach ($cats as $cat)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white bg-opacity-70">
                        <div class="aspect-w-16 aspect-h-9" style="height: 300px;">
                            <img class="w-full h-full object-cover rounded-t-lg" src="{{ $cat['image_link'] }}" alt="{{ $cat['name'] }}">
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2  bg-opacity-70 p-2 rounded">{{ $cat['name'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
