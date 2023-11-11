<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketStatusRequest;
use App\Http\Requests\UpdateTicketStatusRequest;
use App\Models\TicketStatus;

class TicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketStatuses = TicketStatus::all();
        return response()->json($ticketStatuses, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketStatusRequest $request)
    {
        $data = $request->validated();

        $ticketStatus = TicketStatus::create($data);

        return response()->json($ticketStatus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ticketStatus = TicketStatus::findOrFail($id);
        return response()->json($ticketStatus, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketStatusRequest $request, TicketStatus $ticketStatus)
    {
        //
        $data = $request->validated();

        $ticketStatus->update($data);

        return response()->json($ticketStatus, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketStatus $ticketStatus)
    {
        $ticketStatus->delete();
        return response()->json(null, 204);
    }
}
