<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Cast Juggling / Type Casting</title>
  </head>

  <body>

    Cast Juggling<br />
    <?php $count = "2"; ?>
    Type: <?php echo gettype($count)?><br />

    <?php $count +=3; ?>
    Type: <?php echo gettype($count)?><br />

    <?php $cats = "I have " . $count . " cats"; ?>
    Cats: <?php echo gettype($cats)?><br />
    <br />

    Type Casting<br />
    <?php settype($count, "int"); ?>
    count: <?php echo gettype($count); ?><br />

    <?php $count2 = (string) $count; ?>
    Count: <?php echo gettype($count)?><br />
    Count2: <?php echo gettype($count2)?><br />
    <br />

    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <?php settype($test1, "string"); //use this one ?>
    <?php (string) $test2; //conversion happens during assignment ?>
    Test1: <?php echo gettype($test1)?><br />
    Test2: <?php echo gettype($test2)?><br />
  </body>
</html>
