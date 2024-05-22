@extends('layouts.template')
@section('titolo', 'Registrazione utente')
@section('paragrafo', '')

@section('content') 
<div class="login">
    <form method="POST" action="{{ route('register') }}" class="mt-4">
        @csrf
        <br>
        <!-- Name -->
        <div class="mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="nome" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div><br>

        <!-- Email Address -->
        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <br>
        <!-- Password -->
        <div class="mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <br>
        <!-- Confirm Password -->
        <div class="mb-3">
            <x-input-label for="password_confirmation" :value="__('Conferma Password')" />
            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <br><br>
        <div class="d-flex justify-content-end">
            <a class="btn btn-link me-4" href="{{ route('login') }}">
                {{ __('Già registrato?') }}
            </a>
            <x-primary-button :disabled="!$errors->isEmpty()" class="disabled-opacity">
                {{ __('Registrati') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endsection