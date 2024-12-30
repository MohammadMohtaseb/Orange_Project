{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Cohort</title>
</head>
<body style="color: white"> --}}
    @extends('dashboard.master')
    @section('title', 'Cohort')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <h2>Edit Cohort</h2>
            <form action="{{ route('cohort.update', $cohort->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $cohort->name) }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="years">Years:</label>
                    <input type="text" name="years" id="years" class="form-control" value="{{ old('name', $cohort->years) }}" required>
                     @error('years')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="form-group">
                    <label for="academy_id">Academy</label>
                    <select name="academy_id" id="academy_id" class="form-control" style="color: white; background-color: #FF7900;" required>
                        <option value="" style="color: white; background-color: #333;">Select an academy</option>
                        @foreach ($academies as $academy)
                            <option value="{{ $academy->id }}"
                                {{ $cohort->academy_id == $academy->id ? 'selected' : '' }}
                                style="color: white; background-color: #333;">
                                {{ $academy->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="picture">Picture:</label>
                    <input type="file" name="picture" id="picture" class="form-control">
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success" style="color: white">Update</button>
                <a href="{{ route('cohorts') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    @include('dashboard.layout.footer')
    @endsection
{{-- </body>
</html> --}}
