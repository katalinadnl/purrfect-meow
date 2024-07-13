<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Contact
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <!--  {{ __("You're logged in!") }} les __ c'est la traduction. les accolades c'est pour interpréter le texte-->
                  Une requête, une question ? Contactez-nous en remplissant le formulaire ci-dessous.
                     <br><br>
                     <form method="POST" action="{{ route('contact.store') }}">
                        @csrf {{-- Cross-Site Request Forgery protection --}}
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" value="{{ old('title') }}" required><br>
                
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
                
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" value="{{ old('message') }}" required></textarea><br>
                
                        <input type="submit" value="Submit">

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
