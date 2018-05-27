<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="lib/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="wrapper">

    <nav id="sidebar">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <h3>Collapsible Sidebar</div>
</div>

<!-- Sidebar Links -->
<ul class="list-unstyled components">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>

    <li><!-- Link with dropdown items -->
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
        </ul>

    <li><a href="#">Portfolio</a></li>
    <li><a href="#">Contact</a></li>
</ul>
</nav>

</div>



</body>

<footer>
    <script src="lib/jquery-3.3.1.js"></script>
    <script src="lib/bootstrap-4/css/bootstrap.js"></script>
    <script src="js.js"></script>

</footer>
</html>