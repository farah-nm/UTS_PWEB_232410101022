<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fefc;
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='1' cy='1' r='1' fill='%23d1e7dd'/%3E%3C/svg%3E");
            background-repeat: repeat;
        }

        .navbar-custom {
            background-color: #d1dad4;
            border-radius: 50px;
            padding: 10px 30px;
            margin: 20px;
        }

        .navbar-custom .nav-link {
            color: #000;
            margin-right: 20px;
            font-weight: 500;
        }

        .navbar-custom .nav-link.active, .navbar-custom .nav-link:hover {
            background-color: #A3D95D;
            border-radius: 30px;
            padding: 6px 15px;
            color: #000 !important;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
