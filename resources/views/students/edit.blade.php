<!-- resources/views/students/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
        </div>
        <div class="form-group">
            <label for="cohort_id">Cohort</label>
            <select name="cohort_id" id="cohort_id" class="form-control" required>
                @foreach ($cohorts as $cohort)
                    <option value="{{ $cohort->id }}" {{ $student->cohort_id == $cohort->id ? 'selected' : '' }}>{{ $cohort->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="job_title">Job Title (Optional)</label>
            <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $student->job->job_title ?? '' }}">
        </div>
        <div class="form-group">
            <label for="company_name">Company Name (Optional)</label>
            <input type="text" name="company_name" id="company_name" class="form-control" value="{{ $student->job->company_name ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Student</button>
    </form>
@endsection
