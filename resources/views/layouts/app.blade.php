<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
            color: #212529; 
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            color: #212529;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #212529 !important;
        }
        .nav-link {
            color: #212529 !important;
        }
        .container {
            padding: 20px;
        }
        .table {
            background-color: #ffffff; 
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Task Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/edit">Edit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Tasks</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-4 container">
        @yield('content')
    </div>
</body>
</html>
