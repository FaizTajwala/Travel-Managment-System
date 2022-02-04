<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
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
<title>Around the world</title>
</head>

<body>
		 <div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="#"><img src="../images/" id="section-1" class="img-responsive" alt=""/></a>
						</div>
						<div class="menu">
						<ul id="nav" style="background-color:skyblue;display:flex;height:80px;justify-content:flex-start;list-style:none;align-items:center;">
							 <li><a href="../index.php" target="_blank" style="font-size:30px;color:white;font-weight:900;text-decoration:none">Home</a></li>
							 <li><a href="logout.php" style="font-size:20px;color:white;font-weight:900;text-decoration:none;padding-left:1000px;">Log Out</a></li>
						     <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>
<table style="width:100%;padding:20px;height:100%" >
<tr><td style="font-size:35px;text-align: center; text-decoration:underline;color:blue;padding:25px 25px">Admin Panal</td></tr>


<tr>
<td><a href="adduser.php" >Add User</a></td>
<td><a href="updateuser.php">Update User</a></td>
<td><a href="deleteuser.php">Delete User</a></td></tr>



<tr>
<td><a href="addcategory.php">Add Category</a></td>
<td><a href="updatecategory.php">Update Category</a></td>
<td><a href="deletecategory.php">Delete Category</a></td>
<td><a href="viewcategory.php">View Category</a></td>
</tr>

<tr>
<td><a href="addsubcategory.php">Add Subcategory</a></td>
<td><a href="updatesubcategory.php">Update Subcategory</a></td>
<td><a href="deletesubcategory.php">Delete Subcategory</a></td>
<td><a href="viewsubcategory.php">View Subcategory</a></td>
</tr>

<tr>
<td><a href="addpackage.php">Add Package</a></td>
<td><a href="updatepackage.php">Update Package</a></td>
<td><a href="deletepackage.php">Delete Package</a></td>
<td><a href="viewpackage.php">View Package</a></td></tr>


<tr>
<td><a href="viewenquiry.php">View Enquiry</a></td>

</tr>
</table>


</body>
</html>