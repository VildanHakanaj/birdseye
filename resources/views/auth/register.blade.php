<x-guest-layout>


    <x-auth-card>
        <x-slot name="title">
            Register
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
            <div class="input-group">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>

            <div class="action">
                {{ __('Already have an account?') }}
                <a href="{{ route('login') }}">
                    {{__('Login')}}
                </a>
            </div>
        </form>
    </x-auth-card>

</x-guest-layout>
