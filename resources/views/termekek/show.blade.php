@extends('layout')

@section('title', $termek->person)

@section('content')
    <h1> {{ $termek->termek_nev }}</h1>
    <p>A termék ára: {{ $termek->ar }} Ft</p>
    <p>Elérhető mennyiség: {{ $termek->mennyiseg }} db</p>
    <p>Elérhető-e jelenleg a termék: {{ $termek->elerheto_e }} </p>
@endsection
