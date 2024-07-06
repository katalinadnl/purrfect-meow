<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Son portrait
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--  {{ __("You're logged in!") }} les __ c'est la traduction. les accolades c'est pour interpréter le texte-->
                    Toutes les informations à savoir sur le chat <b>{{ $cat->name }}</b>
                    <br><br>
                    <ul>
                        <li>
                            <b>Son nom:</b> {{ $cat->name }}
                            <br><br>
                            <b>Son âge:</b> {{ $cat->age }} ans
                            <br><br>
                            <b>Monsieur ou Madame:</b> {{ $cat->gender }}
                            <br><br>
                            @if((bool)$cat->no_issues)
                                <b>Ami avec le monde</b>
                                <br><br>
                            @else
                                @if($cat->issues_with_kids)
                                    <b>N'est pas amis avec les enfants</b>
                                    <br><br>
                                @endif
                                @if($cat->issues_with_other_cats)
                                    <b>N'est pas ami avec ses congénères</b>
                                    <br><br>
                                @endif
                                @if($cat->issues_with_dogs)
                                    <b>N'est pas ami avec Pluto</b>
                                    <br><br>
                                @endif
                            @endif
                            <b>Son portrait:</b> {{ $cat->image }}
                            <br>
                        </li>
                    </ul>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
