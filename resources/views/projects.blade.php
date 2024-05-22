@extends('layouts.template')
@section('title', 'Qui Crei i tuoi progetti e le attività')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-between">
            {{ __('Progetti') }}
            <a href="/projects/create" class="btn btn-outline-success rounded-3 mb-2">Crea nuovo progetto</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($projects)
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Scadenza</th>
                                <th></th>
                            </tr>

                            @foreach($projects as $p)
                                <tr>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->expiration_date}}</td>
                                    <td>
                                        <a href="/projects/{{$p->id}}" class="btn btn-outline-secondary rounded-3">INFO</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection