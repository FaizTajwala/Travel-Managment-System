<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Around the World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>

<body><style type="text/css">
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

        header{
            height: 50px;
            background-color: skyblue ;
            color: white;
            font-size: 2.7vw;
        }
    </style>

    <a href="index.php">
    <header>Home <br>      

    </header></a>
<?php include('function.php'); ?>
<br>
<br>
<br>
<!--/sticky-->
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px" >
<tr><td style="font-size:40px; color:white;text-decoration:underline;">Category</td></tr>
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
<table cellpadding="0px" cellspacing="0" width="1000px" >
<tr><td class="headingText" style="font-size:20px; color: white; font-weight:900;padding:10px">View Packages</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px" border="0">
<tr>
<td>

<table border="0" width="600px" height="400px" align="center" >
<?php

$s="select * from package,category where package.category=category.cat_id and  package.packid='" . $_GET["pid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 

<tr><td colspan="3" style="font-size:20px;padding:10px;"><span class="middletext">Pack Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $data[1];?></td></tr>
<tr><td class="middletext"><img src="Admin/packimages/<?php echo $data[5];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/
<?php echo $data[6];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/
<?php echo $data[7];?>" width="200px" height="200px"  /></td>
</tr>
<tr><td  colspan="3" height="90px" style="font-size:20px;padding:10px;"><span class="middletext">Category:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <span class="middletext">Price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[4];?>
</td></tr>
<tr><td colspan="3"v><p><?php echo $data[8];?></p></td></tr>
<tr><td align="left" colspan="3" height="50px"

><a href="booking.php?pid=<?php echo $data[0];   ?>"><input style="height:50px;width:100px;border:2px solid black;border-radious:10px;color:white;background-color:blue;font-size:15px;font-weight:900;"type="button" value="Book" name="sbmt" /></a></td></tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

</body>
</html>



