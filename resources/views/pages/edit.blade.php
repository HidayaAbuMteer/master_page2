@extends('master')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $student->name }}"><br><br>

        <label>date of birth:</label><br>
        <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}"><br><br>

        <label>address:</label><br>
        <input type="text" name="address" value="{{ $student->address }}"><br><br>



        <button type="submit">Update Student</button>
    </form>
@endsection
