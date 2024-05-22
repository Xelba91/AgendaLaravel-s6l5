

@extends('layouts.template')
@section('titolo', 'Quà puoi scegliere cosa fare con i tuoi progetti e aggiungere nuove attività')
@section('paragrafo', '')
@section ('content')
<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Progetto') }}
            </h2>
            <div class=" d-flex justify-content-between gap-3">
                <a href="/projects/{{$project->id}}/edit" class="btn btn-outline-info rounded-5">MODIFICA</a>
                                
                <form action="/projects/{{$project->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger w-100 rounded-5">ELIMINA</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12 mb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><b>Nome:</b> {{$project->name}} </p>
                    <p><b>Descrizione:</b> {{$project->description}} </p>
                    <p><b>Tipo di progetto:</b> {{$project->type}} </p>
                    <p><b>Linguaggi di programmazione:</b> {{$project->language}} </p>
                    <p><b>Data Scadenza:</b> {{$project->expiration_date}} </p>
                    <p class="text-secondary mt-3">Creazione progetto : {{$project->created_at}} </p>
                    <p class="text-secondary">Ultima modifica : {{$project->updated_at}} </p>

                    <a type="button" class="btn btn-primary rounded-3 my-3" href="/activities/create?id={{$project->id}}">
                        Aggiungi nuova attività
                    </a>
                            @if(count($project->activities) > 0)
                                <div class="mt-2 d-flex justify-content-between">
                                    <b>Attività:</b>
                                    <div id="priority-legend">
                                        <span class="me-3"><i class="bi bi-circle-fill me-1 very_low"></i>very low</span>
                                        <span class="me-3"><i class="bi bi-circle-fill me-1 low"></i>low</span>
                                        <span class="me-3"><i class="bi bi-circle-fill me-1 medium"></i>medium</span>
                                        <span class="me-3"><i class="bi bi-circle-fill me-1 high"></i>high</span>
                                        <span class="me-3"><i class="bi bi-circle-fill me-1 very_high"></i>very_high</span>
                                    </div>

                                </div>
                                <ul class="list-group mt-3">
                                    @foreach ($project->activities as $activity)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                {{$activity->name}}
                                                <i class="bi bi-circle-fill ms-3 {{$activity->priority}}"></i>
                                            </div>
                                                <a type="button" class="btn btn-outline-secondary rounded-3" href="/activities/{{$activity->id}}">
                                                    Vedi Attività
                                                </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Non ci sono attività</p>
                            @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection