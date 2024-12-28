<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zenix - @yield('title') </title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('/vendor/chartist/css/chartist.min.css') }}.">
    <link href="{{ asset('/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>
<body>


    <div id="main-wrapper">


        @include('dashboard.layout.header')

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <ul class="navbar-nav header-right main-notification">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" width="20" alt=""/>
									<div class="header-info">

										<span>{{auth()->user()->name}}</span>
										<small>{{auth()->user()->email}}</small>

									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>

                                    <form action="{{ route('logout') }}" method="POST" class="dropdown-item ai-icon">
										@csrf
										<button type="submit" style="background: none; border: none; padding: 0; color: inherit; cursor: pointer;">
											<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="logoutml-2">Logout</span>
										</button>
									</form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        @include('dashboard.layout.sidebar')

        @yield('content')

        @include('dashboard.layout.footer')


    </div>

    <script src="{{ asset('/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('/vendor/chart.js/Chart.bundle.min.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('/vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('/vendor/apexchart/apexchart.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('/js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ asset('/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('/js/custom.min.js') }}"></script>
	<script src="{{ asset('/js/deznav-init.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');
    const studentTableBody = document.getElementById('student-table-body');
    const paginationLinks = document.getElementById('pagination-links');

    // Function to fetch students from the server with search term
    function fetchStudents(query = '') {
        const url = new URL(window.location.href);
        url.searchParams.set('search', query); // Add search query to the URL

        // Fetch students data with pagination and search term
        fetch(url)
            .then(response => response.text())
            .then(data => {
                // Update table with the new student list
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = data;
                const newTableBody = tempDiv.querySelector('#student-table-body');
                const newPaginationLinks = tempDiv.querySelector('#pagination-links');

                // Update table body with new rows
                studentTableBody.innerHTML = newTableBody.innerHTML;

                // Update pagination links
                if (newPaginationLinks) {
                    paginationLinks.innerHTML = newPaginationLinks.innerHTML;
                }
            })
            .catch(error => {
                console.error('Error fetching student data:', error);
            });
    }

    // Trigger AJAX request when search input changes
    searchInput.addEventListener('input', function() {
        const query = searchInput.value.trim();
        fetchStudents(query);  // Fetch students based on search query
    });

    // Trigger an initial fetch for the students table (no search term)
    fetchStudents();

    // Pagination handling
    paginationLinks.addEventListener('click', function(event) {
        const pageLink = event.target.closest('a');
        if (pageLink && pageLink.href) {
            const url = new URL(pageLink.href);
            const query = searchInput.value.trim();  // Keep the search query
            url.searchParams.set('search', query);

            // Perform the fetch with the new URL for the page
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = data;
                    const newTableBody = tempDiv.querySelector('#student-table-body');
                    const newPaginationLinks = tempDiv.querySelector('#pagination-links');

                    // Update table body with new rows
                    studentTableBody.innerHTML = newTableBody.innerHTML;

                    // Update pagination links
                    if (newPaginationLinks) {
                        paginationLinks.innerHTML = newPaginationLinks.innerHTML;
                    }
                })
                .catch(error => {
                    console.error('Error fetching student data:', error);
                });
        }
    });
});
    
</script>

</body>
</html>
