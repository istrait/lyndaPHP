<!DOCTYPE html>

<html lang="en">

  <head>
    <title>BreaK</title>
  </head>

  <body>
    <?php
      for ($count=0; $count <= 10; $count++) {
        if ($count == 5) {
          break;
        }
        echo $count . ", ";
      }
     ?>

     <?php
        for ($i=0; $i<=5; $i++) {
          if ($i %2 == 0) {continue(1);}
          for ($k=0; $k<=5; $k++) {
              if ($k == 3) {break; }
              echo $i . "-" . $k . "<br />";
            }
        }
        ?>
  </body>
</html>
