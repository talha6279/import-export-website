@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Menu Categories</h3>
            <a href="{{ route('category.add') }}" class="btn btn-primary">Add Category</a>
        </div>
    </div>
</div>
<table class="table table-hover table-responsive col-12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $cat)
            <tr>
                <td>{{ $cat->category_id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{$cat->description}}</td>
                <td>{{ $cat->created_at }}</td>
                <td>
                    <a href="{{ route('category.edit', $cat->category_id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('category.delete', $cat->category_id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $cat->category_id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
