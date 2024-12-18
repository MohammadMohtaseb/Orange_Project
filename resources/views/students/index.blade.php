<!-- resources/views/students/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Cohort</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->cohort->name }}</td>
                    <td>{{ $student->job->job_title ?? 'N/A' }}</td>
                    <td>{{ $student->job->company_name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
