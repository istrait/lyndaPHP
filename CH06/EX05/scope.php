<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Scope and Gobal Variables</title>
  </head>

  <body>
    <?php

      $bar = "outside";  //Global Scope

      function foo() {
        global $bar;
        if (isset($bar)) {
          echo "foo: " . $bar . "<br />";
        }
        $bar = "inside"; // local scope
      }

      echo "1: " . $bar . "<br />";
      foo();
      echo "2: " . $bar . "<br />";
     ?>
  </body>
</html>
