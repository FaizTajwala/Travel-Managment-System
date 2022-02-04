<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->

<title>Around the World</title>
<script src="js/jquery.min.js"></script>
</head>
<style>

	
</style>
<body>
<!--header-->
<!--sticky-->

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<!--/sticky-->
<div class="col-sm-9" align="center">
	<h1>WELCOME TO ADMIN PANEL</h1>
</div>


<div style="padding-top:100px;  font-size:20px;padding:10px;margin:10px;" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;padding:10px; background-color:lightcyan; ">
<?php include('left.php'); ?>
</div>

</div>
</body>
</html>