@extends('layout')

@section('content')

    <table>
        <tr>
            <th>Person</th>
            <th>Height</th>
            <th>Price</th>
        </tr>
    @foreach ($termekek as $termek)
        <tr>
            <td>
                <a href="{{ route('termekek.show', $termek->id) }}">{{ $termek->person }}</a>
            </td>
            <td>{{ $termek->height }}</td>
            <td>{{ $termek->price }}</td>
            <td>
                @include('delete-termek-button',  ['termekId' => $termek->id])
            </td>
        </tr>
    @endforeach
    </table>
@endsection
