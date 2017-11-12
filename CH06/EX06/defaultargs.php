<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Default Arguments</title>
  </head>

  <body>
    <?php

    function paint($room="office",$color="black") {
      return "the color of the {$room} is {$color}.<br />";
    }
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom" );

     ?>
  </body>
</html>
