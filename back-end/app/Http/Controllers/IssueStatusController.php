<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueStatusRequest;
use App\Http\Requests\UpdateIssueStatusRequest;
use App\Models\IssueStatus;

class IssueStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issueStatuses = IssueStatus::all();
        return response()->json($issueStatuses, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueStatusRequest $request)
    {
        $validatedData = $request->validated();

        $issueStatus = IssueStatus::create($validatedData);
        return response()->json($issueStatus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $issueStatus = IssueStatus::findOrFail($id);
        return response()->json($issueStatus, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueStatusRequest $request, IssueStatus $issueStatus)
    {
        $validatedData = $request->validated();

        $issueStatus->update($validatedData);
        return response()->json($issueStatus, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssueStatus $issueStatus)
    {
        $issueStatus->delete();
        return response()->json(null, 204);
    }
}
