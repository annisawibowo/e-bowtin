<!DOCTYPE html>
<?php
include 'conn.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Voting | Home</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-icon.png"/>

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
    </head>
    <body>
        <div id="menu-item" class="menu-item hide-menu">
            <div class="container">
                <ul>
                    <a href="index.html"><li>home</li></a>
                    <a href="#about"><li>about</li></a>
                    <a href="#expertise"><li>expertise</li></a>
                    <a href="#workstation"><li>workstation</li></a>
                    <a href="#team"><li>team</li></a>
                    <a href="#contact"><li>contact</li></a>
                    <a href="elements.html"><li>Elements</li></a>
                </ul>
            </div>
        </div>
        <div class="main">
         
                <nav class="navbar navbar-default navbar-ubutia">
                    <div class="container">
                        <div class="navigation-bar">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="logo">
                                        <a href="index.html"><span class="ubutia-icon"></span></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="menu m">
                                        <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
<section id="team" class="team section">
                <div class="container">
                    <h2 class="title">Our PASLON</h2>
                    <form action="update.php" method="POST" enctype="multipart/form-data" >
                      
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                               <?php
                $id= null;
                $nama = null;
               $gambar = null;
        
       if ($_SERVER['REQUEST_METHOD'] === 'GET'){
           
          $id=$_GET['id'];
           
          $sql = "SELECT nama, gambar FROM paslon WHERE idgambar='$id'";
           
          $result = mysqli_query( $con,$sql);
           
          while($row = mysqli_fetch_assoc($result)) {
          
              $gambar = $row['gambar'];
             ?>
  <input type="hidden" name="id" value=<?php echo'"'.$id=$row['gambar'].'"';?> readonly/>
             <img style="width: 330px; height: 330px;" <?php echo 'alt=""
                    src="data:image/jpeg;base64, '.base64_encode($gambar).'"'?>
                    > 
                    <input type="file" id="gambar" nama="gambar" accept="image/*">
           ?>

                            
                                </div>
                                <div class="ubutia-card-content">

                                    <h3>PASLON</h3>
                                  <input type="text" class="form-control" name="nama"  value=<?php echo $nama=$row['nama']; } ?>>
                                     
                                     <?php  mysqli_close($con);}
         
        ?>
                                    <div class="social-icons">
                                        <ul>
                                            <input type="submit" >
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                             </form> 
                        </div>
                    </div>
                </div>
            </section>
             <script src="assets/js/jquery-3.1.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>