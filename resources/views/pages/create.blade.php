@extends('master')

@section('content')
    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>date of birth:</label><br>
        <input type="date" name="date_of_birth"><br><br>

        <label>address:</label><br>
        <input type="text" name="address"><br><br>

        <button type="submit">Add student</button>
    </form>
@endsection
