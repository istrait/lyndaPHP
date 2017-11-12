<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Switch</title>
  </head>

  <body>
    <?php
      $a = 3;
      switch ($a) {
        case  0:
          echo "a = 0<br />";
          break;
        case  1:
          echo "a = 1<br />";
          break;
        case  2:
          echo "a = 2<br />";
          break;
        case  3:
          echo "a = 3<br />";
          break;
        default:
          echo "error";
          break;
      }
     ?>

     <br />

     <?php
        // zodiac with no whitespace
        $year = 2013;
        switch (($year - 4) % 12) {
          case  0: $zodiac = 'Rat';     break;
          case  1: $zodiac = 'Ox';       break;
          case  2: $zodiac = 'Tiger';   break;
          case  3: $zodiac = 'Rabbit';   break;
          case  4: $zodiac = 'Dragon';   break;
          case  5: $zodiac = 'Snake';   break;
          case  6: $zodiac = 'Horse';   break;
          case  7: $zodiac = 'Goat';     break;
          case  8: $zodiac = 'Monkey';  break;
          case  9: $zodiac = 'Rooster'; break;
          case 10: $zodiac = 'Dog';     break;
          case 11: $zodiac = 'Pig';     break;
        }
        echo "{$year} is the year of the {$zodiac}.<br />";
        ?>

        <br />

        <?php
          $user_type = "student";
          switch ($user_type) {
            case "student":
              echo "welcome";
              break;
            case "press":  // put cases together if you wan tthem to do the same statments.
              echo "Greetings";
              break;
            case "customer":
              echo "Hello";
              break;
          }

         ?>

  </body>
</html>
