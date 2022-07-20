<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/loginStyler.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/StyleSheets/generalStyler.css') }}">
    </head>

    <body onload="loadLoginBody()">

        <!--BODY = MAIN CONTENT-->
		<div id="login">
			<h1 id = "loginh1">Log in to</h1>
            <h1> your account.</h1>
            <div id="subLogin">
                <form id = "loginForm">
                    <input type = "text" name = "username" placeholder = "Username/E-Mail" id = "username" class = "regInfo"><br/>
                    <input type = "password" name = "password" placeholder= "Password" id = "password" class = "regInfo"><br/>
                    <button type = "submit" id = "submit" class = "regInfo">LOGIN</button>
                    <h5 id = "h5regLink">Don't have an account? <a href="register">Register here</a></h5>
                </form>
            </div>
		</div>
    </body>
</html>