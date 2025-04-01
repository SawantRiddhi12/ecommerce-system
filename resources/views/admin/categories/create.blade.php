{{-- resources/views/admin/categories/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Category</button>
    </form>
</div>
@endsection
