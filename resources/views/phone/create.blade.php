<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <div class="container max-w-md mx-auto">
        <div class="w-full max-w-md max-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('phone.store') }}" method="post">
                @csrf
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="phone_number" class="block-mb-2 text-sm font-medium text-gray-900 dark-text-white">Phone Number</label>
                        <input type="number" id="phone_number" name="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>

                    <div class="mb-2">
                        <label for="person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a Person</label>
                        <select id="person" name="person_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Person</option>
                            @foreach ($persons as $person)
                                <option value="{{$person->id}}">{{$person->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <a href="{{route('phone.index')}}" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>
                        <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create</button>
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

