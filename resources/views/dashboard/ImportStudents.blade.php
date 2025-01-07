{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body style="color: white"> --}}
    @extends('dashboard.master')
    @section('title', 'Student')
@section('content')
    <div class="content-body" >
        <div class="container-fluid">
            <h2>Import Students</h2>
            <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                @csrf

{{-- academy input --}}
                <div class="form-group mb-3">
                    <label for="academy_id" class="form-label">Academy:</label>
                    <select name="academy_id" id="academy_id" class="form-control" style="color: white; background-color: #FF7900;" required>
                        <option value="" style="color: white; background-color: #333;">Select an academy</option>
                        @foreach ($academies as $academy)
                            <option value="{{ $academy->id }}" {{ old('academy_id') == $academy->id ? 'selected' : '' }}>
                                {{ $academy->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <!-- File Excel Input -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="file" name="file" required id="name" class="form-control" value="{{ old('name') }}" required>
                     @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="d-flex justify-content-between">
                    <a href="{{ route('students') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success text-white">Add Student</button>
                </div>
            </form>
    </div>
        </div>

        @include('dashboard.layout.footer')

        <script>
            document.getElementById('academy_id').addEventListener('change', function() {
                var academyId = this.value;
                var cohortSelect = document.getElementById('cohort_id');

                cohortSelect.innerHTML = '<option value="" style="color: white; background-color: #333;">Select a cohort</option>';

                if (academyId) {
                    fetch(`/cohorts/${academyId}`)
                        .then(response => response.json())
                        .then(cohorts => {
                            cohorts.forEach(cohort => {
                                var option = document.createElement('option');
                                option.value = cohort.id;
                                option.textContent = cohort.name;
                                cohortSelect.appendChild(option);
                            });
                        });
                }
            });
        </script>
        @endsection
        {{-- </div> --}}
{{-- </body>
</html> --}}
