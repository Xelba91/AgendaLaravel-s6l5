
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-between">
            {{ __('Crea un Nuovo Progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/projects" method="post">
                        @csrf

                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci nome...">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="description" class="form-label">Descrizione</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci descrizione...">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="type" class="form-label">Tipo Progetto</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Tipo di Progetto...(front-end, back-end...)">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="language" class="form-label">Linguaggi di programmazione</label>
                            <input type="text" class="form-control" id="language" name="language" placeholder="Linguaggi di programmazione...">
                        </div>
                        <div class="mb-3 bg-input p-2 rounded-4">
                            <label for="expiration_date" class="form-label">Data di scadenza</label>
                            <input type="date" class="form-control" id="expiration_date" name="expiration_date">
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
