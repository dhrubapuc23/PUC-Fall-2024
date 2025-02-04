@extends('layout.master')
@section('title')
    Category Page
@endsection
@section('content')
<div class="mt-10"></div>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Show Category Details</h4>
                <a href="{{route('category.index')}}" class="btn btn-primary float-right">Back</a>
            </div>
            <div class="card-body">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <p>
                            {{$category->name}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <p>
                            {{$category->description}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <p>
                            {{$category->status == true ? 1 : 0}}
                        </p>
                    </div>
            </div>
        </div>
</div>
    
@endsection