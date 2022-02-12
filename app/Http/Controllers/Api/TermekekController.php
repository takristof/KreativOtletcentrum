<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Termekek;
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
        $termekek = Termekek::all();
        return response()->json($termekek);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TermekekRequest $request)
    {
        $termek = new Termekek();
        $termek->fill($request->all());
        $termek->save();
        return response()->json($termek, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termekek  $termek
     * @return \Illuminate\Http\Response
     */
    public function show(Termekek $termek)
    {
        return response()->json($termek);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termekek $termek
     * @return \Illuminate\Http\Response
     */
    public function edit(termekek $termek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termekek $termek
     * @return \Illuminate\Http\Response
     */
    public function update(TermekekRequest $request, Termekek $termek)
    {
        $termek->fill($request->all());
        $termek->save();
        return response()->json($termek, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termekek  $termek
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Termekek::destroy($id);
        return response()->noContent();
    }
}
