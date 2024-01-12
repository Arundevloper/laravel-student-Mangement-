<!-- resources/views/students/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>
<body>
@include('navbar')
<div class="container">
    <h2>Student Registration</h2>


    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('register.save') }}" method="post">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>