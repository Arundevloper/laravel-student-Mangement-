<!-- resources/views/update_profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Profile</title>
    
    <!-- Link your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
@include('navbar');
<div class="container">
    <h2>Update Student Profile</h2>
    <form action="{{ route('update.profile') }}" method="post">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="{{ $student->first_name }}" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="{{ $student->last_name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="{{ $student->dob }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password">

        <button type="submit">Update Profile</button>
    </form>
</div>

</body>
</html>
