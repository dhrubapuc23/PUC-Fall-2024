@extends('layout.master')
@section('title')
    Category Page
@endsection
@section('content')
<div class="col-md-12">
    @session('msg')
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endsession
        <div class="card">
            <div class="card-header" class= "d-flex justify-content-between align-items-center">
                <h4>Category List</h4>
                <a href="{{route('category.create')}}" class="btn btn-primary float-right">Add new category</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr class="text-center">
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->status == true ? 1 : 0}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('category.show',$category->id)}}" class="btn btn-info">Show</a>
                                <form action="{{route('category.destroy',$category->id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
    
@endsection