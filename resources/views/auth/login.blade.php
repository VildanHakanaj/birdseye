<x-guest-layout>
    <x-auth-card>
        <x-slot name="title">
            <a href="/">
                Birdseye
            </a>
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <x-input-label for="email" :value="__('Email address')"/>
                <x-text-input id="email" type="email" name="email" :value="old('email')" autofocus/>
                <x-input-error :messages="$errors->get('email')"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>
                <x-text-input id="password"
                              type="password"
                              name="password"
                              autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me"
                           type="checkbox"
                           name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
