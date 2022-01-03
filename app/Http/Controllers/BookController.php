<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\BaseRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        $books = $this->bookRepository->getAll();
        return response()->json($books);
    }

    public function delete($id)
    {
        $this->bookRepository->delete($id);
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        $book = $this->bookRepository->store($request);
        return response()->json(['data'=>$book,'success'=>true]);
    }

    public function edit($id)
    {
        $book = $this->bookRepository->getById($id);
        return response()->json(['data'=>$book]);

    }

    public function update(Request $request, $id)
    {
        $book = $this->bookRepository->update($id,$request);
        return response()->json(['data'=>$book,'success'=>true]);
    }
}
