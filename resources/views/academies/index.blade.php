@extends('layouts.app')

@section('content')
    <h1>Academies</h1>
    <ul>
        @foreach ($academies as $academy)
            <li>
                {{ $academy->name }}
                <a href="{{ route('academies.edit', $academy->id) }}">Edit</a>
                <form action="{{ route('academies.destroy', $academy->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('academies.create') }}">Create Academy</a>
@endsection
