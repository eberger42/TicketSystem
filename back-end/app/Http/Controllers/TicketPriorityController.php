<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketPriorityRequest;
use App\Http\Requests\UpdateTicketPriorityRequest;
use App\Models\TicketPriority;

class TicketPriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketPriorities = TicketPriority::all();
        return response()->json($ticketPriorities, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketPriorityRequest $request)
    {
        $data = $request->validated();

        $ticketPriority = TicketPriority::create($data);

        return response()->json($ticketPriority, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $ticketPriority = TicketPriority::findOrFail($id);
        return response()->json($ticketPriority, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketPriorityRequest $request, TicketPriority $ticketPriority)
    {
        $data = $request->validated();

        $ticketPriority->update($data);
        
        return response()->json($ticketPriority, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketPriority $ticketPriority)
    {
        $ticketPriority->delete();
        return response()->json(null, 204);
    }
}
