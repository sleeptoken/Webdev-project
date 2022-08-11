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
   <h1>History of Cycling</h1>
</section>
<!-- history content -->
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="images/history race.JPG">
            <h2>Racing</h2>
            <p>The first documented cycling race was a 1,200 metre race held on May 31, 1868, at the Park of Saint-Cloud, Paris. It was won by expatriate Englishman James Moore who rode a bicycle with solid rubber tires.<br>
                The first cycle race covering a distance between two cities was Paris-Rouen, also won by James Moore, who rode the 123 kilometres dividing both cities in 10 hours and 40 minutes.<br>
                The oldest established bicycle racing club in the United States is the St. Louis Cycling Club. Operating continuously since 1887, the club has sponsored races and timed distance events since its inception.<br>
                Its members have included numerous national champions and Olympic team members<br>.</p>
            <img src="images/histrory.JPG">
            <h2>Recreation</h2>
            <p>Cycling as recreation became organized shortly after racing did. In its early days, cycling brought the sexes together in an unchaperoned way, particularly after the 1880s when cycling became more accessible owing to the invention of the Rover Safety bicycle. Public cries of alarm at the prospect of moral chaos arose from this and from the evolution of women' cycling attire, which grew progressively less enveloping and restrictive.</p>
            <div class="comment-box">
                <h3>Leave a Comment</h3>
                <form class="comment-form" action="#" method="POST">
                    <input type="text" name="name" placeholder="enter name">
                    <input type="email" name="mail" placeholder="enter email">
                    <textarea rows="5" name="comment" placeholder="your comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">Post comment</button>
                </form>
            </div>
        </div>
        <div class="blog-right">
            <h3> Categotries</h3>
            <div>
                <span>Road Bicycling</span>
                <span>5</span>
            </div>
            <div>
                <span>Track Cycling</span>
                <span>11</span>
            </div>
            <div>
                <span>Cyclo-cross</span>
                <span>2</span>
            </div>
            <div>
                <span>Mountain Baskerville</span>
                <span>15</span>
            </div>
            <div>
                <span>BMX</span>
                <span>3</span>
            </div>
            <div>
                <span>Gravel racing</span>
                <span>6</span>
            </div>
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
    $sql="INSERT INTO comment(name,mail,comment)VALUES('$_POST[name]','$_POST[mail]','$_POST[comment]')";
    if($conn->query($sql)==TRUE){
        echo "Thanks for Commenting";
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