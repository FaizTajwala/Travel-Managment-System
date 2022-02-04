<?php 

session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $enquiry = $_POST['enquiry'];

        if(!empty($name) && !empty($enquiry) )
        {

            //save to database
            $query = "insert into enquiry (name,email,password) values ('$name','$enquiry')";

            if(mysqli_query($con, $query));
            {
 
            header("Location: index.php");
            die;
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AROUND THE WORLD
    </title>
</head>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="./style.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="
./script.js"></script>



<body>
 <style type="text/css">
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

                <form method="POST">

    <section class="book" id="book">
        <h1 class="heading">
            <span>E</span>
            <span>N</span>
            <span>Q</span>
            <span>U</span>
            <span>i</span>
            <span>A</span>
            <span>R</span>
            <span>Y</span>
        </h1>
        <div class="row">
            <div class="image">
                <img class="img-booking" src="book.jpg" alt="booking">
            </div>

                <div name ="name" class="inputBox">
                    <h3>Name</h3>
                    <input type="text" name="name" placeholder="Name" />
                </div>
                <div class="inputBox" name="enquiry">
                    <h3>Enquiry</h3>
                    <input type="text" name="enquiry" placeholder="Enquiary Detail" />
                </div>
                <p>
                <a href="index.php" >
                <input type="submit" name="sbmt" class="btn" value="Enquiry"/></a></p>
            </form>
        </div>
    </section>

    <!-- book section ends -->



</body>
</html>