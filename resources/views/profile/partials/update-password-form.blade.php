<form method="post" action="{{ route('password.update') }}" >
    @csrf
    @method('put')
    <fieldset>
        <legend>Password change</legend>
        <div class="row">
            <div class="col-md-12">
                <x-input-label for="current_password" :value="__('Current Password')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                <x-input-label for="password" :value="__('New Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
    </fieldset>
    @if (session('status') === 'password-updated')
        <h5
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="error"
        >{{ __('Changes Saved.') }}</h5>
    @endif
    <div class="btn-wrapper">
        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
    </div>
</form>
