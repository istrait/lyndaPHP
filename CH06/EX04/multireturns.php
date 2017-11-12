<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Multiple Return Functions</title>
  </head>

  <body>
    <?php
      function add_sbt($val1, $val2) {
        $add = $val1 + $val2;
        $sbt = $val1 - $val2;
        return array($add, $sbt);
      }

      $result_array = add_sbt(10,5);
      echo "add: ". $result_array[0] . "<br />";
      echo "minus: ". $result_array[1] . "<br />";

      list($add_result, $sbt_result) = add_sbt(20,7);
      echo "add: ". $add_result . "<br />";
      echo "minus: ". $sbt_result . "<br />";
     ?>


  </body>
</html>
