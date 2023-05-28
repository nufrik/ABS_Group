<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\BookStoreRequest;
use App\Http\Resources\Resources\BookCategoryResource;
use App\Models\Book;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookCategoryResource::collection(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $created_book = Book::create($request->validated());

        return new BookCategoryResource($created_book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $bookId)
    {
        return new BookCategoryResource($bookId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, Book $bookId)
    {
        $bookId->update($request->validated());

        return new BookCategoryResource($bookId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $bookId)
    {
        $bookId->delete();

        return response('null', Response::HTTP_NO_CONTENT);
    }
}
