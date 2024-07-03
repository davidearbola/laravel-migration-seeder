@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero di carrozze</th>
                <th scope="col">Stato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->company_name }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->number_of_carriages }}</td>
                    <td>
                        @if ($train->in_time == 0 && $train->deleted == 1)
                            Cancellato
                        @elseif($train->in_time == 0 && $train->deleted == 0)
                            In ritardo
                        @else
                            In Orario
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
