<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-black leading-tight">
            Son portrait
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <!--  {{ __("Vous êtes connecté!") }} les __ c'est la traduction. les accolades c'est pour interpréter le texte-->
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
                            @if($cat->issues)
                                @if($cat->issues->no_issues)
                                    <b>Ami avec le monde</b>
                                    <br><br>
                                @else
                                    @if($cat->issues->issues_with_kids)
                                        <b>N'est pas ami avec les enfants</b>
                                        <br><br>
                                    @endif
                                    @if($cat->issues->issues_with_other_cats)
                                        <b>N'est pas ami avec ses congénères</b>
                                        <br><br>
                                    @endif
                                    @if($cat->issues->issues_with_dogs)
                                        <b>N'est pas ami avec les chiens</b>
                                        <br><br>
                                    @endif
                                @endif
                            @endif
                            <b>Son portrait:</b>
                            @if (!empty($cat->image))
                                <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->name }}" style="width:150px;">
                            @else
                                <p>Image non trouvée</p>
                            @endif
                            <br>
                        </li>
                    </ul>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
