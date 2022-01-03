<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\Impl\BookRepositoryInterface;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    public function __construct(Book $book)
    {
        $this->model = $book;
    }

    public function store($request)
    {
        $data = $request->only('title','code','author');
       return Book::create($data);
    }

    public function update($id, $request)
    {
        $data = $request->only('title','code','author');
         $book = Book::findOrFail($id);
        $book -> update($data);
        return $book;
    }
}
