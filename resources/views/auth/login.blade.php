<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="text-center m-b-20">Sign In</h3>
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="m-t-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required />
            </div>
            <div class="row m-t-10 m-b-10">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <x-social-login />
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forget your password?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Sign In') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __("Don't have an account?") }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
