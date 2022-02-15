@extends('layout')

@section('title', $termekek->termek_nev)

@section('content')
    <h1> {{ $termekek->termek_nev }}</h1>
    <p>A termék ára: {{ $termekek->ar }} Ft</p>
    <p>Elérhető mennyiség: {{ $termekek->mennyiseg }} db</p>
    <p>Elérhető-e jelenleg a termék: {{ $termekek->elerheto_e }} </p>
@endsection
