<?php
  $dbname = "Redlock";

  $connector = mysqli_connect("172.23.0.3", "root", "", $dbname);
  
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
      <?php
      $sql = "SELECT * FROM users;";
      // $result = mysqli_query($connector, "SELECT * FROM redlock-web-2.0;");
      $result = mysqli_query($connector, $sql);
      $nullcheck = mysqli_num_rows($result);
      if ($nullcheck > 0){
      while($isi = mysqli_fetch_assoc($result)){
        echo "Id      = "; echo $isi['Id'] . "<br>";
        echo "Nama    = "; echo $isi['Nama'] . "<br>";
        echo "Alamat  = "; echo $isi['Alamat'] . "<br>";
        echo "Jabatan = "; echo $isi['Jabatan'] . "<br>";
        echo "----------------------------" . "<br>";
      }
    }
      ?>
  </body>
</html>