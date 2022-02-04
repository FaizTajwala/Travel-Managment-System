<?php
session_start();

    include("connection.php");
    include("function.php");

    




?>












<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Around The World</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <style type="text/css">
        header{
            height: 50px;
            background-color: skyblue ;
            color: white;
            font-size: 2.7vw;
        }
    </style>


    <header><div class="menu">
                        <ul id="nav" style="background-color:skyblue;display:flex;height:80px;justify-content:flex-start;list-style:none;align-items:center;">
                             <li><a href="../index.php" target="_blank" style="font-size:30px;color:white;font-weight:900;text-decoration:none">Home</a></li>
                             <li style="font-size:20px;color:white;font-weight:900;text-decoration:none;padding-left:1000px;"></a><?php echo($_SESSION['username']); ?></li>
                             <div class="clearfix"></div>
    </header>

    <section>
        <container class="container1">
            <div class="container1box1">
                <p class="p1">WE'RE READY <br>
                    TO JOURNEY</p>
            </div>
            <div class="container1box2">
                <img src="images/img2.jpg" alt="img2" class="image1">
                <img src="images/img11.jpg" alt="img11" class="image2">
            </div>
            <div class="container1box3">
                <div class="navbar">
                    <ul class="nav-list">
                        <li>
                            <a href="enquiry.php">Enquiry</a>

                        </li>
                        <li>
                            <a href="booking.php">Booking</a>

                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>

                        </li>
                        
                             <div class="clearfix"></div>
                        <li>
                            <a href="home.php">Log out</a>

                        </li>

                    </ul>

                </div>

            </div>
        </container>



        <container class="container2">
            <div class="box1">
                <div class="leftbox">                        

                    <p class="box1content2">Enjoy Your Moments</p>
                </div>
                <div class="rightbox">
                    <p class="box1content3">Around The World</p>
                    <p class="box1content2">The Best Place For Your Vacation</p>
                </div>
            </div>
            <div class="box2">
                <img src="images/img7.jpg" alt="background image1" id="box2image">
            </div>
        </container>
    </section>
 <section class="section2">
        <div class="section2container1">
            <div class="section2container1box1">
                <img class="section2img1" src="images/img9.jpg" alt="img9">
            </div>
            <div class="section2container1box2">
                <p class="section2container1para1">Our Services</p>
                <p class="section2container1para2">We all are 100% dedicated to making our customers journey safe and
                    rewarding. So you can focus on what really matters while we take care of the rest.</p>
            </div>
            <div class="section2container1box3">
                <p class="section2container1para1">What We Offer</p>
                <p class="section2container1para2">We offer simply flexible vacation and care for you we got a honeymoon
                    packege, family pcak, friendly tour as well and many more. We also got a big discount on flights and
                    hotels.</p>
            </div>
        </div>
        <div class="section2container2">
            <div class="section2container2box1">
                <a href="category.php">
                <p class="section2container2para1"> OUR PACKAGES</p> </a>
            </div>
            <div class="section2container2box2">
                <img class="section2container2img2" src="images/img3.jpg" alt="img3">
                <p class="section2container2para"></p>
            </div>
            <div class="section2container2box3">
                <img class="section2container2img2" src="images/img1.jpg" alt="img3">
                <p class="section2container2para"></p>
            </div>
            <div class="section2container2box4">
                <img class="section2container2img2" src="images/img5.jpg" alt="img3">
                <p class="section2container2para"></p>
            </div>
        </div>
        <div class="section2container3">
            <div class="section2container3box1">
                <p class="section2container1para1">About Us</p>
                <p class="section2container1para2">We are company that solely focuses on customer satisfaction to travel
                    around the world.</p>
                <p class="section2container1para2">
                    Our holistic approach of in-depth travel knowledge and extensive value of what you love.</p>
            </div>
            <div class="section2container3box2">
                <img src="images/img4.jpg" alt="img4" class="section2container3img">
            </div>

        </div>
    </section>





   
</body>

</html>