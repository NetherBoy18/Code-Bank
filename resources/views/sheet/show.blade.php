<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Research</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.research_title{
		position: absolute;
		left: 10px;
		top: 10px;

	}
	.leader{
		position: absolute;
		left: 10px;
		top: 90px;

	}
	.members{
		position: absolute;
		left: 10px;
		top: 170px;

	}
	.college{
		position: absolute;
		left: 500px;
		top: 5px;

	}
	.date{
		position: absolute;
		left: 500px;
		top: 90px;

	}
	.file{
		position: absolute;
		left: 500px;
		top: 190px;

	}
</style>
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

		<form action="">
			<div class="research_title">
				<h3>Research Title</h3>
				<input type="text" class="form-control" name="research_title"  name="research_title" >
														
			</div>
			<div class="leader">
					<h3>Leader</h3>
					<input type="text" class="form-control" name="leader"  name="leader" v>
														
			</div>
			<div class="members">
					<h3>Members</h3>
					<textarea class="form-control" name="members"  name="members" ></textarea>		
																					
			</div>
			<div class="college">
					<h3>College</h3>
					<input type="text" class="form-control" name="college"  name="college">
														
			</div>
			<div class="date">
					<h3>Date Completed</h3>
					<input type="date" class="form-control" name="date_completed"  name="date_completed" >
																							
			</div>
			<div class="file">
					<h3>File</h3>
					<input type="file" accept=".pdf" name="upload" >

			</div>
			<div >
					<input type="submit"  value="Save">
					<input type="button"  value="Cancel">
			</div>
		</form>	
    </body>
</html>