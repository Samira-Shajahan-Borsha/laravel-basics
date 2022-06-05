@extends('layout')
@section('content')
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>city</th>
        <th>country</th>
        <th>Edit Action</th>
        <th>Delete Action</th>
        
    </tr>

    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->city}}</td>
        <td>{{$student->country}}</td>  
        <td><a href="/student/edit/{{ $student -> id}}">Edit</a></td>  
        <td><a href="/student/delete/{{ $student -> id}}">Delete</a></td>  
    </tr>
    @endforeach
    
</table>
@endsection