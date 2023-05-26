<?php

namespace App\Services\Book;

use App\Http\Requests\Book\CreateRequest;
use App\Http\Requests\Book\EditRequest;
use App\Models\Book;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookServiceInterface
{
    public function getBooksByCategorySlug(string $slug) : LengthAwarePaginator;

    public function getBookBySlug(string $slug) : Book;

    public function createBook(CreateRequest $request) : bool;

    public function editBookById(int $id, EditRequest $request) : bool;

    public function deleteBookById(int $id) : bool;
}
