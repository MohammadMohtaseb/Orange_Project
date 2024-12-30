
@extends('dashboard.master')
@section('title', 'Student')
@section('content')
<div class="content-body" >
    <div class="container-fluid">
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h2 class="font-w600 mb-2 mr-auto">View Students</h2>
        </div>

<p style="color: white"><strong>Academy :</strong> {{ $student->academy->name }}</p>
<p style="color: white"><strong>Cohort :</strong> {{ $student->name }}</p>
<p style="color: white"><strong>Name :</strong> {{ $student->name }}</p>
<p style="color: white"><strong>Email :</strong> {{ $student->email }}</p>
<p style="color: white"><strong>LinkedIn :</strong> <a href="{{ $student->linkedin }}" target="_blank" style="color: white">{{ $student->linkedin }}</a></p>
<p style="color: white"><strong>Employment Status :</strong> {{ $student->employment_status }}</p>
<p style="color: white"><strong>Picture:</strong>   <img src="{{ asset('storage/' . $student->picture) }}" alt="Student Picture" width="100"></p>
<a href="{{ route('students') }}" class="btn btn-secondary">Back</a>

    </div>
</div>

@include('dashboard.layout.footer')
@endsection
</body>
</html>
