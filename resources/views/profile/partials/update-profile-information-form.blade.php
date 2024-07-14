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
                <x-input-label for="profile_requests" :value="__('Sélecteur de match')" />
                <div class="mt-1">
                    <label for="cats" class="inline-flex items-center">
                        <input id="cats" name="profile_requests[]" type="checkbox" class="form-checkbox" value="cats" {{ in_array('cats', old('profile_requests', $user->profile_requests ?? [])) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs chats') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="dogs" class="inline-flex items-center">
                        <input id="dogs" name="profile_requests[]" type="checkbox" class="form-checkbox" value="dogs" {{ in_array('dogs', old('profile_requests', $user->profile_requests ?? [])) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs chiens') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="children" class="inline-flex items-center">
                        <input id="children" name="profile_requests[]" type="checkbox" class="form-checkbox" value="children" {{ in_array('children', old('profile_requests', $user->profile_requests ?? [])) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('J\'ai un ou plusieurs enfants') }}</span>
                    </label>
                </div>
                <div class="mt-1">
                    <label for="none" class="inline-flex items-center">
                        <input id="none" name="profile_requests[]" type="checkbox" class="form-checkbox" value="none" {{ in_array('none', old('profile_requests', $user->profile_requests ?? [])) ? 'checked' : '' }}>
                        <span class="ml-2 text-white">{{ __('Je vis sans perturbateurs') }}</span>
                    </label>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('profile_requests')" />
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
        const checkboxes = document.querySelectorAll('input[name="profile_requests[]"]');
        const noneCheckbox = document.getElementById('none');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this !== noneCheckbox) {
                    if (this.checked) {
                        noneCheckbox.disabled = true;
                        noneCheckbox.parentNode.classList.add('disabled');
                    } else {
                        let anyChecked = false;
                        checkboxes.forEach(cb => {
                            if (cb !== noneCheckbox && cb.checked) {
                                anyChecked = true;
                            }
                        });
                        noneCheckbox.disabled = anyChecked;
                        noneCheckbox.parentNode.classList.toggle('disabled', anyChecked);
                    }
                } else {
                    if (this.checked) {
                        checkboxes.forEach(cb => {
                            if (cb !== noneCheckbox) {
                                cb.disabled = true;
                                cb.parentNode.classList.add('disabled');
                            }
                        });
                    } else {
                        checkboxes.forEach(cb => {
                            cb.disabled = false;
                            cb.parentNode.classList.remove('disabled');
                        });
                    }
                }
            });

            // Initial check on page load
            if (checkbox.checked && checkbox !== noneCheckbox) {
                noneCheckbox.disabled = true;
                noneCheckbox.parentNode.classList.add('disabled');
            } else if (noneCheckbox.checked) {
                checkboxes.forEach(cb => {
                    if (cb !== noneCheckbox) {
                        cb.disabled = true;
                        cb.parentNode.classList.add('disabled');
                    }
                });
            }
        });
    });
</script>
