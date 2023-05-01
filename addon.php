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
      $isi = mysqli_fetch_assoc($result);
      echo "Total user : " $isi;
    }else{
        echo "No user";
    }
      ?>
  </body>
</html>