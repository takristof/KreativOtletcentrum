<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use Illuminate\Http\Request;
use App\Http\Requests\TermekekRequest;

class TermekekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termekek = Termekek::orderBy('id')->get();
        return view('termekek.index', [ 'termekek' => $termekek ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('termekek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TermekekRequest $request)
    {
        $adatok = $request->only(['termek_nev', 'ar', 'mennyiseg','elerheto-e']);
        $termek = new Termekek();
        $termek->fill($adatok);
        $termek->save();
        return redirect()->route('termekek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function show(Termekek $termekek)
    {
        return view('termekek.show', ['termekek' => $termekek]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function edit(Termekek $termekek)
    {
        return view('termekek.edit', ['termekek' => $termekek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function update(TermekekRequest $request, Termekek $termek)
    {
        $adatok = $request->only(['termek_nev', 'ar', 'mennyiseg','elerheto-e']);
        $termek->fill($adatok);
        $termek->save();
        return redirect()->route('statues.show', $termek->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termekek $termek)
    {
        $termek->delete();
        return redirect()->route('termekek.index');
    }
}
