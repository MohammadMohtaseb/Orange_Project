<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('student.css') }}">
</head>
<body>

    <!-- Navigation Bar -->
   @extends('layout-front.header')

    <!-- Header Section -->
    <main>
        <div class="containerSa">
            <div class="heads">
                <h1>Take student experience to the next level</h1>
            </div>
            <br>
            <br>

            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb">
                <a href="{{ route('watch.home') }}">Home</a> &gt;
                <a href="{{ route('watch.cohorts', $cohort->id) }}" style="color: #FF7900"><span>Student</span></a>
            </div>

            <!-- Text Section -->
            <div class="highlight-section">
                <h1>
                    Meet our top graduates from
                    <span class="highlighted-text">Orange Coding Academy</span>,
                    showcasing exceptional talent and innovative skills that set them apart in the tech industry.
                </p>
            </div>

            <!-- Cards Section -->
            <div class="card-containerS">
                <!-- Card 1 -->
                @foreach ($students as $student)
                <div class="cardS">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{$student->picture}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>{{ $student->name }}</h2>
                    <div class="card-body">
                        <p><strong>linkedin:</strong> </p> <a href="{{ $student->linkedin }}" style="text-decoration: none" target="_blank"><p>linkedin link</p></a>
                        <p><strong>Employment Status:</strong></p> <p>
                            {{ $student->employment_status }}
                        {{$student->job_title ? 'as ' . $student->job_title : ''}}
                        {{$student->company ? 'at ' . $student->company : ''}}
                        </p>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
        </div>
    </main>
   @extends('layout-front.footer')
</body>
</html>
