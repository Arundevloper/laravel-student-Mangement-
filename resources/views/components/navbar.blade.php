<!-- resources/views/includes/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your App Name</a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @if(session()->has('loginId'))
                {{-- User is logged in --}}
                <li class="nav-item">
                    <span class="nav-link">Welcome, {{ $data->name }}</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('update.profile') }}">Update Profile</a>
                </li>
            @else
                {{-- User is not logged in --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.login') }}">Student Login</a>
                </li>
                
            @endif
        </ul>
    </div>
</nav>
