<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAffectationRequest;
use App\Http\Requests\UpdateAffectationRequest;
use App\Http\Resources\AffectationResource;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Affectation::query();

        if ($request->filled('materiel_id')) {
            $query->where('materiel_id', $request->input('materiel_id'));
        }

        if ($request->filled('service_id')) {
            $query->where('service_id', $request->input('service_id'));
        }

        if ($request->filled('assigned_by')) {
            $query->where('assigned_by', $request->input('assigned_by'));
        }

        if ($request->filled('date')) {
            $query->whereDate('date', $request->input('date')); // Filtrer par date exacte
        }

        // Récupérer les données triées
        $affectations = $query->orderBy('id', 'desc')->get();
        $totalAffectations = $query->count();

        // Retourner les résultats avec les ressources
        return response()->json([
            'data' => AffectationResource::collection($affectations),
            'total' => $totalAffectations,
        ]);

        /*$affectations = Affectation::orderBy('id', 'desc')->get();
        $totalAffectations = Affectation::count();

        return response()->json([
            'data' => AffectationResource::collection($affectations),
            'total' => $totalAffectations
        ]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAffectationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAffectationRequest $request)
    {
        $affectation = new Affectation();

        $affectation->materiel_id = $request->input('materiel_id');
        $affectation->service_id = $request->input('service_id');
        $affectation->assigned_by = $request->input('assigned_by');
        $affectation->quantity = $request->input('quantity');
        $affectation->date = $request->input('date');

        $affectation->save();

        return new AffectationResource($affectation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function show(Affectation $affectation)
    {
        return new AffectationResource($affectation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAffectationRequest  $request
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAffectationRequest $request, Affectation $affectation)
    {

        $affectation->materiel_id = $request->input('materiel_id');
        $affectation->service_id = $request->input('service_id');
        $affectation->assigned_by = $request->input('assigned_by');
        $affectation->quantity = $request->input('quantity');
        $affectation->date = $request->input('date');

        $affectation->save();

        return new AffectationResource($affectation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affectation $affectation)
    {
        $affectation->delete();
        return response()->noContent();
    }
}
