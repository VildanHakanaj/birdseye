<x-guest-layout>
    <x-auth-card>
        <x-slot name="title">
                Login
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <x-input-label for="email" :value="__('Email address')"/>
                <x-text-input id="email" type="email" name="email" :value="old('email')" autofocus/>
            </div>

            <!-- Password -->
            <div class="input-group">
                <x-input-label for="password" :value="__('Password')"/>
                <x-text-input id="password"
                              type="password"
                              name="password"
                              autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')"/>
            </div>

            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>

            <div class="action">
                    Dont have an account?
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    {{ __('Sign Up') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
