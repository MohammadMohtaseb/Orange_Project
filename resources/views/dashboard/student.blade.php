
<style>
    .pagination .page-item .page-link {
        color: orange;
    }

    .pagination .page-item.active .page-link {
        background-color: orange;
        border-color: orange;
    }

    .pagination .page-item:hover .page-link {
        color: white;
        background-color: orange;
    }

    .pagination .page-item.disabled .page-link {
        color: gray;
    }
</style>
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

            <a style="margin-left:10px" href="{{ route('students.goImport') }}" class="btn btn-primary" style="color: white">
                <i class="fa fa-plus"></i> Import Students
            </a>
        </div>

        <!-- Search input -->
        <form method="GET" action="{{ route('students') }}">
            <input type="text" id="search" name="search" value="{{ request('search') }}" placeholder="Search students..." class="form-control mb-3">
        </form>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table  table-striped" style="color: orange">
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
                <tbody id="student-table-body" style="color: black">
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->academy->name }}</td>
                        <td>{{ $student->cohort->name }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <img src="{{$student->picture}}" alt="Student Picture" width="100">
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
        <div style="display: flex; justify-content: center; align-items: center;">
            {{ $students->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
{{-- <script>
    function redirectToRoute(route) {
    window.location.href = route;
}

</script> --}}

@include('dashboard.layout.footer')
@endsection
