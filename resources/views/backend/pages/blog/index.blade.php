@extends('backend.layouts.master')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-md-12 center">
        <h3>All Blog</h3>
        <hr/>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($blogs as $blog)
                    <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>
                    <img src="{!! asset('backend/img/'. $blog->image) !!}" width="150" height="70">
                    </td>
                    <td>
                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">
                            <i class="fas fa-user-edit ml-2"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.blog.delete', $blog->id) }}" class="btn btn-primary">
                            <i class="fas fa-user-times ml-2"></i>
                        </a>
                    </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection