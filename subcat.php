<!DOCTYPE html>
<html>
<head> <title>Around The World</title>
</head>

<body>
<style type="text/css">
header{
            height: 50px;
            background-color: skyblue ;
            color: white;
            font-size: 2.7vw;

                }
	body{
                    background-color: rgb(60, 98,119);
    }
    a{
    text-decoration: none;
    color: white;
    
    font-size: 1.5vw;
    padding: 10px;
    margin-top:10px;
}

td tr{
    color: white;
}
	<style type="text/css">
        header{
            height: 50px;
            background-color: skyblue ;
            color: white;
            font-size: 3.7vw;
        }
    </style>

    <a href="index.php">
    <header>Home <br>      

    </header></a>
<?php include('function.php'); ?>

<!--/sticky-->
<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:35px; color:white;"><b>Category</b></td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:20px;color:black;text-decoration:none;font-weight:900;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}

?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="10" width="1000px">
<tr><td  class="headingText" style="font-size:20px; color: white;" >Subcategories</td></tr>
<tr><td class="paraText" width="900px" style="color: white;">




<table cellpadding="0" cellspacing="0" width="900px">

<?php

$s="select * from subcategory where Catid='" .$_GET["catid"] . "'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
		


<tr>
<?php

	}?>
<td>
<table border="0" width="100px" bordercolor="#FF6666">

<tr><td align="center" style="background-color:#60B0E6; color:#FFF"><?php echo $data[1];?> </td></tr>
<tr><td class="image"><img src="Admin/subcatimages/<?php echo $data[3]; ?>" width="250px" height="200px" /></td></tr><br/><br/>
<tr><td align="center" style="background-color:#60B0E6; "><a href="package.php?subcatid=<?php echo $data[0];?>"><font color="#FFFFFF">View Detail</font></a></td></tr>

</table>
</td>
<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>




</td></tr></table>

</div>

</div>

<div style="clear:both"></div>


</body>
</html>