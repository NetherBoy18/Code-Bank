<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/registerStyler.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/generalStyler.css') }}">
    </head>

    <body onload="loadRegisterBody()">
		
		<!--BODY = MAIN CONTENT-->
		<div id="register">
			<h1>Create an Acount!</h1>
			<form id = "registerForm">
				<input type = "text" name = "first_name" placeholder = "First Name" id = "firstName" class = "regInfo"><br/>
				<input type = "text" name = "last_name" placeholder = "Last Name" id = "lastName" class = "regInfo"><br/>
				<input type = "email" name = "email" placeholder = "E-Mail Address" id = "emailAdd" class = "regInfo"><br/>
				<input type = "text" name = "username" placeholder = "Username" id = "username" class = "regInfo"><br/>
				<input type = "password" name = "password" placeholder= "Password" id = "password" class = "regInfo"><br/>
                <button type="submit" id = "submitBtn" class = "regInfo" >Submit</button>
			</form>
		</div>
    </body>
</html>