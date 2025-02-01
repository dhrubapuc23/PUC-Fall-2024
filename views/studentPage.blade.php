@extends('layout.master')
@section('title')
Student Page
@endsection

@section('heading')
    Student Details
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Date of birth</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->date_of_birth}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
    
    
