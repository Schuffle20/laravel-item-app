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
    {{-- {{$item}} --}}
    <div class="container max-w-md mx-auto">
        <div class="w-full max-w-md max-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{route('item.update', $item->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="name" class="block-mb-2 text-sm font-medium text-gray-900 dark-text-white">Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$item->name}}">
                    </div>

                    <div class="mb-2">
                        <label for="price" class="block-mb-2 text-sm font-medium text-gray-900 dark-text-white">Price</label>
                        <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$item->price}}">
                    </div>

                    <div class="mb-2">
                        <label for="stock" class="block-mb-2 text-sm font-medium text-gray-900 dark-text-white">Stock</label>
                        <input type="number" id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$item->stock}}">
                    </div>

                    <div class="mb-2">
                        <label for="description" class="block-mb-2 text-sm font-medium text-gray-900 dark-text-white">Description</label>
                        <textarea type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full">{{$item->description}}</textarea>
                    </div>

                    <div class="mb-2">

                        <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a Category</label>
                        <select id="categories" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-2">

                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="available" {{$item->status ==='available' ? 'checked' : ''}} name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="unavailable" {{$item->status === 'unavailable' ? 'checked' : ''}} name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unavailable</label>
                        </div>

                    </div>
                    <div class="flex">
                        <a href="{{route('item.index')}}" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>
                        <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
                    </div>

                </div>
            </form>
        </div>

        @if (session('success'))
            <div class="my-5 inline-block float-right p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-900" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

</body>
</html>
