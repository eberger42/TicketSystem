<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportArticleRequest;
use App\Http\Requests\UpdateSupportArticleRequest;
use App\Models\SupportArticle;

class SupportArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supportArticles = SupportArticle::all();
        return response()->json($supportArticles, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupportArticleRequest $request)
    { 
        $data = $request->validated();

        $supportArticle = SupportArticle::create($data);
        return response()->json($supportArticle, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supportArticle = SupportArticle::findOrFail($id);
        return response()->json($supportArticle, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupportArticleRequest $request, SupportArticle $supportArticle)
    {
        $data = $request->validated();

        $supportArticle->update($data);

        return response()->json($supportArticle, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupportArticle $supportArticle)
    {
        $supportArticle->delete();
        return response()->json(null, 204);
    }
}
