<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elixir Event.com</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<style>
    body{ 
        background: url(images/1.jpg) no-repeat 0px 0px;
        background-size: cover;
	    min-height:280px;
         }
</style>

<body>
    <div class="main">
        <div class="register">
            <h2>Login</h2>
           
            <form id="register" method="post">
                <label>Email:</label>
                <br>
                <input type="text" name="email" id="name" placeholder="Enter your name">
                <br><br>
               
                <label>Password :</label>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter your password">
                <br><br>
               
                
                <input type="login" value="Login" name="login" id="login">
            </form>
        </div>
        <!--end register-->
    </div>
    <!--end main-->

</body>

</html>