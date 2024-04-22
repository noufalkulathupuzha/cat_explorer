<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-8">Cat Information</h1>
        <div class="flex flex-wrap -mx-4">
            @foreach ($cats as $cat)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="aspect-w-16 aspect-h-9" style="height: 300px;">
                            <img class="w-full h-full object-cover rounded-t-lg" src="{{ $cat['image_link'] }}" alt="{{ $cat['name'] }}">
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $cat['name'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
