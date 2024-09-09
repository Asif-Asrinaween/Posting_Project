@extends('Layouts.master')
@section('content')
<h1>Posting page</h1>

<div class="row">
    <div class="col-md-6 mx-auto">
        @foreach ($posts as $item)
        <div class="card mt-2">
            <img src="{{ asset('upload/'. $item->image) }}" class="card-img-top" alt="photo is is not loaded.">
            <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <a href="#" class="btn btn-primary">Show</a>
        </div>
        </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</div>

@endsection
