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

  $subject = mysqli_fetch_row($result);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Databases</title>
  </head>

  <body>
    <li> <a href="databases-create.php">Lisa uus</a></li>
    <?php //  print(mysqli_fetch_row($result)); ?>
  <?php while($subject = mysqli_fetch_assoc($result)) { ?>
    <h1 class="page-title"> <?php echo $subject['menu_name']; ?></h1>
    <a href ="databases-update.php?id=<?php echo $subject['id']; ?>">Muuda</a>
    <a href ="databases-delete.php?id=<?php echo $subject['id']; ?>">Kustuta</a>
  <?php } ?>
  <?php mysqli_free_result($result); ?>
    <?php mysqli_close($connect); ?>
  </body>
</html>