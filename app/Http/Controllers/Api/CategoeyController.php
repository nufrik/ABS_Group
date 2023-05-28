<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Resources\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $created_category = Category::create($request->validated());

        return new CategoryResource($created_category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categoryId)
    {
        return new CategoryResource($categoryId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreRequest $request, Category $categoryId)
    {
        $categoryId->update($request->validated());

        return new CategoryResource($categoryId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categoryId)
    {
        $categoryId->delete();

        return response('null', Response::HTTP_NO_CONTENT);
    }
}
