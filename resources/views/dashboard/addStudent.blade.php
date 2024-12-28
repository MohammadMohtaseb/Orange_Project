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
            <h2>Add Student</h2>
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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

                <!-- Cohort Select -->
                <div class="form-group mb-3">
                    <label for="cohort_id" class="form-label">Cohort:</label>
                    <select name="cohort_id" id="cohort_id" class="form-control" style="color: white; background-color: #FF7900;" required>
                        <option value="" style="color: white; background-color: #333;">Select a cohort</option>
                        @foreach ($cohorts as $cohort)
                            <option value="{{ $cohort->id }}" {{ old('cohort_id') == $cohort->id ? 'selected' : '' }}>
                                {{ $cohort->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <!-- Email Input -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                     @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                     @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="employment_status" class="form-label">Employment Status:</label>
                    <input type="text" name="employment_status" id="employment_status" class="form-control" value="{{ old('employment_status') }}" required>
                     @error('employment_status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="linkedin" class="form-label">linkedin:</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin') }}" required>
                     @error('linkedin')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="picture" class="form-label">Student Picture:</label>
                    <input type="file" name="picture" id="picture" class="form-control" accept="image/*">
                    @error('picture')
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
