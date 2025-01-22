{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academies</title>
</head>
<body style="color: white"> --}}
    @extends('dashboard.master')
    @section('title', 'Academy')
@section('content')
    <div class="content-body" >
        <div class="container-fluid">
            <h2>Add Academy</h2>
            <form action="{{ route('academy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Email Input -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                     @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="description" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
                     @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="location" class="form-label">Location:</label>
                    <input type="location" name="location" id="location" class="form-control" value="{{ old('location') }}" required>
                     @error('location')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="picture" class="form-label">Picture:</label>
                    <input type="file" name="picture" id="picture" class="form-control" required>
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="d-flex justify-content-between">
                    <a href="{{ route('academies') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success text-white">Add Academy</button>
                </div>
            </form>

    </div>
        </div>
        @include('dashboard.layout.footer')
        @endsection
    {{-- </div> --}}

{{-- </body>
</html> --}}
