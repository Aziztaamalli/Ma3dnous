<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Anti-Corruption Campaign</h1>
</header>

<nav>
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
    <a class="nav-link active " aria-current="page" href="{{ route('people.show') }}">Report Corruption</a>
    <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a> <!-- Added About link -->
    <!-- Add more navigation links as needed -->
</nav>

</body>
</html>
