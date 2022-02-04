<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Around the World</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>
<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["s1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>


<div style="padding-top:10px; background: lightcyan; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr>
<td colspan="2" class="toptd">Add User</td>
</tr>
<tr>
<td class="lefttxt">Name</td>
<td><input type="text" name="t1" >
</td>
</tr>
<tr>
<td class="lefttxt">Email</td>
<td><input type="email" name="t2" ></td>
</tr>
<tr>
<td class="lefttxt">Password</td>
<td><input type="password" name="t3" ></td>
</tr>
<tr><td class="lefttxt">Type of User</td>
<td><select name="s1" required>
<option value="">Select</option>
<option value="admin">Admin</option>
<option value="user">User</option></select>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td ><input type="submit" value="SAVE" name="sbmt"></td>
</tr>




</table>
</form>



</div>


</div>
</body>
</html>