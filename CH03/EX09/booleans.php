<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Booleans</title>
  </head>

  <body>

    <?php
      $result1 = true;
      $result2 = false;
    ?>

    Result 1: <?php echo $result1; ?><br >
    Result 2: <?php echo $result2; ?><br >

    result 2 is boolean? <?php echo is_bool($result2); ?><br/>
    <br />

    <?php
      $number = 3.14;
      if( is_float($number) ){
        echo "it is a float.";
      }
    ?>

    <?php
      $number = 3;
      if( is_float($number) ){
        echo "it is a float.";
      }
    ?>
  </body>
</html>
