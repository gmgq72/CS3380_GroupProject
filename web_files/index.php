﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.panelgallery-2.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,800' rel='stylesheet' type='text/css'>

    <title>Tony's Pizza</title>
    <script type="text/javascript">
    $(function(){
    $('#slider').panelGallery({
    boxSize:50,
    boxFadeDuration:1000,
    boxTransitionDuration:100,
    FX: new Array('fade')
    //boxSouthEast','fade','boxRandom','panelZipperDown,true','panelZipperRight,true','panelTeethDown,true','panelTeethRightReveal')
    });
    });
    </script>

</head>
<body>
   <div class="imgbackground">
        <!--Tonys Banner-->
        <div class="TonysBanner">
                 <img id="TonysImg" src="images/TonysPizza.png" alt="Tonys">
            </div>
        </div><!--img background-->
    <div class="col-md-12">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='#'>Tony's Pizza</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id=".navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="Order.php">Order Now</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>
		    <li><a href="logout.php">Logout</a></li>
                </ul>
                <!--</ul>-->
            </div> <!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</div><!--col-md-12-->
</nav>

	<h1>Welcome to Tony's Pizza Palace!</h1>
    <hr />
    <div class="col-md-12">
    <div id="slider">
        <img src="images/greekpizza.jpg" width="800" height="400" >
        <img src="images/gyros.jpg" width="800" height="400">
        <img src="images/sandwhich.jpg" width="800" height="400">
        <img src="images/greekfood.jpg" width="800" height="400">
    </div><!--slider-->
        
    </div><!--col-md-12-->
</body>
</html>
