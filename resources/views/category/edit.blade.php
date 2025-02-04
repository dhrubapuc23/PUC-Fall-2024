@extends('layout.master')
@section('title')
    Category Page
@endsection
@section('content')
<div class="mt-10"></div>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category</h4>
                <a href="{{route('category.index')}}" class="btn btn-primary float-right">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.update',$category->id)}}"  method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}"/>
                        @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$category->description}}</textarea>
                        @error('description')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{$category->status == 1 ? 'checked' : ''}} />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    
@endsection