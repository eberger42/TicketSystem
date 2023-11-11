<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Models\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::all();
        return response()->json($issues);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueRequest $request)
    {
        $data = $request->validated()

        $issue = Issue::create($data);
        return response()->json($issue, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $issue = Issue::findOrFail($id);
        return response()->json($issue, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueRequest $request, Issue $issue)
    {
        $data = Issue::create($request)
        $issue->update($data);
        return response()->json($issue, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return response()->json(null, 204);
    }
}
