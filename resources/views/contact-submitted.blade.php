<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-black leading-tight">
            Contact
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-blue-200 dark:blue-200 shadow sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 mt-1 text-sm">
                  <!--  {{ __("You're logged in!") }} les __ c'est la traduction. les accolades c'est pour interpréter le texte-->
                    <h1 class="text-black dark:text-black">Merci pour votre message !</h1>
                    <br>
                    <p class="text-black dark:text-black">Nous reviendrons vers vous dès que possible</p>
                    <br>
                    <a href="{{ route('contact.contact') }}">
                    <button  class="btn btn-primary inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" > retourner au formulaire </button>
                    </a>
                    <a href="{{ route('dashboard') }}">
                    <button href="{{ route('dashboard') }}" class="btn btn-primary inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"> retourner à l'accueil</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
