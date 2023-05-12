@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <div class="container-lg">
        <h1 class="text-primary py-5">Lista Treni</h1>
        <ul>
            @foreach ($trains as $train)
                <li class="py-2">
                    {{ $train->id }} - {{ $train->azienda }} - {{ $train->stazione_di_partenza }} -
                    {{ $train->stazione_di_arrivo }} - {{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}
                    - {{ $train->codice_treno }} - {{ $train->carrozze }} - {{ $train->in_orario }} -
                    {{ $train->cancellato }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection
