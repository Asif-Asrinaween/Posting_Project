@extends('Layouts.master')
@section('content')
    <form action="{{ route('Admin.update',['Admin'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Edit Post:</h1>
        <div class="form-group">
            <label>Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <div>
            <label>Upload Image:</label>
            <input type="file" name="image">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
                </div>


            <label>Description</label>
            <textarea name="description" rows="5" class="form-control" required placeholder="enter your post">{{ $post->description }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="col-md-2 mt-2">
                <button class="btn btn-primary" type="submit">Update</button>
                </div>
        </div>
</div>
</div>
</form>

@endsection
