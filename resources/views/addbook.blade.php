<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
/* public/css/styles.css */

body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.admin-container {
    display: flex;
}

.admin-sidebar {
    width: 250px;
    background-color: #3498db;
    color: #fff;
    padding: 20px;
}

.admin-sidebar h2 {
    margin-bottom: 20px;
}

.admin-sidebar ul {
    list-style: none;
    padding: 0;
}

.admin-sidebar li {
    margin-bottom: 10px;
}

.admin-sidebar a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.admin-sidebar a.active {
    background-color: #2980b9;
    padding: 8px;
    border-radius: 5px;
}

.admin-content {
    flex: 1;
    padding: 20px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

        </style>
</head>
<body>
@include('navbar')
<div class="admin-container">
    <div class="admin-sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">Add Books</a></li>
            <li><a href="#">Assign Books</a></li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>

    <div class="admin-content">
        <h1>Add Books</h1>

        <!-- Form to add books -->
        <form action="{{route('admin.addbook')}}" method="post">
            @csrf

            <label for="title">Book Title:</label>
            <input type="text" name="title" required>

            <label for="author">Author:</label>
            <input type="text" name="author" required>

            <button type="submit">Add Book</button>
        </form>

        <hr>

        <h1>Assign Books to Students</h1>

        <!-- Form to assign books to students -->
        <form action="{{route('admin.assignbook')}}" method="post">
            @csrf

            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" required>

            <label for="book_id">Book ID:</label>
            <input type="text" name="book_id" required>

            <button type="submit">Assign Book</button>
        </form>
    </div>
</div>

</body>
</html>
