
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .container {
        
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        background-color: white;
        width: 600px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    .profile-card {
        padding: 20px;
        text-align: center;
    }

    .btn {
        margin-top: 10px;
    }

    .assigned-books {
        margin-top: 20px;
    }

    .assigned-books ul {
        list-style: none;
        padding: 0;
    }

    .assigned-books ul li {
        margin-bottom: 5px;
        background-color: #e9ecef;
        padding: 8px;
        border-radius: 5px;
    }

    h1 {
        color: #343a40;
    }

    h5 {
        color: #495057;
    }

    p {
        color: #6c757d;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-primary:hover, .btn-danger:hover {
        filter: brightness(90%);
    }
</style>
</head>
<body>
@include('navbar');
    <!-- Inside your HTML file -->

<div class="container">
    <div class="card">
        <div class="profile-card">
            <h1>Welcome, {{ $data->first_name}}!</h1>

            <h5>Student Profile</h5>
            <p><strong>Name:</strong> {{ $data->first_name." ".$data->last_name }}</p>
            <p><strong>Email:</strong> {{ $data->email }}</p>
            <p><strong>Date of Birth:</strong> {{ $data['dob'] }}</p>

            <h5 class="mt-4 mb-2">Assigned Books</h5>
            <div class="assigned-books">
        
            </div>             
<form action="{{ route('delete.account') }}" method="post">
    @csrf
  <button type="submit"> Delete Account</button>
</form>
        </div>
    </div>
</div>



</body>
</html>

