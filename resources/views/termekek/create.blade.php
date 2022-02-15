@extends('layout')

@section('content')
    <h1>Új termék</h1>


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method='POST' action="{{ route('termekek.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Termék neve:<br>
            <input type="text" name="termek_nev" value="{{ old('termek_nev') }}">
            @error('termek_nev')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Ár:<br>
            <input type="number" name="ar" value="{{ old('ar') }}">
            @error('ar')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Mennyiég:<br>
            <input type="number" name="mennyiseg" value="{{ old('mennyiseg') }}">
            @error('mennyiseg')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Elérhető-e:<br>
            <input type="radio" id="elerheto_e" name="elerheto_e" value="1">
        <label for="elerheto_e">Igen</label><br>
        <input type="radio" name="elerheto_e" value="0">
        <label for="elerheto_e">Nem</label><br>
            @error('elerheto_e')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Hozzáad" class="btn btn-primary">
        </div>
    </form>
@endsection
