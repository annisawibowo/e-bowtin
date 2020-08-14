<?php include 'conn.php';?>
<html lang="en">
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
                                         <div id="gtco-logo"><a href="index.html">BOWIE <em>.</em></a></div>
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
                  <?php

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
          $nama = $_POST ['nama'];
       
          
          $tmpName = $_FILES['gambar']['tmp_name'];
          $fp = fopen($tmpName, 'r');
          $content = fread($fp, filesize($tmpName));
          $content = addslashes($content);
          fclose($fp);
          
          $sql = "INSERT INTO paslon (nama,
          gambar) VALUES ('$nama', '$content')";
          
          $result = mysqli_query( $con,$sql);
          
          if ($result){
                echo '<div class="alert alert-success alert-
                dismissible" role="alert">';
                echo '<button type="button" class="close" data-
                dismiss="alert" aria-label="Close"><span aria-
                hidden="true">&times;</span></button>';
                echo "Concept berhasil ditambahkan!";
                echo '</div>';
                
            } else {
                echo '<div class="alert alert-danger alert-
                dismissible" role="alert">';
                echo '<button type="button" class="close" data-
                dismiss="alert" aria-label="Close"><span aria-
                hidden="true">&times;</span></button>';
                echo "Terjadi kesalahan ketika melakukan
                penyimpanan!";
                echo mysqli_error();
                echo '</div>';
            }
            mysqli_close($con);
                
            }
           ?>
      
<section id="team" class="team section">
                <div class="container">
                    <h2 class="title">Our PASLON</h2>
                    <form action="tambahfoto.php" method="POST" enctype="multipart/form-data" id="concept-form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                <input type="file"  name="gambar" accept="image/*">
                                </div>
                                <div class="ubutia-card-content">

                                    <h3>PASLON 1</h3>
                                     <input type="text" name="nama" placeholder="Nama Paslon">
                                    <div class="social-icons">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                          
                </div>
                 <input type="submit" name="ok">

                           </form>    
            </section>
             <script src="assets/js/jquery-3.1.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>