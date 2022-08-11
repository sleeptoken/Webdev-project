<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Document</title>
    <link rel="stylesheet" href="dstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/icons8-bicycle-64.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                 <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="mtb.php">MOUNTAIN</a></li>
                    <li><a href="road.php">ROAD</a></li>
                    <li><a href="history.php">HISTORY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                 </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
   <h1>History of Cycling</h1>
</section>
<!-- history content -->
<section class="history-content">
    <div class="row">
        <div class="history-left">
            <img src="images/history race.JPG">
            <h2>Racing</h2>
            <p>The first documented cycling race was a 1,200 metre race held on May 31, 1868, at the Park of Saint-Cloud, Paris. It was won by expatriate Englishman James Moore who rode a bicycle with solid rubber tires.<br>
                The first cycle race covering a distance between two cities was Paris-Rouen, also won by James Moore, who rode the 123 kilometres dividing both cities in 10 hours and 40 minutes.<br>
                The oldest established bicycle racing club in the United States is the St. Louis Cycling Club. Operating continuously since 1887, the club has sponsored races and timed distance events since its inception.<br>
                Its members have included numerous national champions and Olympic team members.</p>
            <img src="images/histrory.JPG">
            <h2>Recreation</h2>
            <p>Cycling as recreation became organized shortly after racing did. In its early days, cycling brought the sexes together in an unchaperoned way, particularly after the 1880s when cycling became more accessible owing to the invention of the Rover Safety bicycle. Public cries of alarm at the prospect of moral chaos arose from this and from the evolution of women' cycling attire, which grew progressively less enveloping and restrictive.</p>
            <div class="comment-box">
                <h3>Leave a Comment</h3>
                <form class="comment-form" action="#" method="POST">
                    <input type="text" placeholder="enter name">
                    <input type="email" placeholder="enter email">
                    <textarea rows="5" placeholder="your comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">Post comment</button>
                </form>
            </div>
        </div>
        <div class="history-right">
            <h3>Road Race Medallists</h3>
            <table>
                <thead>
                <tr>
                    <th>Championships</th>
                    <th>Winner</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2011 Copenhagen</td>
                    <td>Mark Cavendish (GBR)</td>
                </tr>
                <tr>
                    <td>2012 Valkenburg</td>
                    <td>Philippe Gilbert (BEL)</td>
                   
                </tr>
                <tr>
                    <td>2013 Florence</td>
                    <td>Rui Costa (POR)</td>
                    
                </tr>
                <tr>
                    <td>2014 Ponferrada</td>
                    <td>Michał Kwiatkowski (POL)</td>
                    
                </tr>
                <tr>
                    <td>2015 Richmond</td>
                    <td>Peter Sagan (SVK)</td>
                    
                </tr>
                <tr>
                    <td>2016 Doha</td>
                    <td>Peter Sagan (SVK)</td>
                    
                </tr>
                <tr>
                    <td>2017 Bergen</td>
                    <td>Peter Sagan (SVK)</td>
                    
                </tr>
                <tr>
                    <td>2018 Innsbruck</td>
                    <td>Alejandro Valverde (ESP)</td>
                    
                </tr>
                <tr>
                    <td>2019 Yorkshire</td>
                    <td>Mads Pedersen (DEN)</td>
                    
                </tr>
                <tr>
                    <td>2020 Imola</td>
                    <td>Julian Alaphilippe (FRA)</td>
                    
                </tr>
                <tr>
                    <td>2021 Flanders</td>
                    <td> Julian Alaphilippe (FRA)</td>
                    
                </tr>
                <tr>
                    <td>2019 Yorkshire</td>
                    <td>Mads Pedersen (DEN)</td>
                    
                </tr>
                </tbody>
            </table> 
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


</body>
</html>