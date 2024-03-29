<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/icon.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                 <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="About us.html">MOUNTAIN</a></li>
                    <li><a href="Course.html">ROAD</a></li>
                    <li><a href="blog.php">HISTORY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                 </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
   <h1>Contact us</h1>
</section>
<!-- conatct us -->
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <h1>Trek</h1>
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Address</h5>
                    <p>	Waterloo, Wisconsin, USA 
                    </p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>Customer Care</h5>
                    <p>1-800-585-8735 </p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>E-mail for Query</h5>
                    <p>trekbikes@gmail.com</p>
                </span>
            </div>
            <h1>Cannondale</h1>
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Address</h5>
                    <p>	Wilton, Connecticut, United States</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>Customer Care</h5>
                    <p>1-800-245-3872</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>E-mail for Query</h5>
                    <p>Cannondalebikes@gmail.com</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Enter Your name" required>
                <input type="email" name="mail" placeholder="Enter Your email" required>
                <input type="text" name="subject" placeholder="Enter Your subject" required>
                <textarea rows="8" name="message" placeholder="message" required></textarea>
                <button type="submit" class="hero-btn red-btn">send message</button>
            </form>
        </div>
    </div>
</section>
<?php
if($_POST){
    $servername="localhost";
    $username="root";
    $password="";
    $database="cycling";

    $conn=new mysqli($servername,$username,$password,$database);
    $sql="INSERT INTO contact(name,mail,subject,message)VALUES('$_POST[name]','$_POST[mail]','$_POST[subject]','$_POST[message]')";
    if($conn->query($sql)==TRUE){
        echo "Thanks for Contacting";
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    }
    ?>
    

<!-- footer --> 
<section class="footer">
    <h4>About us</h4>
    <p>Something about us</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
    </div>
</section>






    <!-- java script for toggle menu -->
<script>
    var navlinks = document.getElementById("navLinks");
    function showmenu(){
        navLinks.style.right="0";
    }
    function hidemenu(){
        navLinks.style.right="-200px";
    }
</script>
</body>
</html>