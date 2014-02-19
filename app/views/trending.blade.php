@extends('layout')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>Installs</th>
                <th>Formula</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formulas as $formula)
                <tr>
                    <td>{{ $formula->total }}</td>
                    <td>{{ $formula->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
