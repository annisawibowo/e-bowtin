<?php
include 'conn.php';
    session_start();
    if(isset($_SESSION['status']) == false){
        header("location:login.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>E-Bowtin</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/vote2.ico"/>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="assets/css/magnific-popup.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<style type="text/css" >
body {
  background: url(images/bgcom.jpg) no-repeat  fixed;
  background-size:100% 100%;
}
  

#footer {
			position:absolute;
			bottom:0;
			width:100%;
	  	    height:30px;
			background-color:blue;
		}
		</style>
    </head>
    <body >
       <div class="gtco-loader"></div>
    
    <div class="container-xl"  >

    
    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.html">BOWIE <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">

                        
                        <li class="has-dropdown">
                            <a href="logoutuser.php">LOGOUT</a>
                            
                        
                        </li></ul>  
                </div>
            </div>
            
        </div>
    </nav>
                <div class="contrainer-xl" >
                        
                        <div class="intro-box">
                            <div class="intro">
                                <h1 style="color: blue;" >E-VOTING</h1>
                                <p style="color: black;" >SIAPAKAH THE NEXT KAISCOM?!?!?</p>
                                <a class="btn ubutia-btn" href="votein.php" style="border-bottom-color: blue; color: blue;border-top-color: blue;" >Let's Vote</a>
                 
                                              
                 
                
        </div>
        </div>
        <div id="footer">
					<table height="100%" width="100%" style='color:white'>
		   				<tr>
		   					<td colspan="3" align="center" >
		   						&copy; Made By Annisa Raudya Wibowo SI'17
		   					</td>
		   				</tr>
		   			
	   				</table>
				</div>

          <div>
              
            
            <script src="assets/js/jquery-3.1.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/script.js"></script>

        <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>

    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>

    <script src="proses.php"></script>
    <script src="tampilsavory.php"></script>
    


    <!-- Main -->
    <script src="js/main.js"></script>
    </body>
</html>

 