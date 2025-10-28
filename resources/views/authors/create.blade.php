@extends('layouts.app')

@section('content')
<h1>Add New Author</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save Author</button>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection