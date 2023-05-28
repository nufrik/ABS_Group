<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AuthorStoreRequest;
use App\Http\Resources\Resources\AllAuthorsResource;
use App\Models\Author;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AllAuthorsResource::collection(Author::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorStoreRequest $request)
    {
        $created_author = Author::create($request->validated());

        return new AllAuthorsResource($created_author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $authorId)
    {
        return new AllAuthorsResource($authorId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorStoreRequest $request, Author $authorId)
    {
        $authorId->update($request->validated());

        return new AllAuthorsResource($authorId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $authorId)
    {
        $authorId->delete();
        return response('null', Response::HTTP_NO_CONTENT);
    }
}
