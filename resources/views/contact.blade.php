<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-black leading-tight">
            Contact
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200 dark:blue-200  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                  <!--  {{ __("Vous êtes connecté!") }} les __ c'est la traduction. les accolades c'est pour interpréter le texte-->
                  Vous êtes intéressés par un de nos chats ? 
                  <br>
                  Une requête, une question ? 
                  <br>
                  Contactez-nous en remplissant le formulaire ci-dessous.
                     <br><br>
                     <form method="POST" action="{{ route('contact.store') }}">
                        @csrf {{-- Cross-Site Request Forgery protection --}}
                        <label for="name">Nom :</label><br>
                        <input type="text" id="name" name="name" value="{{ old('title') }}" required class="rounded-md"><br>

                        <label for="email"> E-mail :</label><br>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="rounded-md"><br>

                        <label for="message">Message :</label><br>
                        <textarea id="message" name="message" value="{{ old('message') }}" required class="rounded-md"></textarea><br>

                        <input type="submit" value="Envoyer" class="btn btn-primary inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">

                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </form>


                     <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
