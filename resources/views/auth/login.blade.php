<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <!-- any error -->

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form class="space-y-6" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <div class="mt-2">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" />
                    </div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between">
                    <x-input-label for="password" :value="__('Password')" />
                    <div class="text-sm">
                        @if (Route::has('password.request'))
                            <x-anchor-link href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </x-anchor-link>
                        @endif
                    </div>
                </div>
                <div class="mt-2">

                    <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <x-input-label for="remember_me" class="inline-flex items-center text-blue-900">
                    <x-text-input-checkbox id="remember_me" type="checkbox" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
                </x-input-label>
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-primary-button>
                    {{ __('Sign in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>