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
        
        #kotak{
            width: 520px;
            height: 300px;
            background: #fff;
            margin: 150px auto 100px auto;
            color:#2ECC71;
        }
        #atas{
            height: 45px;
            width: 520px;
            text-align: center;
            font-size: 20pt;
            padding-top:20px;
        }
        #bawah{
            height: 200px;
            width: 520px;
           
        }
        .masuk{
            width: 400px;
            height:40px;
            margin-top:10px;
            margin-left: 60px;
            font-size: 12pt;
            border: 1px solid #2ECC71;
            padding-left:10px;
            color:#2ECC71;
        }
        #tombol{
            width: 400px;
            height:40px;
            margin-top:10px;
            margin-left: 60px;
            background: #2ECC71;
            border:none;
            color:#fff;
            font-size: 14pt;
            outline:none;

        }</style>
    </head>
    <body>
       <div class="gtco-loader"></div>
    
    <div id="page">

    
    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.html">BOWIE <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
  
                </div>
            </div>
            
        </div>
    </nav>
                
            <section class="ubutia-quote section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <img class="quote" src="assets/images/quote.png">
                             <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses Halaman";
                }else if($_GET['pesan'] == "daftar"){
                    echo "Anda telah berhasil mendaftar";
                }
            }
            ?> <center>
                           <div id="bawah">
                <form method="POST" action="cekloginuser.php">
                    <input class="masuk" type="text" placeholder="Sapa loe ?" name="username"><br/>
                    <input class="masuk" type="password" placeholder="Kodein Dums" name="pass"><br/>
                    <input id="tombol" type="submit" name="login" value="Login"><br>
                    
                </form>
            </div>
            </center>
                           <p class="author"> E-Bowting </p>
                           <img src="assets/images/mouse.png">
                        </div>
                    </div>
                </div>
            </section>
           

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