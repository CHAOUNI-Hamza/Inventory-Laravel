<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Http\Requests\StoreMaterielRequest;
use App\Http\Requests\UpdateMaterielRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Resources\MaterielResource;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiel::orderBy('id', 'desc')->get();
        $totalMateriels = Materiel::count();

        return response()->json([
            'data' => MaterielResource::collection($materiels),
            'total' => $totalMateriels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterielRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterielRequest $request)
    {
        $materiel = new Materiel();

        $materiel->name = $request->input('name');
        $materiel->description = $request->input('description');
        $materiel->quantity = $request->input('quantity');
        $materiel->category_id = $request->input('category_id');
        $materiel->bon_commande_id = $request->input('bon_commande_id');
        //$materiel->stock = $request->input('stock');
        $materiel->num_inventaire = $request->input('num_inventaire');

        $materiel->save();

        return new MaterielResource($materiel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        return new MaterielResource($materiel);
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
        $materiel->name = $request->input('name');
        $materiel->description = $request->input('description');
        $materiel->quantity = $request->input('quantity');
        $materiel->category_id = $request->input('category_id');
        $materiel->bon_commande_id = $request->input('bon_commande_id');
        //$materiel->stock = $request->input('stock');
        $materiel->num_inventaire = $request->input('num_inventaire');

        $materiel->save();

        return new MaterielResource($materiel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)
    {
        $materiel->delete();
        return response()->noContent();
    }
}
