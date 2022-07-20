<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Research</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;

	}
	table.table td a.edit {
        color: #FFC107;
        
    }

    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
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
			</div>
		</div>  
	</nav>


    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2><b>Research</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Research</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							
							<th>Research Title</th>
							<th>Leader</th>
							<th>Members</th>
							<th>College</th>
                            <th>Date Completed</th>
                            
							<th>File</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($researches as $research)
						<tr>
							
							
							<td>{{$research->research_title}}</td>
							<td>{{$research->leader}}</td>
							<td>{{$research->members}}</td>
							<td>{{$research->college}}</td>
                            <td>{{$research->date_completed}}</td>
                            
							<td><a href='{{ asset('storage/files') . '/' . $research->file }}'  >view file</a></td>
							<td>
								
								<a href="#deleteEmployeeModal-{{$research->id}}" class="delete" data-toggle="modal" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								
								<a href="{{route('show')}}" ><i class="material-icons" data-toggle="tooltip" >&#xE254;</i></a>
								</td>
						</tr> 
						<div id="deleteEmployeeModal-{{$research->id}}" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action='{{route('table.destroy', $research->id)}}' method='POST'>
										@csrf
										
										<div class="modal-header">						
											<h4 class="modal-title">Delete Employee</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">					
											<p>Are you sure you want to delete these Records?</p>
											<p class="text-warning"><small>This action cannot be undone.</small></p>
										</div>
										
										<div class="modal-footer">
											<input type="submit" class="btn btn-danger" value="Delete">
									
											<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											
										</div>
									</form>
									
								</div>
							</div>
						</div>
							{{-- <div id="editEmployeeModal-{{$research->id}}" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form action='{{route('table.update', $research->id)}}' method='POST'>
											@method('DELETE') 
											@csrf
											@method('PUT')
											<div class="modal-header">						
												<h4 class="modal-title">Edit Employee</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<div class="form-group">
													<label>Research Title</label>
													<input type="text" class="form-control" name="research_title" value='{{$research->research_title}}' required>
												</div>
												<div class="form-group">
													<label>Leaders</label>
													<input type="Text" class="form-control" name="leader" value='{{$research->leader}}' required>
												</div>
												<div class="form-group">
													<label>Members</label>
													<textarea class="form-control" name="members" value='{{$research->members}}' required></textarea>
												</div>
												<div class="form-group">
													<label>College</label>
													<input type="text" class="form-control" name="college" value='{{$research->college}}' required>
												</div>		
												<div class="form-group">
													<label>Date Completed</label>
													<input type="date" class="form-control" name="date_completed" value='{{$research->date_completed}}' required>
												</div>				
												
											</div>
											<div class="modal-footer">
												<input type="submit" class="btn btn-info" value="Save">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											</div>
										</form>
									</div>
								</div>
							
							</div> --}}

						@endforeach
						
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>{{$researches->firstItem()}} - {{$researches->lastItem()}}</b>  <b></b> </div>
					<ul class="pagination">
						{{$researches->links()}}
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('table.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Research Title</label>
							<input type="text" class="form-control" name="research_title" required>
						</div>
						<div class="form-group">
							<label>Leaders</label>
							<input type="Text" class="form-control" name="leader" required>
						</div>
						<div class="form-group">
							<label>Members</label>
							<textarea class="form-control" name="members" required></textarea>
						</div>
						<div class="form-group">
							<label>College</label>
							<input type="text" class="form-control" name="college" required>
						</div>		
                        <div class="form-group">
							<label>Date Completed</label>
							<input type="date" class="form-control" name="date_completed" required>
						</div>				
                        		
						<div>
							<input type="file" accept=".pdf" name="upload" >

						</div>
						
					</div>

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>