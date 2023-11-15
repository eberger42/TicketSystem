<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplatesRequest;
use App\Http\Requests\UpdateTemplatesRequest;
use App\Models\Templates;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::all();
        return response()->json($templates, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemplatesRequest $request)
    {
        $data = $request->validated();

        $template = Template::create($data);
        return response()->json($template, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Templates $templates)
    {
        return response()->json($template, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemplatesRequest $request, Templates $templates)
    {
        $data = $request->validated();

        $template->update($data);

        return response()->json($template, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Templates $templates)
    {
        $template->delete();
        return response()->json(null, 204);
    }
}
