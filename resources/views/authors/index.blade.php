@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Add New Author</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Books Count</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->books_count }}</td>
            <td>
                <a href="{{ route('authors.show', $author) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('authors.destroy', $author) }}" method="POST" class="d-inline">
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