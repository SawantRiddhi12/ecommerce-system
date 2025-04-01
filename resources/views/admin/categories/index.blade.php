@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Categories</h3>

            <!-- Search Form -->
            <div class="card-tools">
                <form action="{{ route('categories.index') }}" method="GET" class="form-inline">
                    <div class="input-group input-group-sm">
                        <input type="text" name="search" class="form-control form-control-navbar" placeholder="Search categories" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-navbar">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-body">
            <!-- Display any validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Add New Category Button -->
            <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus"></i> Add New Category
            </a>

            @if($categories->isEmpty())
                <p>No categories found.</p>
            @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <div>
                    <strong>Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{ $categories->total() }} categories</strong>
                </div>
                <div>
                    {{ $categories->appends(request()->query())->links('pagination::bootstrap-4') }} <!-- Pagination links styled with Bootstrap -->
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
