<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cohort</title>

    <link rel="stylesheet" href="{{ asset('cohorts.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navigation Bar -->
  @extends('layout-front.header')

    <!-- Header Section -->
    <main>
        <div class="containerC">
            <div class="head">
                <p class="head-text">Introducing our proud graduates from the <span
                        style="color: #ff7900">academy</span> !</p>
            </div>


            <br>
            <br>

            <!-- Breadcrumb Navigation -->
            <nav class="breadcrumb">
                <a href="{{ route('watch.home') }}">Home</a> &gt;
                <a href="{{ route('academy.showCohorts', $academy->id) }}" style="color: #FF7900"><span>Cohorts</span></a>
            </nav>

            <!-- Text Section -->
            <div class="highlight-section">
                <p>
                    Here are our outstanding academy
                    <span class="highlighted-text">academy</span>graduates, proudly showcasing their cohorts!
                </p>
            </div>

            <!-- Cards Section -->
            <div class="card-containerC">
                <!-- Card Pair 1 -->
                <div class="card-pair">
                    <!-- Card 1 -->
                    @foreach ($cohorts as $cohort)
                    <div class="cardC">
                        <div class="card-image">
                            <img src=" {{ asset('storage/' .$cohort->picture) }} " alt="صورة">
                        </div>
                        <div class="card-content">
                            <h2>Champions of Achievement:{{ $cohort->name }}</h2>
                            <span class="card-date">{{ $cohort->years }}</span>
                            <div class="footer-card">
                                <p>
                                    These graduates represent the best of our academy, showcasing dedication, hard work,
                                    and
                                    excellence. Each cohort stands as a testament to their perseverance and bright
                                    future ahead!
                                </p>
                               <a href="{{ route('watch.cohorts', $cohort->id) }}"> <button class="more-button">More</button> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Card 2 -->
                </div>
            </div>

            <!-- Pagination -->

        </div>
        </div>
    </main>
   @extends('layout-front.footer')
</body>

</html>
