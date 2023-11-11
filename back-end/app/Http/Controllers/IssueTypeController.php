<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueTypeRequest;
use App\Http\Requests\UpdateIssueTypeRequest;
use App\Models\IssueType;

class IssueTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issueTypes = IssueType::all();
        return response()->json($issueTypes, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueTypeRequest $request)
    {
        $data = $request->validated();

        $issueType = IssueType::create($data);

        return response()->json($issueType, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(IssueType $issueType)
    {
        return response()->json($issueType, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueTypeRequest $request, IssueType $issueType)
    {
        $data = $request->validated();

        $issueType->update($data);

        return response()->json($issueType, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssueType $issueType)
    {
        $issueType->delete();
        return response()->json(null, 204);
    }
}
