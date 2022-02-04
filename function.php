<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from user where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

		$user_data = mysqli_fetch_assoc($result);
		return $user_data;
		}
	}
	//redirect to login
	//header("Location: login.php")
	//die;

}

	function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}	

function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","tms");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}
$cn=mysqli_connect("localhost","root","","tms");
?>
