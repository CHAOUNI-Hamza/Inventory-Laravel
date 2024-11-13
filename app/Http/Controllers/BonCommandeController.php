<?php

namespace App\Http\Controllers;

use App\Models\BonCommande;
use App\Http\Requests\StoreBonCommandeRequest;
use App\Http\Requests\UpdateBonCommandeRequest;

class BonCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBonCommandeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonCommandeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function show(BonCommande $bonCommande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function edit(BonCommande $bonCommande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBonCommandeRequest  $request
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBonCommandeRequest $request, BonCommande $bonCommande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonCommande $bonCommande)
    {
        //
    }
}
