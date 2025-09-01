<x-app-profil-edit>
    <div class="profile-card animate-fade-up">
        <div class="profile-header">
            <h2 class="profile-title">{{ __('Profile Information') }}</h2>
            <p class="profile-subtitle">{{ __("Update your account's profile information and email address.") }}</p>
        </div>
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="profile-card animate-fade-up delay-1">
        <div class="profile-header">
            <h2 class="profile-title">{{ __('Update Password') }}</h2>
            <p class="profile-subtitle">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
        </div>
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="profile-card animate-fade-up delay-2">
        <div class="profile-header">
            <h2 class="profile-title">{{ __('Delete Account') }}</h2>
            <p class="profile-subtitle">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}</p>
        </div>
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-profil-edit>
