<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientUserRequest;
use App\Http\Requests\UpdateClientUserRequest;
use App\Models\ClientUser;

class ClientUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientUsers = ClientUser::all();
        return response()->json($clientUsers, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientUserRequest $request)
    {
        $data = $request->validated();

        $clientUser = ClientUser::create($data);

        return response()->json($clientUser, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientUser $clientUser)
    {
        return response()->json($clientUser, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientUserRequest $request, ClientUser $clientUser)
    {
        $data = $request->validated();

        $clientUser->update($data);

        return response()->json($clientUser, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientUser $clientUser)
    {
        $clientUser->delete();
        return response()->json(null, 204);
    }
}
