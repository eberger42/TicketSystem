<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssuePriorityRequest;
use App\Http\Requests\UpdateIssuePriorityRequest;
use App\Models\IssuePriority;

class IssuePriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issuePriorities = IssuePriority::all();
        return response()->json($issuePriorities, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssuePriorityRequest $request)
    {
        $data = $request->validated();

        $issuePriority = IssuePriority::create($data);

        return response()->json($issuePriority, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $issuePriority = IssuePriority::findOrFail($id);
        return response()->json($issuePriority, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssuePriorityRequest $request, IssuePriority $issuePriority)
    {
        $data = $request->validated();

        $issuePriority->update($data);

        return response()->json($issuePriority, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssuePriority $issuePriority)
    {
        $issuePriority->delete();
        return response()->json(null, 204);
    }
}
