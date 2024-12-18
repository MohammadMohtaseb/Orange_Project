@extends('layouts.app')

@section('content')
    <h1>Cohorts</h1>
    <ul>
        @foreach ($cohorts as $cohort)
            <li>
                {{ $cohort->name }}
                <a href="{{ route('cohorts.edit', [$academyId, $cohort->id]) }}">Edit</a>
                <form action="{{ route('cohorts.destroy', [$academyId, $cohort->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('cohorts.create', $academyId) }}">Create Cohort</a>
@endsection
