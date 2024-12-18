@extends('layouts.app')

@section('content')
    <h1>Edit Academy</h1>

    <form method="POST" action="{{ route('academies.update', $academy->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Academy Name</label>
        <input type="text" name="name" id="name" value="{{ $academy->name }}" required>

        {{-- <label for="governate">Governate</label>
        <input type="text" name="governate" id="governate" value="{{ $academy->governate }}" required> --}}

        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>

        @if (isset($academy) && $academy->picture)
    <div>
        <img src="{{ asset('storage/' . $academy->picture) }}" alt="Current Picture" width="150">
    </div>
@endif


        <button type="submit">Update Academy</button>
    </form>
@endsection
