{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Academy</title>
</head>
<body style="color: white"> --}}
    @extends('dashboard.master')
    @section('title', 'Academy')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <h2>Edit Academy</h2>
            <form action="{{ route('academy.update', $academy->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $academy->name) }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $academy->description) }}" required>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="picture">Picture:</label>
                    <input type="file" name="picture" id="picture" class="form-control">
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success" style="color: white">Update</button>
                <a href="{{ route('academies') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    @include('dashboard.layout.footer')
    @endsection
{{-- </body>
</html> --}}
