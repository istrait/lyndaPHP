<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Pointers</title>
  </head>

  <body>
    <?php
      $ages = array(4,8,15,16,23,42);
      echo "1: " . current($ages) . "<br />";
      next($ages);
      echo "2: " . current($ages) . "<br />";

      next($ages);
      next($ages);
      echo "3: " . current($ages) . "<br />";

      prev($ages); // Previous slot
      echo "4: " . current($ages) . "<br />";

      reset($ages); // first slot
      echo "5: " . current($ages) . "<br />";

      end($ages); // last slot
      echo "6: " . current($ages) . "<br />";

      next($ages);
      echo "7: " . current($ages) . "<br />";
     ?>

    <br />

    <?php
      reset($ages);
      while($age = current($ages)) {
        echo $age . ", ";
        next($ages);
        }
    ?>
  </body>
</html>
