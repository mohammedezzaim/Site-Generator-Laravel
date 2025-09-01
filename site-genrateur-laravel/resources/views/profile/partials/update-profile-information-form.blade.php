<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Name -->
        <div class="input-container floating-label">
            <input id="name" name="name" type="text" class="input-field" placeholder=" " value="{{ old('name', Auth::user()->name) }}" required autofocus autocomplete="name" />
            <label for="name" class="input-label">
                <i class="fas fa-user"></i> {{ __('Name') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('name')" />
        </div>

        <!-- First Name -->
        <div class="input-container floating-label">
            <input id="firstname" name="firstname" type="text" class="input-field" placeholder=" " value="{{ old('firstname', Auth::user()->firstname) }}" required autocomplete="firstname" />
            <label for="firstname" class="input-label">
                <i class="fas fa-signature"></i> {{ __('First Name') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('firstname')" />
        </div>

        <!-- Last Name -->
        <div class="input-container floating-label">
            <input id="lastname" name="lastname" type="text" class="input-field" placeholder=" " value="{{ old('lastname', Auth::user()->lastname) }}" required autocomplete="lastname" />
            <label for="lastname" class="input-label">
                <i class="fas fa-signature"></i> {{ __('Last Name') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('lastname')" />
        </div>

        <!-- Email -->
        <div class="input-container floating-label">
            <input id="email" name="email" type="email" class="input-field" placeholder=" " value="{{ old('email', Auth::user()->email) }}" required autocomplete="username" />
            <label for="email" class="input-label">
                <i class="fas fa-envelope"></i> {{ __('Email') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('email')" />

            @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! Auth::user()->hasVerifiedEmail())
                <div class="input-hint">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="input-hint" style="color: #10B981;">
                        <i class="fas fa-check-circle"></i>
                        {{ __('A new verification link has been sent to your email address.') }}
                    </div>
                @endif
            @endif
        </div>

        <!-- Phone -->
        <div class="input-container floating-label">
            <input id="phone" name="phone" type="text" class="input-field" placeholder=" " value="{{ old('phone', Auth::user()->phone) }}" autocomplete="phone" />
            <label for="phone" class="input-label">
                <i class="fas fa-phone"></i> {{ __('Phone') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('phone')" />
        </div>

        <!-- Address -->
        <div class="input-container floating-label">
            <textarea id="address" name="address" class="input-field textarea-field" placeholder=" " autocomplete="address">{{ old('address', Auth::user()->address) }}</textarea>
            <label for="address" class="input-label">
                <i class="fas fa-map-marker-alt"></i> {{ __('Address') }}
            </label>
            <x-input-error class="input-error" :messages="$errors->get('address')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                    style="color: red"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
