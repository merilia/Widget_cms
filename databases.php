<?php
  $dbhost = 'localhost';
  $dbuser = 'widget_cms';
  $dbpass = 'parool';
  $dbname = 'widget_corp';
  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
  }

  $query = "SELECT * FROM subjects;";
  $result = mysqli_query($connect, $query);

  $row = mysqli_fetch_row($result);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Databases</title>
  </head>

  <body>
    <pre>
    <?php //  print(mysqli_fetch_row($result)); ?>
    </pre>
    <?php
     while ($row == mysqli_fetch_row($result)) {
       echo "<pre>";
       var_dump($row);
       echo "</pre>";
     }
    ?>
  </body>
</html>
