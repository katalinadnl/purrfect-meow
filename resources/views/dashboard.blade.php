<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-bold text-2xl pb-6">Découvrez votre futur colocataire &#x1F63A</h2>
                    <ul class="mb-4 mt-4 flex flex-col gap-3">
                        @foreach($cats as $cat)
                            <li class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg text-gray-900 dark:text-gray-100 flex w-full items-center justify-between">
                                <a href="{{ route('cats.information', ['id' => $cat->id]) }}">
                                    {{ $cat->name }}
                                </a>
                                @if (!empty($cat->image))
                                    <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->name }}" style="width:150px;">
                                @else
                                    <p>Image non trouvée</p>
                                @endif
                                @if (Auth::user()->role === 1)
                                    <form action="{{ route('cats.destroy', ['id' => $cat->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                    </form>
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
