<x-guest-layout>

    <div class="auth-card">
        <div class="auth-card__title">
            Login
        </div>

        <div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-card__input-group">
                <label for="email">{{__("Email")}}</label>
                <input type="email"
                       id="email"
                       name="email"
                       value="{{old("email")}}"
                       autofocus
                >
            </div>

            <!-- Password -->
            <div class="auth-card__input-group">
                <label for="password">
                    {{__("Password")}}
                </label>
                <input type="password" id="password" name="password" autocomplete="current-password">
            </div>


            <button type="submit" class="auth-card__button--primary">
                {{ __('Log in') }}
            </button>

            <div class="action">
                    Dont have an account?
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    {{ __('Sign Up') }}
                </a>
            </div>
        </form>


        </div>
    </div>
</x-guest-layout>
