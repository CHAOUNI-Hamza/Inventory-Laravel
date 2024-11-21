<?php

namespace App\Http\Controllers;

use App\Models\BonCommande;
use App\Http\Requests\StoreBonCommandeRequest;
use App\Http\Requests\UpdateBonCommandeRequest;
use App\Http\Resources\BonCommandeResource;

class BonCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = BonCommande::orderBy('id', 'desc')->get();
        $totalCommande = BonCommande::count();

        return response()->json([
            'data' => BonCommandeResource::collection($commandes),
            'total' => $totalCommande
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBonCommandeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonCommandeRequest $request)
    {
        $commande = new BonCommande();

        $commande->ref = $request->input('ref');
        $commande->categorie_bdc_id = $request->input('categorie_bdc_id');
        $commande->date = $request->input('date');

        $commande->save();

        return new BonCommandeResource($commande);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function show(BonCommande $commande)
    {
        return new BonCommandeResource($commande);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBonCommandeRequest  $request
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBonCommandeRequest $request, BonCommande $commande)
    {
        $commande->ref = $request->input('ref');
        $commande->categorie_bdc_id = $request->input('categorie_bdc_id');
        $commande->date = $request->input('date');

        $commande->save();

        return new BonCommandeResource($commande);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BonCommande  $bonCommande
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonCommande $commande)
    {
        $commande->delete();
        return response()->noContent();
    }
}
