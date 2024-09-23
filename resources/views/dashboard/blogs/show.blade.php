@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')

{{-- <table class="table table-hover table-striped table-responsive my-0" style="width: 100%; height: 100%;">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Topic</th>
            <th scope="col">Content</th>
            <th scope="col">Author Name</th>
            <th scope="col">Featured Image</th>
            <th scope="col">Description Image</th>
            <th scope="col">Tags</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blog as $blogs)
            <tr>
                <td>{{ $blogs->id }}</td>
                <td>{{ $blogs->topic }}</td>
                <td>{{ $blogs->content }}</td>
                <td>{{ $blogs->author_name }}</td>
                <td> <img src="{{asset('uploads/featured-images/'. $blogs->featured_image )}}" style="height: 80px; width:100px; border-radius:50%;" alt=""></td>
                <td> <img src="{{asset('uploads/description-images/'. $blogs->description_image )}}" style="height: 80px; width:100px; border-radius:50%;" alt=""></td>
                <td>{{ $blogs->tags }}</td>
                <td>{{ $blogs->created_at }}</td>
                <td>{{ $blogs->updated_at }}</td>
                <td>
                    <a href="{{ route('blog.edit', $blogs->id) }}" class="btn btn-sm btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{ route('blog.delete', $blogs->id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $blogs->id }}">Delete</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table> --}}
<div class="row">
<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Blogs Detail</h3>
            <a href="{{ route('blog.add') }}" class="btn btn-primary">Add Blog</a>
        </div>
    </div>
</div>
@foreach($blog as $blogs)
    <div class="col-md-6">
        <div class="card blog-card">
            <img src="{{asset('uploads/blogs/featured-images/'. $blogs->featured_image )}}" class="card-img-top" alt="{{ $blogs->title }}">
            <div class="card-body">
                <div class="blog-date">
                    {{ \Carbon\Carbon::parse($blogs->created_at)->format('d F Y') }}
                </div>
                <h5 class="card-title">{{ $blogs->title }}</h5>
                <p class="card-category">By {{ $blogs->author ? $blogs->author->name : 'Unknown' }} / 
                    {{ $blogs->category ? $blogs->category->name : 'Unknown' }}</p>
                <a href="{{ route('blog.edit', $blogs->blog_id) }}" class="btn btn-link text-uppercase font-weight-bold">Read More</a>
                
                <a href="{{ route('blog.edit', $blogs->blog_id) }}" class="btn btn-sm btn-primary">Edit</a>
            
        
                <a href="{{ route('blog.delete', $blogs->blog_id) }}" class="btn btn-sm btn-danger">Delete</a>
            
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection

