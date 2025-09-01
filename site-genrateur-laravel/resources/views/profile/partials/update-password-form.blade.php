<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="input-container floating-label">
            <input id="update_password_current_password" name="current_password" type="password" class="input-field" placeholder=" " autocomplete="current-password" />
            <label for="update_password_current_password" class="input-label">
                <i class="fas fa-lock"></i> {{ __('Current Password') }}
            </label>
            <button type="button" class="password-toggle">
                <i data-lucide="eye"></i>
            </button>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="input-error" />
        </div>

        <div class="input-container floating-label">
            <input id="update_password_password" name="password" type="password" class="input-field" placeholder=" " autocomplete="new-password" />
            <label for="update_password_password" class="input-label">
                <i class="fas fa-key"></i> {{ __('New Password') }}
            </label>
            <button type="button" class="password-toggle">
                <i data-lucide="eye"></i>
            </button>
            <div class="input-hint">
                <i class="fas fa-info-circle"></i> {{ __('Use at least 8 characters with a mix of letters, numbers and symbols.') }}
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="input-error" />
        </div>

        <div class="input-container floating-label">
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input-field" placeholder=" " autocomplete="new-password" />
            <label for="update_password_password_confirmation" class="input-label">
                <i class="fas fa-check-circle"></i> {{ __('Confirm Password') }}
            </label>
            <button type="button" class="password-toggle">
                <i data-lucide="eye"></i>
            </button>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="input-error" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
