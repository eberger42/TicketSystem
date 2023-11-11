<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateTypeRequest;
use App\Http\Requests\UpdateTemplateTypeRequest;
use App\Models\TemplateType;

class TemplateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templateTypes = TemplateType::all();
        return response()->json($templateTypes, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemplateTypeRequest $request)
    {
        $data = $request->validated();

        $templateType = TemplateType::create($data);

        return response()->json($templateType, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TemplateType $templateType)
    {
        return response()->json($templateType, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemplateTypeRequest $request, TemplateType $templateType)
    {
        $data = $request->validated();

        $templateType->update($validatedData);
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemplateType $templateType)
    {
        $templateType->delete();
        return response()->json(null, 204);
    }
}
