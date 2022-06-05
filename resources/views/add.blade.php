@extends('layout')
@section('content')
<form action="add" method="post">
{{@csrf_field()}}
    name: <input type="text" name="name" id=""> <br><br>
    age: <input type="number" name="age" id=""> <br><br>
    city: <input type="text" name="city" id=""> <br><br>
    Country: <input type="text" name="country" id=""> <br><br>
    <input type="Submit"><br><br>
    

    <!-- <a href="student/delete"><button>Delete</button></a> -->
</form>
@endsection