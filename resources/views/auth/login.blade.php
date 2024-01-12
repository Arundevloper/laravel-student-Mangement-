<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Link your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
@include('navbar');



<div class="container">

 <form action="{{ route('login-user') }}" method="post">
        @csrf
        @if(session('success'))
        <p style="color: red;">{{ session('success') }}</p>
    @endif
        <h2> Student Login</h2>
      
  
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>

        <p class="message">Not registered? <a href="{{ route('register.save') }}">Create an account</a></p>
        @if (session('warning'))
    <div class="alert alert-warning">
    <p style="color: red;">  {{ session('warning') }}</p>
    </div>
@endif
    </form>
</div>

</body>
</html>
