<?php
  require('components/config.php');
  $query = "SELECT * FROM subjects WHERE visible=1 ORDER BY position;";
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
    <?php if ($editmode) {?>
    <li> <a href="databases-create.php">Lisa uus</a></li>
    <?php } ?>
    <pre>

  <?php while($subject = mysqli_fetch_assoc($result)) { ?>
    <h1 class="page-title"> <?php echo $subject['menu_name']; ?></h1>

    <?php if ($editmode) {?>
    <a href ="databases-update.php?id=<?php echo $subject['id']; ?>">Muuda</a>
    <a href ="databases-delete.php?id=<?php echo $subject['id']; ?>">Kustuta</a>
    <?php } ?>
  <?php } ?>
  <?php mysqli_free_result($result); ?>
  
    </pre>
    <?php mysqli_close($connect); ?>
  </body>
</html>