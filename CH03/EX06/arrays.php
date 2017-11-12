<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Arrays</title>
  </head>

  <body>
    <?php

      $numbers = array(4,8,15,16,23,42);
      echo $numbers[0];

     ?>

     <?php $mixed= array(6, "fox", "dog", array("x", "y", "z")); ?>
     <?php echo $mixed[2]; ?><br />
     <?php //echo $mixed[3]; ?><br />
     <?php //echo $mixed; ?><br />

     <pre>
     <?php echo print_r($mixed); ?><br />
     </pre>

     <?php echo $mixed[3][1]; ?><br />
     <?php $mixed[2] = "cat"; ?>
     <?php $mixed[4] = "mouse"; ?>
     <?php $mixed[] = "horse"; ?>

     <pre>
     <?php
     //PHP 5.4 added short array syntax.
     echo print_r($mixed); ?><br />
     </pre>

     <?php $array = [1,2,3]; ?>

     <pre>
     <?php
     //PHP 5.4 added short array syntax.
     echo print_r($array); ?><br />
     </pre>

  </body>
</html>
