<!-- kế thừa view master -->
@extends('students-layout.master')

<!-- thay đổi nội dung đơn giản -->
@section('title', 'Title list extends')

@section('header', 'Header list extends')

<!-- thay đổi nội dung phức tạp -->
@section('contert')

    List
    <table border='1' class='table'>
        <thead>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }} </td>
                    <td>
                        @if ($student->gender == 0)
                            Female
                        @elseif ($student->gender == 1)
                            Male
                        @else
                            Nothing
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('footer', 'Footer list extends')