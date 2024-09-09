@extends('Layouts.master')
@section('content')
    <h1>Admin</h1>


    <div class="row">
        <div class="col-md-6 mx-auto">
            <a href="{{ route('Admin.create') }}" class="btn btn-primary mb-2">Create Post</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('delete',['id'=>$item->id]) }}"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('Admin.edit',['Admin'=>$item->id]) }}"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
