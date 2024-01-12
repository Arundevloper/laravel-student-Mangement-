
 <nav class="navbar">
        <div class="logo">Student Management</div>
        @if(session()->has('loginId'))
                {{-- User is logged in --}}
        <ul class="nav-links">
      
            <li><a href="{{ route('edit.profile') }}">Update</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
        @else
                {{-- User is not logged in --}}
                <ul class="nav-links">
      
            <li><a href="{{ route('edit.profile') }}">Admin Login</a></li>
            <li><a href="{{ route('login') }}">Student Login</a></li>
        </ul>
        @endif
    </nav>

