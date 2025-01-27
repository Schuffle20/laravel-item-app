<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="py-12">

    <div class="container max-w-3xl mx-auto">
        <div class="text-right">
            <a href="{{ route('phone.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Create Phone
            </a>
        </div>


        <div class="relative overflow-x-auto my-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Person
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{$items}} --}}
                    @foreach ($phones as $phone)


                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$loop->iteration}}
                            </th>
                            <td class="px-6 py-4">
                                {{$phone->phone_number}}
                            </td>
                            <td class="px-6 py-4">
                                {{$phone->person->name}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (session('success'))
            <div class="inline-block float-right p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-900" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="inline-block float-right p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-900" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>



</body>
</html>
