@extends('master')

@section('content')
    <h1>All Movies</h1>

    <a href="{{ route('students.create') }}" class="button">Add New Movie</a>

    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>date of birth</th>
            <th>address</th>
            <th>Actions</th>
        </tr>
        @if (isset($students) and !empty($students))
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="button">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
