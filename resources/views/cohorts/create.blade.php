@extends('layouts.app')

@section('content')
    <h1>Create Cohort</h1>

    <form method="POST" action="{{ route('cohorts.store', $academyId) }}">
        @csrf
        <label for="name">Cohort Name</label>
        <input type="text" name="name" id="name" required>

        <button type="submit">Create Cohort</button>
    </form>
@endsection
