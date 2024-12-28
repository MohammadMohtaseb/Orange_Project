{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cohorts</title>
</head>
<body style="color: white"> --}}
    @extends('dashboard.master')
    @section('title', 'Cohort')
@section('content')
    <div class="content-body" >
        <div class="container-fluid">
            <h2>Add Cohort</h2>
            <form action="{{ route('cohort.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="academy_id" class="form-label">Academy:</label>
                    <select name="academy_id" id="academy_id" class="form-control" style="color: white; background-color: #FF7900;" required>
                        <option value=""  style="color: white; background-color: #333;">Select a Academy</option>
                        @foreach ($Academy as $Academies)
                            <option value="{{ $Academies->id }}"
                                {{ old('academy_id') == $Academies->id ? 'selected' : '' }}>
                                {{ $Academies->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group mb-3">
                    <label for="years" class="form-label">Years:</label>
                    <input type="text" name="years" id="years" class="form-control" value="{{ old('years') }}" required>
                     @error('years')
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
                    <a href="{{ route('cohorts') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add Academy</button>
                </div>
            </form>
    </div>
        </div>
    {{-- </div> --}}

    @include('dashboard.layout.footer')
    @endsection
{{-- </body>
</html> --}}
