<!DOCTYPE html>

<html lang="en">

  <head>
    <title>ogical If Statments</title>
  </head>

  <body>
    <?php
      $a = 3;
      $b = 4;
      if ($a > $b) {
        echo "a is bigger";
      }
      if ($a < $b) {
        echo "a is not bigger";
      }
    ?>
    <br />

    <?php
      $new_user = true;
      if($new_user) {
        echo "<h1>Welome</h1>";
        echo "<p> We are glad to see you.</p>";
      }
    ?>

    <?php //Bad divide by o
      $numerator = 20;
      $denominator = 4;
      $RESULT = 0;
      if ($denominator > 0) {
        $result = $numerator / $denominator;
    }
    echo "Result: {$result}";
    ?>
  </body>
</html>
