@extends('dashboard\template')
@section('main_section')
    @include('dashboard\includes\alerts')
    <h3>Update Menu Category</h3>
    <form action="{{ route('category.update', $category->category_id  ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}"
                placeholder="Enter category name" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Update Category Description</label>
            <input class="form-control" type="text" value="{{ $category->description }}" name="description" />
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Category</button>
        </div>
    </form>
@endsection
