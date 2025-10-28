<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->latest()->get();
        return view('books.index', compact('books'));
    }

    public function create()
{
    $authors = Author::all();
    return view('books.create', compact('authors'));
}

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'isbn' => 'required|unique:books',
            'publication_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        $book->load('author');
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'publication_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully.');
    }
}