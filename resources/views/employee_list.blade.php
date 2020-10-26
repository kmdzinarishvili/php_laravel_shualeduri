@extends("home")

@section("content")

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Position</th>
            <th>Phone</th>
            <th>Position</th>
            <th>Status</th>
            <th>Edit</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->surname}}</td>
            <td>{{$employee->position}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->position}}</td>
            @if($employee->is_hired)
                <td>Hired</td>
            @else
                <td>Not Hired</td>
            @endif
            <td><a href="{{ route('employee.edit', $employee->id) }}">edit</a></td>
        </tr>
        @endforeach
    </table>
@endsection
