<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!--Navbar start-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">My App</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=about" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle"
                       data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Service One</a></li>
                        <li><a href="" class="dropdown-item">Service two</a></li>
                        <li><a href="" class="dropdown-item">Service three</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">Notice</a></li>
                <li><a href="" class="nav-link">Gallery</a></li>
                <li><a href="action.php?page=career" class="nav-link">Career</a></li>
                <li><a href="action.php?page=contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>