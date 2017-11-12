<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Loops - For</title>
  </head>

  <body>

    <?php
     $count = 0;
       while ($count <= 10) {
        echo $count . ", ";
        $count++;
       }
      ?>
    <br />

    <?php
    for ($count = 0; $count <= 10; $count++) {
      echo $count . ", ";
    }
     ?>

     <?php
     for ($count = 200; $count > 0; $count--) {
       if ($count % 2 == 0) {
         echo "{$count}, is even. <br />";
       } else {
         echo "{$count}, is odd. <br />";
       }
     }

     ?>


  </body>
</html>
