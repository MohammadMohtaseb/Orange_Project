@extends('dashboard.master')
@section('title', 'Students')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h2 class="font-w600 mb-2 mr-auto">Students</h2>
            <a href="{{ route('student.create') }}" class="btn btn-success" style="color: white">
                <i class="fa fa-plus"></i> Add Student
            </a>
        </div>

        <!-- Search input -->
        <input type="text" id="search" placeholder="Search students..." class="form-control mb-3">

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="color: white">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Academy</th>
                        <th>Cohort</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="student-table-body">
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->academy->name }}</td>
                        <td>{{ $student->cohort->name }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $student->picture) }}" alt="Student Picture" width="100">
                        </td>
                        <td>
                            <a href="{{ route('student.view', $student->id) }}" class="btn btn-info btn-sm" >
                                <i class="fa fa-eye"></i> View
                            </a>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('student.delete', $student->id) }}" method="POST" style="display:inline-block; ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div id="pagination-links">
            {{ $students->links() }}
        </div>
    </div>
</div>

@include('dashboard.layout.footer')
@endsection
