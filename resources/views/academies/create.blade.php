@extends('layouts.app')

@section('content')
    <h1>Create Academy</h1>

    <form method="POST" action="{{ route('academies.store') }}">
        @csrf
        <label for="name">Academy Name</label>
        <input type="text" name="name" id="name" required>

        {{-- <label for="governate">Governate</label>
        <input type="text" name="governate" id="governate" required> --}}

        <button type="submit">Create Academy</button>
    </form>
@endsection
