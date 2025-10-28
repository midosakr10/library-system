@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Book</h1>
    
    @if($authors->count() > 0)
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            
            <div class="mb-3">
                <label for="author_id" class="form-label">Author</label>
                <select class="form-control" id="author_id" name="author_id" required>
                    <option value="">Select Author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            
            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication Year</label>
                <input type="number" class="form-control" id="publication_year" name="publication_year" 
                       min="1900" max="{{ date('Y') + 1 }}" required>
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            
            <button type="submit" class="btn btn-success">Save Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    @else
        <div class="alert alert-warning">
            <h4>No Authors Found!</h4>
            <p>You need to create authors first before adding books.</p>
            <a href="{{ route('authors.create') }}" class="btn btn-primary">Create Author</a>
        </div>
    @endif
</div>
@endsection