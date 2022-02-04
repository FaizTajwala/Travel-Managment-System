<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into user (user_id,name,email,password) values ('$user_id','$name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Around The world</title>
	<link rel="stylesheet" href="signup.css">
</head>
<body>
	<div class="container">
			
		<form action="#" method="POST">
            <h1 class="form__title">Sign Up</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="name" class="form__input" autofocus placeholder="Name">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" name="email" class="form__input" autofocus placeholder="Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            
            <a href="index.php"><button class="form__button" type="submit">Sign Up</button></a>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linklogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div> 
    <script src="signup.js"></script>
</body>
</html>