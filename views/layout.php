<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>What's up London</title>
        <link rel="stylesheet" href="views/css/styles.css">
        <!--navbar bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <!--social share buttons-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head> 
    <body>    
        <div class="topnavbar customnavbar">
            <ul class="customnavbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="?controller=article&action=readcategory">What's On</a></li>
                <li><a href="#contact">Food & Drink</a></li>
                <li><a href="#about">Social</a></li>
                <li><a href="#about">Sight Seeing</a></li>
                <li><a href="#about">Hotels</a></li>
                <div class="pull-right">
                    <form class="searchbox" action="index.php" method="GET" role="form" id="searchform">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                        <input type="hidden" name="controller" value="article">
                        <input type="hidden" name="action" value="searchAll">
                        <!--<span class="input-group-btn">-->
<!--                        <button type="submit" id="search" class="btn btn-default">-->
                            <!--<i class="fa fa-search" style="color: white; margin-top: 20px; margin-right: 10px; "></i>-->
                    </form>
                </div>
                <center>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </center>

<!--                                    <span class="glyphicon glyphicon-search">
                                    </span>-->
        </div>
    </ul>
    <?php
    if (isset($_SESSION['blogger_id'])) {
        echo "<ul>";
        echo "<li><a href='?controller=article&action=readAll'>Amend articles</a></li> ";
        echo "<li><a href='?controller=article&action=createArticle'>Create New Article</a></li>";
        echo "</ul>";
    }
    ?>
</div>
</div>


<div class='container' >
    <?php require_once('routes.php'); ?>
</div>
<div class="footers">
    <ul class="customfooter">
        <li><p style="margin-left: 10px; margin-right: 30px; margin-top: 13px; margin-bottom: 13px;">@WhatsUpLondon2018</p></li>
        <li><a href="#AboutUs">About Us</a></li>
        <li><a href="#ContactUs">Contact Us</a></li>
        <li><a href='?controller=pages&action=unsubscribe'>Unsubscribe</a></li>
        <li><a href='?controller=blogger&action=login'>Blogger login</a></li>
    </ul>
</div>
</body>
</html>                            

