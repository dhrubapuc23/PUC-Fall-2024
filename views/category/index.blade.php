@extends('layout.master')
@section('title')
    Category Page
@endsection
@section('content')
<div class="mt-10"></div>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Category List</h4>
                <a href="{{route('category.create')}}" class="btn btn-primary float-right">Add new category</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
    
@endsection