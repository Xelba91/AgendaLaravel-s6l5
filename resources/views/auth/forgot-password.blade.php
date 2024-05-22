@extends('layouts.template')
@section('titolo', 'Password dimenticata? Dont worry')
@section('paragrafo', 'se sei gia registrato acceedi facilmente dal link in basso❤️')
@section('content')
<x-guest-layout>
    @section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="login w-full max-w-md p-6 bg-white rounded-lg shadow-md">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <br>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-guest-layout>
@endsection