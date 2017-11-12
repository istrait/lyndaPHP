<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Debug</title>
  </head>

  <body>
    <?php
      $number = 99;
      $string = "Bug?";
      $array = array(1 => "Homepage", 2 => "About Us",3 => "Services");

      var_dump($number);
      var_dump($string);
      var_dump($array);

     ?>

     <br />
     <pre>
     <?php
        //print_r(get_defined_vars());
        ?>
      </pre>
      <br />
      <?php

        var_dump(debug_backtrace());

       ?>

     <br />

       <?php
          function say_hello_to($word) {
            echo "Hello {$word}!<br />";
            var_dump(debug_backtrace());
          }

          $name = "John Doe";
          say_hello_to($name);
        ?>
  </body>
</html>
