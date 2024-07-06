<x-app-layout>
    <x-slot name="header">
        <title class="text-gray-900 dark:text-gray-100">Tous les chats</title>
        <h1 class="text-gray-900 dark:text-gray-100">Tous les chats</h1>
        <a href="{{ route('cats.create') }}" class="text-gray-900 dark:text-gray-100">Ajouter un nouveau chat</a>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if (session('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('cats.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="breed" class="block text-lg font-bold mb-2">Race</label>
                                <input type="text" id="breed" name="breed" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('breed') border-red-500 @enderror">
                                @error('breed')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="name" class="block text-lg font-bold mb-2">Prénom</label>
                                <input type="text" id="name" name="name" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="age" class="block text-lg font-bold mb-2">Age</label>
                                <input type="number" id="age" name="age" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('age') border-red-500 @enderror">
                                @error('age')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="block text-sm font-bold mb-2">Sexe</label>
                                <select id="gender" name="gender" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('gender') border-red-500 @enderror">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="issues_with_kids"
                                    class="block text-lg font-bold mb-2">Match pas les enfants</label>
                                <input type="checkbox" id="issues_with_kids" name="issues_with_kids" value="1">
                            </div>
                            <div class="mb-4">
                                <label for="issues_with_other_cats"
                                    class="block text-lg font-bold mb-2">Match pas avec ses congénères</label>
                                <input type="checkbox" id="issues_with_other_cats" name="issues_with_other_cats" value="1">
                            </div>
                            <div class="mb-4">
                                <label for="issues_with_dogs"
                                    class="block text-lg font-bold mb-2">Match pas avec les chiens</label>
                                <input type="checkbox" id="issues_with_dogs" name="issues_with_dogs" value="1">
                            </div>
                            <div class="mb-4">
                                <label for="no_issues"
                                    class="block text-lg font-bold mb-2">Match avec tout le monde</label>
                                <input type="checkbox" id="no_issues" name="no_issues" value="1" checked>
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block text-lg font-bold mb-2">Portrait</label>
                                <input type="file" id="image" name="image">
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter
                                    le chat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </x-app-layout>
