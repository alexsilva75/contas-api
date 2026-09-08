<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoConta;
use App\Http\Requests\StoreTipoContaRequest;

class TipoContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return TipoConta::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoContaRequest $request)
    {
        //
        $tipoConta = TipoConta::create($request->all());
        return $tipoConta;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
