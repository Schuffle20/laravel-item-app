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

    <div class="container max-w-5xl mx-auto">
        <div class="text-right">
            <a href="{{ route('item.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Create Items
            </a>
        </div>


        <div class="relative overflow-x-auto my-5">
            <form action="{{route('item.search')}}" method="GET">
                <div class="mb-2">
                    <input type="text" id="name" name="query" class="bg-gray-50 border border-gray-300 text-gray-900 my-4 mx-4 text-sm rounded-lg" value="{{old('name')}}">
                    <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Search</button>
                    <a href="{{route('item.index')}}" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 mx-2">Item List</a>
                </div>

            </form>


            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Detail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{$items}} --}}
                    @foreach ($items as $item)


                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$item->name}}

                            </td>
                            <td class="px-6 py-4">
                                {{$item->price}}

                            </td>
                            <td class="px-6 py-4">
                                {{$item->stock}}
                            </td>
                             <td class="px-6 py-4">
                                {{$item->category->name}}
                            </td>

                            <td class="px-6 py-4">
                                {{$item->status}}
                            </td>

                            <td class="px-6 py-4">
                                <a  href="{{route('item.show', $item->id)}}" class="cursor-pointer text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Detail</a>
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{route('item.edit', $item->id)}}" type="button" class="cursor-pointer text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                                <form action="{{ route('item.destroy', $item->id) }}" class="inline-block" method="post">
                                   @csrf
                                   @method('delete')
                                   <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-6 py-6">
                {{ $items->links('pagination::tailwind') }}
            </div>
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
