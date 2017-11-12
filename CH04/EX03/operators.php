<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Comparison and Logical Operators</title>
  </head>

  <body>
    <?php
      $a = 4;
      $b = 3;
      $c = 20;
      $d = 1;
      if (($a > $b) && ($c > $d)) {
        echo "a is bigger then b AND ";
        echo "c is larger then d";
      }
     ?>

     <br />

     <?php
       $a = 4;
       $b = 3;
       $c = 20;
       $d = 1;
       if (($a > $b) || ($c > $d)) {
         echo "a is bigger then b OR ";
         echo "c is larger then d";
       }
       ?>

       <br />

       <?php
       $e = 100;
       if (!isset($e)) {
         $e = 200;
       }
       echo $e;
      ?>

      <br />

      <?php
      $quantity = 0;
      if (empty($quantity) && !is_numaric($quantity)) {
        echo "You must enter a quantity";
      }
      ?>
  </body>
</html>
