<!-- resources/views/support/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Support Queries</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Query</th>
                <th>Date Submitted</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($queries as $query)
                <tr>
                    <td>{{ $query->name }}</td>
                    <td>{{ $query->email }}</td>
                    <td>{{ $query->mobile }}</td>
                    <td>{{ $query->query }}</td>
                    <td>{{ $query->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
