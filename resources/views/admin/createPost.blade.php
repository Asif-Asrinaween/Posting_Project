@extends('Layouts.master')
@section('content')


    {{-- <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Create page</h1>
        <form action="{{ route('Admin.store') }}" method="POST" class="form-group">
            @csrf
            <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Title</label>
                <input type="text" class="form-control" name="title"
                placeholder="enter your title" required>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Description</label>
                    <textarea name="description"  cols="30" rows="10" class="form-control" required placeholder="enter your post"></textarea>
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
            </form>

        </div>
    </div> --}}




    <form action="{{ route('Admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Create Post</h1>
        <div class="form-group">
            <label>Title</label>
        <input type="text" name="title" placeholder="Enter your post" class="form-control" required>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror

            <div>
        <label>Upload Image:</label>
        <input type="file" name="image"  required>
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
            </div>

            <label>Description</label>
            <textarea name="description" rows="5" class="form-control" required placeholder="enter your post"></textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
                <div class="col-md-2 mt-2">
                <button class="btn btn-primary" type="submit">Save</button>
                </div>
        </div>
</div>
</div>
</form>

@endsection
