<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Http\Requests\StoreMaterielRequest;
use App\Http\Requests\UpdateMaterielRequest;

class MaterielController extends Controller
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
     * @param  \App\Http\Requests\StoreMaterielRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterielRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterielRequest  $request
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterielRequest $request, Materiel $materiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)
    {
        //
    }
}
