@extends('backend.layouts.master')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-md-12 center">
        <h3>Edit Blog</h3>
        <hr/>
        <form action="{{ route('admin.blog.update',$blog->id ) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $blog->title }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea type="text" name="description" class="form-control">{{ $blog->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="oldimage">Old Image</label></br>
                <img src="{!! asset('backend/img/'. $blog->image) !!}" width="200" height="100"></br>
                <label for="oldimage">Blog New Image (optional)</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
@endsection