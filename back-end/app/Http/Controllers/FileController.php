<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::all();
        return response()->json($files, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFileRequest $request)
    {
        $data = $request->validated();

        $file = File::create($data);
        return response()->json($file, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return response()->json($file, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileRequest $request, File $file)
    {
        $data = $request->validated();

        $file->update($data);

        return response()->json($file, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $file->delete();
        return response()->json(null, 204);
    }
}
