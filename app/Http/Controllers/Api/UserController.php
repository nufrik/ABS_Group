<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UserStoreRequest;
use App\Http\Resources\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $created_user = User::create($request->validated());

        return new UserResource($created_user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStoreRequest $request, User $userId)
    {
        $userId->update($request->validated());

        return new UserResource($userId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $userId)
    {
        $userId->delete();
        return response('null', Response::HTTP_NO_CONTENT);
    }
}
