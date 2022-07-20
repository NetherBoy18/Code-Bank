<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>

    <body>
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
                </ul>
                </div>
            </div>  
        </nav>
        <!--BODY = MAIN CONTENT-->
        <div>
            
        </div>
		<!-- <div>
			<h1 id = "loginh1">Log in to</h1>
            <h1> your account.</h1>
            <div id="subLogin">
                <form action="{{ route('login') }}" method="post" >
                    @csrf
                    @if (session('status'))

                                <div class="alert alert-danger alert-dismissible">

                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    <p class="card-alert-text"><i class="icon fas fa-info-circle"></i> Invalid Credentials! Please enter correct Email Address and Password.</p>

                                </div>

                    @endif 
                    <input type = "text" name = "username" placeholder = "Username/E-Mail" id = "username" class = "regInfo"><br/>
                    <input type = "password" name = "password" placeholder= "Password" id = "password" class = "regInfo"><br/>
                    <button type = "submit">LOGIN</button>
                    <h5 id = "h5regLink">Don't have an account? <a href="register">Register here</a></h5>
                </form>
            </div>
		</div> -->
    </body>
</html>