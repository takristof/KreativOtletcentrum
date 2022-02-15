@extends('layout')

@section('content')

    <table>
        <tr>
            <th>Termék neve</th>
            <th>Termék ára</th>
            <th>Termék mennyisége</th>
            <th>Termék elérhetősége</th>
        </tr>
    @foreach ($termekek as $termek)
        <tr>
            <td>
                <a href="{{ route('termekek.show', $termek->id) }}">{{ $termek->termek_nev }}</a>
            </td>
            <td>{{ $termek->ar }}</td>
            <td>{{ $termek->mennyiseg }}</td>
            <td>{{ $termek->elerheto_e }}</td>
        </tr>
    @endforeach
    </table>
@endsection
