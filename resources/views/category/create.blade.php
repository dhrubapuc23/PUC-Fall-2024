@extends('layout.master')
@section('title')
    Category Page
@endsection
@section('content')
<div class="mt-10"></div>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Category</h4>
                <a href="{{route('category.index')}}" class="btn btn-primary float-right">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"/>
                        @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                        @error('description')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" checked />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    
@endsection