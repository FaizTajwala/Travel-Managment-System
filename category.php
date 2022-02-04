
<!DOCTYPE html>
<html>
<head> <title>Around The World</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
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

<table cellpadding="0" cellspacing="0" width="1000px"
style="position:absolute;left:20%;top:40%;padding:20px;">
<tr style="font-size:30px; color:white;padding:5px;"><td style="font-size:30px; color:white;padding:15px;"><b><p>Category</p></b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:500px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText" ><p style="color:white; font-size:40px;position:absolute;top:15%;left:35%">Welcome to Around the world</p></td></tr>
<tr><td class="paraText" width="900px" class="h2">  <p style="color:white; font-size:25px;position:absolute;top:30%;left:45%">Choose Catogery</p>
</td><td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="500px" height="150px" > &nbsp;&nbsp;&nbsp; </div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>


</body>
</html>