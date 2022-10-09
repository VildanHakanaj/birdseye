<x-guest-layout>


    <div class="auth-card">

        <div class="auth-card__title">
            Register
        </div>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
            <div class="auth-card__input-group">
                <label for="email">{{__("Email")}}</label>
                <input type="email" id="email" name="email" value="{{old("email")}}">
            </div>

            <!-- Password -->
            <div class="auth-card__input-group">
                <label for="password">{{__("Password")}}</label>
                <input id="password"
                       type="password"
                       name="password"
                       required
                       autocomplete="new-password"
                />
            </div>
            <div class="auth-card__input-group">
                <label for="password">{{__("Password")}}</label>
                <input id="password"
                       type="password"
                       name="password"
                       required
                       autocomplete="new-password"
                />
            </div>

            <button type="submit" class="auth-card__button--primary">
                {{ __('Sign Up') }}
            </button>

            <div class="action">
                {{ __('Already have an account?') }}
                <a href="{{ route('login') }}">
                    {{__('Login')}}
                </a>
            </div>
        </form>
    </div>

</x-guest-layout>
