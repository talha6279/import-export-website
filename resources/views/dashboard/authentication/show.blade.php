@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Users Log In Data </h3>

        </div>
    </div>
</div>

<table class="table table-hover table-striped table-responsive my-0 col-12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Usertype</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->author_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->usertype }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->author_id) }}" class="btn btn-sm btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{ route('user.delete', $user->author_id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $user->author_id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
