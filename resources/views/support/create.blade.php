<!-- resources/views/support/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Need Support?</h1>
    <p>If you have any questions or need assistance, please fill out the form below.</p>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('support.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="query">Your Query</label>
            <textarea name="query" id="query" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
