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
                    <h2 class="font-bold text-2xl pb-6">Découvrez votre futur colocataire &#x1F63A</h2>
                    <ul class="mb-4 mt-4 flex flex-col gap-3">
                        @foreach($cats as $cat)
                            <li class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg text-gray-900 dark:text-gray-100 flex w-full items-center">
                                <a href="{{ route('cats.information', ['id' => $cat->id]) }}">
                                    {{ $cat->name }}
                                </a>
                                @if (!empty($cat->image))
                                    <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->name }}" style="width:150px;">
                                @else
                                    <p>Image non trouvée</p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <br>
                    {{ $cats->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
