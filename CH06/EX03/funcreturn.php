<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Function Returns</title>
  </head>

  <body>
    <?php
      function add($val1, $val2) {
        $sum = $val1 + $val2;
        return $sum;
      }
      $result = add(3,4);
      $result = add(5,$result);
      echo $result
    ?>

    <br />

    <?php
    function chinese_zodiac($year) {
      switch (($year - 4) %12) {
        case 0: return "rat";
        case 1: return "ox";
        case 2: return "tiger";
        case 3: return "rabbit";
        case 4: return "dragon";
        case 5: return "snake";
        case 6: return "horse";
        case 7: return "goat";
        case 8: return "monkey";
        case 9: return "rooster";
        case 10: return "dog";
        case 11: return "pig";
      }
    }
    $inyear = 2013;
    $zodiac = chinese_zodiac($inyear);
    echo "{$inyear} is the year of the {$zodiac}.<br />";
    $inyear = 2092;
    echo "{$inyear} is the year of the " . chinese_zodiac($inyear) . ".<br />";
    ?>

    <br />

    <?php
      function better_hello($greeting, $target, $punct) {
        return $greeting . " " . $target . $punct . "<br />";
      }

      echo better_hello("Hello", "John", "!");
    ?>

  </body>
</html>
