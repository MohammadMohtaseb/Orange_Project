<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('student.css') }}">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <!-- Left: Logo -->
        <div class="logo">
            <img src="logo.png" alt="Orange Logo">
        </div>
        <!-- Center: Navigation Links -->
        <ul class="nav-links">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">How It Works?</a></li>
        </ul>
        <!-- Right: Search and Login Button -->
        <div class="right-nav">
            <span class="search-icon">🔍</span>
            <a href="#" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Header Section -->
    <main>
        <div class="container">
            <div class="head">
                <h1>Take student experience to the next level</h1>
            </div>

            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb">
                <a href="#">Home</a> &nbsp;&rsaquo;&nbsp;
                <span class="current">Task 1</span>
            </div>

            <!-- Text Section -->
            <div class="highlight-section">
                <p>
                    Meet our top graduates from
                    <span class="highlighted-text">Orange Coding Academy</span>,
                    showcasing exceptional talent and innovative skills that set them apart in the tech industry.
                </p>
            </div>

            <!-- Cards Section -->
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>
                  <!-- Card 3 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>
                  <!-- Card 4 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>
                  <!-- Card 5 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>
                  <!-- Card 6 -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <br>
                    <img class="avatar" src="{{asset('user.jpg')}}" alt="Jackie Chui">
                    <br>
                    <br>
                    <h2>Jackie Chui</h2>
                    <div class="card-body">
                        <p><strong>Superpower:</strong> </p> <p> design</p>
                        <p><strong>Weakness:</strong></p> <p> Visual design</p>
                        <p><strong>Favorite Figma tool:</strong></p> <p> Selection Colors</p>
                    </div>
                </div>


            </div>
            <!-- Pagination -->

            <div class="pagination">
                <a href="#" class="prev-btn">Show More</a>

            </div>
        </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact</a>
            </div>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
