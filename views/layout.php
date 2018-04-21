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
            <div class="topnav">
               <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="?controller=article&action=readcategory">What's On</a></li>
                <li><a href="#contact">Food & Drink</a></li>
                <li><a href="#about">Social</a></li>
                <li><a href="#about">Sight Seeing</a></li>
                <li><a href="#about">Hotels</a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook" style="margin-left: 400px"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-search"></i></a></li>
               </ul>
           </div>


            <div class='container' >
                <?php require_once('routes.php'); ?>
            </div>


            <div class="footer">
                <ul>
                <li><p style="margin-top:15px;font-size: small">@WhatsUpLondon2018</p></li>
                <li><a href="#AboutUs"><p style="font-size: small;margin-left: 60px"> About Us</p></a></li>
                <li><a href="#ContactUs"><p style="font-size: small">Contact Us</p></a></li>
                </ul>
            </div>



    </body>
    </html>                            

