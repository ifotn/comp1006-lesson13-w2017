<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Music Store</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
    <a class="navbar-brand" href="/">Laravel Music Store</a>
    <ul class="nav navbar-nav">
        <li><a href="/albums">Albums</a></li>
    </ul>
</nav>

<main class="container">
    <!-- individual page content here -->
    @yield('content')
</main>

<footer class="navbar-fixed-bottom">
    <hr />
    &copy; 2017 | Intro to Web Programming
</footer>

</body>
</html>
