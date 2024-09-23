@extends('dashboard.template')

@section('main_section')
@include('dashboard.includes.alerts')

<h2>Add Blog Post</h2>

<form action="{{ route('blog.add') }}" enctype="multipart/form-data" method="POST">
    @csrf

    <!-- Category -->
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-control form-control-lg" name="category_id" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->category_id }}" {{ old('category_id') == $category->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Author -->
    <div class="mb-3">
        <label class="form-label">Author</label>
        <select class="form-control form-control-lg" name="author_id" required>
            <option value="">Select Author</option>
            @foreach($authors as $author)
                <option value="{{ $author->author_id }}" {{ old('author_id') == $author->author_id ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
        @error('author_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Title -->
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control form-control-lg" type="text" name="title" value="{{ old('title') }}" placeholder="Enter Blog Title" required />
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Content -->
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea class="form-control form-control-lg" name="content" rows="5" placeholder="Enter Blog Content" required>{{ old('content') }}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Featured Image -->
    <div class="mb-3">
        <label class="form-label">Featured Image</label>
        <input class="form-control form-control-lg" type="file" name="featured_image" />
        @error('featured_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit Blog</button>
    </div>
</form>
@endsection
