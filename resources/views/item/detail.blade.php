<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <div class="container mx-auto mt-10">
        <div class="w-full max-w-md max-auto bg-white shadow-lg rounded-lg p-8">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-slate-50 mx-auto">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Name : {{ $item->name }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Price : {{ $item->price }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Stock : {{ $item->stock }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Description : {{ $item->description }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Status : {{ $item->status }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Category : {{ $item->category->name }}
                </p>
                <a href="{{route('item.index')}}" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>


            </div>
        </div>
    </div>

</body>
</html>

