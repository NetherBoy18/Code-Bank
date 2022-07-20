<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/loginStyler.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/generalStyler.css') }}">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </head>

    <body onload="loadLoginBody()">
    <nav class="navbar navbar-light" style="background-color: #21618C;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('table') }}">Table</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('signOut') }}">Signout</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-white" type="submit">Search</button>
            </form>
            </div>
        </div>  
    </nav>
        <div class="bg-image" style="background-image: url('https://free4kwallpapers.com/uploads/originals/2021/04/13/minimalist-code-wallpaper.png'); height: 100vh;"></div>
        <!--BODY = MAIN CONTENT-->
		
    </body>
</html>