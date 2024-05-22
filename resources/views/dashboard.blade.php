@extends('layouts.template')
@section('title', 'La tua Agenda')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2> @include('layouts.navigation')
    </x-slot>
<div class="login">
    <div class="py-12" style="margin-bottom: 160px;margin-top:160px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    {{ __("You're logged in!") }} <br>
                    <a href="/projects" class="btn btn-outline-secondary ms-5 rounded-3">I Miei Progetti</a>

                </div>
            </div>
        </div>
    </div></div>
@endsection
