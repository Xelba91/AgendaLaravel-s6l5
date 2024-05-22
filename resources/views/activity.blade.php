<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($activity)
                        <p><b>Nome attività: </b>{{$activity->name}}</p>
                        <p><b>Descrizione: </b>{{$activity->description}}</p>
                        <p><b>Livello di priorità: </b>{{$activity->priority}}</p>
                        <p><b>Data inizio: </b>{{$activity->start_date}}</p>
                        <p><b>Data fine: </b>{{$activity->end_date}}</p>
                        <p class="text-secondary mt-3">Creazione attività : {{$activity->created_at}} </p>
                        @if($activity->updated_at)
                            <p class="text-secondary">Ultima modifica : {{$activity->updated_at}} </p>
                        @endif

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="/activities/{{$activity->id}}/edit" class="btn btn-outline-info w-25 rounded-5">MODIFICA</a>
                            
                            <form action="/activities/{{$activity->id}}" method="post" class="w-25">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger w-100 rounded-5">ELIMINA</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
