@extends('layout')
@section('content')

<form action="/student/update/{{ $id }}" method="post">
    {{@csrf_field()}}
    name: <input type="text" name="name" id=""> <br><br>
    age: <input type="number" name="age" id=""> <br><br>
    city: <input type="text" name="city" id=""> <br><br>
    Country: <input type="text" name="country" id=""><br><br>

    <input type="submit" value="Update"><br><br>


</form>

<form action="/student/delete/{{ $id }}" method="get">
  

    <input type="submit" value="Delete"><br><br>


</form>

@endsection