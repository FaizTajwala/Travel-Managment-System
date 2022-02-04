<?php 

session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $hmany = $_POST['hmany'];
        $email = $_POST['email'];
        $Package = $_POST['Package'];

        if(!empty($name) && !empty($hmany) && !empty($email) && !empty($Package))
        {

            //save to database
            $enquiryid = random_num(20);
            $query = "insert into enquiry (name, hmany, email, Package) values ('$name',$hmany','$email','$Package')";

            mysqli_query($con, $query);


            header("Location: index.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
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

    <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">
            <div class="image">
                <img class="img-booking" src="book.jpg" alt="booking">
            </div>

            <form action="#" method="POST">

                <div class="inputBox">
                    <h3>Name</h3>
                    <input name="name" type="text" placeholder="Full name" />
                </div>    
                    
                <div class="inputBox">
                    <h3>how many</h3>
                    <input name="hmany" type="number" placeholder="number of guests" />
                </div>
                <div class="inputBox">
                    <h3>Email</h3>
                    <input name="email" type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <h3>Package</h3>
                    <input type="text" placeholder="Package Name" />
                </div>
                '<a href="">'
                <input name="Package" type="submit" class="btn" value="book now" /></a>
            </form>
        </div>
    </section>

    <!-- book section ends -->



</body>

</html>