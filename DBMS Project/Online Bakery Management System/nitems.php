<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="font-size: 30px; font-weight: bolder;">
    <?php
    $servername = "localhost";
    $server_user = "root";
    $server_pass = "";
    $dbname = "bakery";

    $con = new mysqli($servername, $server_user, $server_pass, $dbname);
    $q="CALL `totalitems`();";
    $r=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($r))
    {
      echo '<br><br><br><br>';
      echo "<h2>No.of items : " .$row['total']. "</h2>";
    }
     ?>

  </body>
</html>
