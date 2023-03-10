<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')
    <fieldset>
        <div class="row mb-50">
            <div class="col-md-6">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="error" :messages="$errors->get('name')" />
            </div>
            <div class="col-md-6">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="error" :messages="$errors->get('email')" />
            </div>
        </div>
    </fieldset>
    @if (session('status') === 'profile-updated')
        <h5
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="error"
        >{{ __('Changes Saved.') }}</h5>
    @endif
    <div class="btn-wrapper" style="margin-bottom: 30px">
        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
    </div>
</form>
