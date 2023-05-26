<?php

namespace App\Services\Book;

use App\Http\Requests\Book\CreateRequest;
use App\Http\Requests\Book\EditRequest;
use App\Models\Book;
use Illuminate\Pagination\LengthAwarePaginator;


class BookService implements BookServiceInterface
{
    public function getBooksByCategorySlug(string $slug) : LengthAwarePaginator
    {
        $books = Book::join('categories', 'categories.id', '=', 'books.category_id')
            ->where('categories.slug', '=', $slug)->select('books.*')->paginate(5);

        return $books;
    }

    public function getBookBySlug(string $slug) : Book
    {
        $book = Book::where('slug', '=', $slug)->first();
        return $book;
    }

    public function createBook(CreateRequest $request) : bool
    {
        $data = $request->validated();
        $translit = str_slug($data['title']);
        $path = $request->file('cover')->store('/covers', 'public');
        $book = new Books();
        $book->title = $request->input('title');
        $book->slug = $translit;
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->rating = $request->input('rating');
        $book->cover = $path;
        $book->category_id = $request->input('category_id');

        return $book->save();
    }

    public function editBookById(int $id, EditRequest $request) : bool
    {
        $book = Books::findOrFail($id);

        $data = $request->validated();
        $translit = str_slug($data['title']);
        $path = $request->file('cover')->store('/covers', 'public');
        $book->title = $request->input('title');
        $book->slug = $translit;
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->rating = $request->input('rating');
        $book->cover = $path;
        $book->category_id = $request->input('category_id');

        return $book->save();

    }

    public function deleteBookById(int $id) : bool
    {
        return Books::destroy($id);
    }
}
