<?php

    if (!isset($_GET['id'])){
    header('Location: index.php');
  }
  

  $dbhost = 'localhost';
  $dbuser = 'widget_cms';
  $dbpass = 'parool';
  $dbname = 'widget_corp';
  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
  }
  $id = $_GET['id'];
  $query = "DELETE FROM subjects WHERE id = {$id}";
  $result = mysqli_query($connect, $query);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Databases</title>
    <meta http-equiv="refresh" content="2; url=index.php">
  </head>

  <body>
    <?php if ($result && mysqli_affected_rows($connect)) { ?>
  <p style="color: green;"><?php echo "Rida kustutatud"; ?></p>
<?php } else { ?>
  <p style="color: red;"><?php echo "Sellist rida andmebaasis ei ole"; ?></p>
<?php } ?>
  </body>
</html>
<?php mysqli_close($connect); ?>