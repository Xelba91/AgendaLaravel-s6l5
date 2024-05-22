<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crea Attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/activities" method="post">
                        @csrf
                        <input type="hidden" name="project_id" value="{{ $project_id }}">

                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci nome...">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="description" class="form-label">Descrizione</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci descrizione...">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="type" class="form-label">Priorità</label>
                            <select class="form-select" name="priority">
                                <option value="very_low">very low</option>
                                <option value="low">low</option>
                                <option value="medium">medium</option>
                                <option value="high">high</option>
                                <option value="very_high">very high</option>
                            </select>
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="start_date" class="form-label">Data inizio</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="end_date" class="form-label">Data fine</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-outline-success w-50 rounded-5">CREA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
