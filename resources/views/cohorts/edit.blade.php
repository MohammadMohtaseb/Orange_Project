@extends('layouts.app')

@section('content')
    <h1>Edit Cohort</h1>

    <form method="POST" action="{{ route('cohorts.update', [$academyId, $cohort->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Cohort Name</label>
        <input type="text" name="name" id="name" value="{{ $cohort->name }}" required>

        <button type="submit">Update Cohort</button>
    </form>
@endsection
