
<?php 
include 'conn.php';
  $con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'evoting');
  
if (isset($_GET['success'])){
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
          
      } else if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $id = $_POST['id'];
          $nama = $_POST['nama'];
   
          
          if ($_FILES['gambar']['size'] == 0){
              
              $con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'evoting');
              
              $sql = "UPDATE paslon SET nama='$nama'WHERE idgambar='$id'";
          } else {
              $tmpName = $_FILES['gambar']['tmp_name'];
              $fp = fopen($tmpName, 'r');
              $content = fread($fp, filesize($tmpName));
              $content = addslashes($content);
              fclose($fp);
              
              $con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'evoting');
              
              $sql = "UPDATE paslon SET nama='$nama', gambar='$content' WHERE idgambar='$id'";
          }
          $result = mysqli_query($con,$sql);
          mysqli_close($con);
         echo $sql;
         // header('Location: editvotein.php?id='.$id.'&success='.$result);
      }
      ?>