<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Strings</title>
  </head>

  <body>
    <?php

      echo "Hello World<br />";
      echo 'Hello World<br />'; //try not to use

      $greeting = "Hello";
      $target = " World!";
      $phrase = $greeting . $target;
      echo $phrase;
     ?>
     <br />
     <?php

      echo "$phrase Again<br />";
      echo '$phrase Again<br />'; //Do not use singles
      echo "{$phrase}Again<br />";

      ?>

  </body>
</html>
