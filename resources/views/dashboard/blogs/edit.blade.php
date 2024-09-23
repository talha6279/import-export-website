@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<h3>Update Blog Data</h3>
<form action="{{ route('blog.update', $blog->blog_id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control form-control-lg" type="text" name="title"
            value="{{ $blog->title}}" placeholder="Enter your Title" />
       @error('title')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <input class="form-control form-control-lg" type="text" name="content"
            value="{{ $blog->content}}" placeholder="Enter your Content" />
       @error('content')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

    <!-- Category Field -->
    <div class="mb-5 col-md-6">
                <label class="form-label">Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->category_id }}" {{ (old('category_id') ?? $blog->category_id) == $category->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
    <!-- Author Field -->
    <div class="mb-5 col-md-6">
                <label class="form-label">Author</label>
                <select class="form-control" name="author_id">
                    <option value="">Select Author</option>
                    @foreach ($author as $authors)
                        <option value="{{ $authors->author_id }}" {{ (old('author_id') ?? $blog->author_id) == $authors->author_id ? 'selected' : '' }}>
                            {{ $authors->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

<p>Existing Picture</p>
<img src="{{asset('uploads/blogs/featured-images/' . $blog->featured_image)}}" height="150" width="150" alt="">
    <div class="mb-3">
        <label class="form-label">Update Featured Picture</label>
        <input class="form-control form-control-lg" type="file" name="featured_image"/>
        @error('featured_image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Update Blog</button>
    </div>
</form>
@endsection
