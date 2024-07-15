<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-black leading-tight">
            {{ __('Les chats') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200 dark:blue-200  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <h2 class="font-bold text-2xl pb-6">Découvrez votre futur colocataire &#x1F63A</h2>
                    <ul class="mb-4 mt-4 flex flex-col gap-3">
                        @foreach($cats as $cat)
                            <li class="bg-white dark:bg-white p-2 rounded-lg text-black dark:text-black flex w-full items-center justify-between">
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
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Supprimer</button>
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
