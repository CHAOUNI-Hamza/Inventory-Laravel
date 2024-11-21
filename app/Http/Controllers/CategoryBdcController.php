<?php

namespace App\Http\Controllers;

use App\Models\CategoryBdc;
use App\Http\Requests\StoreCategoryBdcRequest;
use App\Http\Requests\UpdateCategoryBdcRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryBdcResource;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryBdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesbdc = CategoryBdc::orderBy('id', 'desc')->get();
        $totalcategoryBdcs = CategoryBdc::count();

        return response()->json([
            'data' => CategoryBdcResource::collection($categoriesbdc),
            'total' => $totalcategoriesbdc
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryBdcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryBdcRequest $request)
    {
        $categoryBdc = new CategoryBdc();

        $categoryBdc->name = $request->input('name');

        $categoryBdc->save();

        return new CategoryBdcResource($categoryBdc);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryBdc  $categoryBdc
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryBdc $categoriesbdc)
    {
        return new CategoryBdcResource($categoriesbdc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryBdcRequest  $request
     * @param  \App\Models\CategoryBdc  $categoryBdc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryBdcRequest $request, CategoryBdc $categoriesbdc)
    {
        $categoriesbdc->name = $request->input('name');
        $categoriesbdc->save();

        return new CategoryBdcResource($categoriesbdc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryBdc  $categoryBdc
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryBdc $categoriesbdc)
    {
        $categoriesbdc->delete();
        return response()->noContent();
    }
}
