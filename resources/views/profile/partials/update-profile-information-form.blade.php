<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informations du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Mettez à jour les informations de votre compte et votre adresse e-mail.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Votre adresse e-mail n\'est pas vérifiée.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Cliquez ici pour renvoyer l\'e-mail de vérification.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        @if (auth()->user()->role === 1)
            <div>
                <x-input-label for="role" :value="__('Rôle')" />
                <x-text-input id="role" name="role" type="text" class="mt-1 block w-full" :value="old('role', $user->role)" required autofocus autocomplete="role" />
                <x-input-error class="mt-2" :messages="$errors->get('role')" />
            </div>
        @endif

        @if (auth()->user()->role === 0)
            <div>
                <x-input-label for="preferences" :value="__('Sélecteur de match')" />
                <div class="mt-1">
                    <label for="has_cats" class="inline-flex items-center">
                        <input id="has_cats" name="has_cats" type="checkbox" class="form-checkbox" value="1" {{ old('has_cats', $user->has_cats) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs chats') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="has_dogs" class="inline-flex items-center">
                        <input id="has_dogs" name="has_dogs" type="checkbox" class="form-checkbox" value="1" {{ old('has_dogs', $user->has_dogs) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs chiens') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="has_kids" class="inline-flex items-center">
                        <input id="has_kids" name="has_kids" type="checkbox" class="form-checkbox" value="1" {{ old('has_kids', $user->has_kids) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs enfants') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="no_issues" class="inline-flex items-center">
                        <input id="no_issues" name="no_issues" type="checkbox" class="form-checkbox" value="1" {{ old('no_issues', $user->no_issues) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('Je vis sans perturbateurs') }}</span>
                    </label>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('preferences')" />
            </div>
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Enregistré.') }}</p>
            @endif
        </div>
    </form>
</section>

<style>
    .disabled .text-white {
        color: gray;
        cursor: not-allowed;
    }
    .disabled input {
        cursor: not-allowed;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const noneCheckbox = document.getElementById('no_issues');

        function updateCheckboxState() {
            let anyChecked = false;
            checkboxes.forEach(checkbox => {
                if (checkbox !== noneCheckbox && checkbox.checked) {
                    anyChecked = true;
                }
            });

            if (noneCheckbox.checked) {
                checkboxes.forEach(checkbox => {
                    if (checkbox !== noneCheckbox) {
                        checkbox.disabled = true;
                        checkbox.parentNode.classList.add('disabled');
                    }
                });
            } else if (anyChecked) {
                noneCheckbox.disabled = true;
                noneCheckbox.parentNode.classList.add('disabled');
            } else {
                checkboxes.forEach(checkbox => {
                    checkbox.disabled = false;
                    checkbox.parentNode.classList.remove('disabled');
                });
            }
        }

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateCheckboxState);
        });

        updateCheckboxState();
    });
</script>
