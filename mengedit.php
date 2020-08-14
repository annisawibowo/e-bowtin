<?php include 'conn.php';?>
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
<section id="team" class="team section">
                <div class="container">
                    <h2 class="title">Our PASLON</h2>
                   
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                               <?php
$id= null;
                $nama = null;
               $gambar = null;
        
       if ($_SERVER['REQUEST_METHOD'] === 'GET'){

       
             $id = $_GET['id'];

          $sql = "SELECT idgambar, nama, gambar  FROM paslon WHERE idgambar='$id'";
                     
          $result = mysqli_query( $con,$sql);
 
          while($row = mysqli_fetch_assoc($result)) {
          
              $gambar = $row['gambar'];
              $nama = $row['nama'];
            }
             mysqli_close($con); 
          if (isset($_GET['success'])) {
              $success = $_GET['success'];
              if($success) {
                  echo '<div class="alert alert-success alert-
                dismissible" role="alert">';
                echo '<button type="button" class="close" data-
                dismiss="alert" aria-label="Close"><span aria-
                hidden="true">&times;</span></button>';
                echo "Data concept berhasil diperbarui!";
                echo '</div>';
              } else {
                  echo '<div class-"alert alert-danger alert-dismissible" role="alert">';
                  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                  echo "Terjadi kesalahan ketika melakukan penyimpanan!";
                  echo mysqli_error();
                  echo '</div>';

            }
          }}
    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $id = $_POST['id'];
          $nama = $_POST['nama'];
       
              
          
          if ($_FILES["gambar"]["size"] == 0){
              
            
              $sql = "UPDATE paslon SET nama='$nama'WHERE idgambar='$id'";
          } else {
              $tmpName = $_FILES['gambar']['tmp_name'];
              $fp = fopen($tmpName, 'r');
              $content = fread($fp, filesize($tmpName));
              $content = addslashes($content);
              fclose($fp);
            
              
              $sql = "UPDATE paslon SET nama='$nama', gambar='$content' WHERE idgambar='$id'";
          }
          $result = mysqli_query($con,$sql);
          mysqli_close($con);
         
         header('Location:editvotein.php?id='.$id.'&success='.$result);
        } 
             ?> <form action="mengedit.php" method="POST" enctype="multipart/form-data" id="concept-form">
              <img style="width: 330px; height: 330px;" alt="" 
                    src=<?php echo '"data:image/jpeg;base64, '.base64_encode($gambar).'"'?>> 
 
              <input type="hidden" name="id" value=<?php echo'"'.$id.'"';?> readonly/>
                   
                    <input type="file" id="gambar" name="gambar" accept="image/*">
           </div>
                                <div class="ubutia-card-content">

                                        
                                    <h3>PASLON 1</h3>
                                
                                 
                    <input type="text" class="form-control" id="nama" name="nama" value=<?php echo '"'.$nama.'"'; ?>>
                    <div class="social-icons">
                                        <ul>
                                          <input type="submit" name="">
                                        </ul>
                                        <a href="editvotein.php">back</a>
                                    </div>
  
                                    
                                </div>
                            </div>
                        </div>
                      

                           </form>     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          <?php                           
         
      ?>
        
             <script src="assets/js/jquery-3.1.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>