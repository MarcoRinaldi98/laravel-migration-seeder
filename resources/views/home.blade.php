@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <div class="container-lg">
        <h1 class="text-primary py-5">Lista Treni</h1>
        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                    <th class="text-primary" scope="col">ID</th>
                    <th class="text-primary" scope="col">Azienda</th>
                    <th class="text-primary" scope="col">Stazione di partenza</th>
                    <th class="text-primary" scope="col">Stazione di arrivo</th>
                    <th class="text-primary" scope="col">Orario di partenza</th>
                    <th class="text-primary" scope="col">Orario di arrivo</th>
                    <th class="text-primary" scope="col">Codice Treno</th>
                    <th class="text-primary" scope="col">Numero Carrozze</th>
                    <th class="text-primary" scope="col">In orario</th>
                    <th class="text-primary" scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th class="text-primary" scope="row">{{ $train->id }}</th>
                        <td class="text-info">{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td class="text-uppercase text-warning">{{ $train->codice_treno }}</td>
                        <td class="text-center">{{ $train->carrozze }}</td>
                        <td class="text-center fw-bold {{ $train->in_orario ? 'text-success' : 'text-danger' }}">
                            {{ $train->in_orario }}</td>
                        <td class="text-center fw-bold {{ $train->cancellato ? 'text-success' : 'text-danger' }}">
                            {{ $train->cancellato }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
