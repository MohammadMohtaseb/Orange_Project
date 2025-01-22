<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture">
            <h5 class="mb-0 fs-20 text-black "><span class="font-w400">Hello,</span> {{auth()->user()->name}}</h5>
            <p class="mb-0 fs-14 font-w400" style="color: orange">{{auth()->user()->email}}</p>
        </div>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout" style="color: orange"></i>
                    <span class="nav-text" style="color: orange">Dashboard</span>
                </a>
                <ul aria-expanded="false" >
                    <li><a href="{{ route('users') }}" style="color: orange">Users</a></li>
                    <li><a href="{{ route('students') }}" style="color: orange">Students</a></li>
                    <li><a href="{{ route('academies') }}" style="color: orange">Academies</a></li>
                    <li><a href="{{ route('cohorts') }}" style="color: orange">Cohorts</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p style="color: orange"><strong>Orange Coding Academy Admin Dashboard</strong> © 2024 All Rights Reserved</p>
        </div>
    </div>
</div>
