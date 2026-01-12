<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Field -->
            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <x-checkbox id="remember_me" name="remember" />
                <label for="remember_me" class="ms-2 text-sm text-gray-600">
                    {{ __('Remember me') }}
                </label>
            </div>

            <!-- Action Links and Button -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-6">
                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-sm text-gray-600 hover:text-indigo-600 underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- Create Account -->
                <div class="text-sm text-gray-700 text-center md:text-left">
                    <span>No account yet?</span>
                    <a href="{{url('register')}}" class="text-indigo-600 hover:underline font-medium js-show-register">
                        Create Account
                    </a>
                </div>

                <!-- Login Button -->
                <x-button class="w-full md:w-auto">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>