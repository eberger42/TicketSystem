<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        /* $data = $request->validated();

        $comment = Comment::create($data);

        return response()->json($comment, 201); */

        try {
            $data = $request->validated();
            $comment = Comment::create($data);

            return response()->json($comment, 201);
        } catch (QueryException $e) {
            // Handle database-related errors
            return response()->json(['error' => 'Database error'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return response()->json($comment, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        /* $data = $request->validated();

        $comment->update($data);

        return response()->json($comment, 200); */

        try {
            $data = $request->validated();
            return $data;
            $comment->update($data);

            return response()->json($comment, 200);
        } catch (QueryException $e) {
            // Handle database-related errors
            return response()->json(['error' => 'Database error'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}
