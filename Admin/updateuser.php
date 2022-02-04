<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
<!--header-->
<!--sticky-->
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
	$s="update users set pwd='" . $_POST["t2"] ."',Typeofuser='" . $_POST["s1"] . "' where Username='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}
?>


<div style="padding-top:10px; background: lightcyan; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">





<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update User</td></tr>
<tr><td class="lefttxt">Select User</td><td><select name="t1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from users";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["t1"])
	{
		echo"<option value=$data[0] selected>$data[0]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[0]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from users where Username='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Username=$data[0];
$Pass=$data[1];
$Usertype=$data[2];

mysqli_close($cn);

}

?>

</td></tr>
<tr>
<td class="lefttxt">Password</td><td><input type="password"  value="<?php if(isset($_POST["show"])){ echo $Pass ;} ?>" name="t2" 
></td>
</tr>
<tr><td class="lefttxt">Confirm Password</td>
<td><input type="password" value="<?php if(isset($_POST["show"])){ echo $Pass ;} ?>" name="t3" ></td>
</tr>
<tr>
<td class="lefttxt">Type of User</td>
<td><select name="s1" >
<option value="">Select</option>
<option value="Admin" <?php if(isset($_POST["show"])&& $Usertype=="Admin"){ echo "selected"; } ?>>Admin</option>
<option value="General" <?php if(isset($_POST["show"])&& $Usertype=="General"){ echo "selected"; } ?>>General</option>
</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td ><input type="submit" value="Update" name="sbmt" /></td>
</tr>
</table>
</form>
</div>


</div>
</body>
</html>
