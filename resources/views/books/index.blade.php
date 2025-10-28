@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->isbn }}</td>
            <td>${{ number_format($book->price, 2) }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection