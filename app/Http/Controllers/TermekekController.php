<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use Illuminate\Http\Request;

class TermekekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termekek = Termekek::orderBy('termek_id')->get();
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termekek $termekek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termekek  $termekek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termekek $termekek)
    {
        //
    }
}
