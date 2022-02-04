<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$password = $_POST['password'];

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

			//read from database
			$query = "select * from user where name = '$name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['username'] = $user_data['name'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<?php 

	?>
		<div class="container">
			<form action="#" method="POST" 	>
				<h1 class="form__title">Log In </h1>
				
				<div class="form__input-group">
					<input type="text" name="name" class="form__input" autofocs placeholder="Username">

				</div>
				<div class="form__input-group">
					<input type="password" name="password" class="form__input" autofocs placeholder="Password">
				</div>
				<a href="index.php"><button class="form__button" type="submit" >Log In</button>
				</a>
				
            <p class="form__text">
                <a class="form__link" href="signup.php" id="linksignup">Don't have an account? Sign Up</a>
            </p>
        </form>
			
    	</div>
    
</body>
</html>