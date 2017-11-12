<!DOCTYPE html>

<html lang="en">

  <head>
    <title>loops - while</title>
  </head>

  <body>
    <?php
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
          echo "five, ";
        } else {
          echo $count . ", ";
        }
      $count++;
    }
    echo "<br />";
    echo "Count : {$count}";
     ?>

     <br />


    <?php
      $counter = 0;
      while ($counter <= 10) {
        if ($counter % 2 == 1) {
          echo $counter . " is odd<br />";
        } else {
          echo $counter . " is even<br />";
          }
          $counter++;
      }
      ?>
  </body>
</html>
